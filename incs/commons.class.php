<?php

class Common {

    function dbConnect() {
        $conn = mysqli_connect("localhost", "root", "root", "storybot") or die(mysqli_connect_error());
        return $conn;
    }


    function buildTestTree($num){
        //Print out the number.
        if($num == 1)echo "<ul>\n";

        //If the number is less or equal to 50.
        if($num <= 10){

            //Call the function again. Increment number by one.
            echo  "     <li>\n" . 
                            $num . 
                        "</li>\n";
            return $this->buildTestTree($num + 1);
        }

        if($num == 11)echo "</ul>\n";
    }
    

    function buildReturn($var1 = null, $var2 = null, $var3 = null, $var4 = null) {

        //define some vars
        $str = "";
        $arr = array();
        $bool = null;
        $int = null;
        $row = array();

        //put all the var types into an array, randomly
        $arr_of_junk = array($var1, $var2, $var3, $var4);

        //sort through them and identify by type
        foreach ($arr_of_junk as $key => $value) {
            if(is_string($value))$str = $value;
            if(is_array($value))$arr = $value;
            if(is_bool($value))$bool = $value;

            //in this case look at the type and an array item to make sure it contains an insert_id
            //grab select query result
            if(is_array($value) && is_int($value[1])) {
                $sql = "SELECT * FROM " . $value[0] . " WHERE id = '$value[1]'";
                $conn = $this->dbConnect();
                $result = mysqli_query($conn, $sql); 
                $row = $result->fetch_array(MYSQLI_ASSOC);            
            }
        }

        //package it all up neatly
        return array("return" => $bool, "result" => $arr, "response" => $str, "inserted_row" => $row);
    }


	function generateAlphaNumericStr($numOfChars = 10) {

        // String of all alphanumeric character 
        $alphaNumStr = "0123456789abcdefghijklmnopqrstuvwxyz";

        //populate this array() as new tables get created with unique ID columns
        //make sure the ID is unique accross the entire DB
        $arr_of_tables_to_check = array (
            array("users", "uid"),
            array("stories", "story_id"),
            array("moments", "moment_id"),
            array("choices", "choice_id")
        );

        //set var
        $bad_hit = 0;

    	while(true) {

            //create a random n-digit string
            $randId = substr(str_shuffle($alphaNumStr), 0, $numOfChars);

            //loop through any tables that use unique IDs
            foreach ($arr_of_tables_to_check as $key => $value) {

                //look for matches (we don't want these)
                $sql = "SELECT id FROM " . $value[0] . " WHERE " . $value[1] . " = '$randId'";
                $result = mysqli_query($this->dbConnect(), $sql);

                //increment "bad_hits" if we find a match
                $bad_hit = $bad_hit + $result->num_rows;
            }

            //only when we have seen all n tables do we check the tally
            //if we see > 0, the loop is endless (we'll need some oversight here but for testing purposes we'll leave this)
            if($bad_hit == 0)break;
		}
		return $randId;
	}


    //just to clean up redundant INSERT code. 
    //Will look at SELECT soon but WHERE makes it harder
    function sqlInsertWrapper($tableName, $fieldsArr, $valuesArr) {

        //make sure the fields and values match
        if(count($fieldsArr) != count($valuesArr)) {
            $return = $this->buildReturn(false, "Your field count does not match your value count!"); 
            return $return;
        }

        //tunn them into strings that SQL will like
        $fieldsArr = implode(fieldsArr, ", ");
        $valuesArr = "'" . implode(fieldsArr, "', '$") . "'";

        //build the query, perform the INSERT
        $sql = "INSERT INTO " . $tableName . " (" . $fieldsArr . ") VALUES (" . $valuesArr . ")";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);

        //spit it all back so we can disect
        $return = $this->buildReturn(true, array($tableName, $conn->insert_id));
        return $return;

    }

    //just google oauth for the time being
    function createPlayer($goog_email, $session_id = null) {

        //this does email reges?? sweet!
        if(!filter_var($goog_email, FILTER_VALIDATE_EMAIL)) {
            return array(0, "We've encountered an error registering your email address. Please try again."); 
        }

        //check user
        $sql = "SELECT id FROM users WHERE goog_email = '$goog_email'";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);

        //check to make sure this is the first time they registered
        if($result->num_rows > 0) {
            $return = $this->buildReturn(false, "This email address is already in use."); 
            return $return;
        }

        //set some default values
        $uid = $this->generateAlphaNumericStr(10);
        $session_id = $this->generateAlphaNumericStr(10);

        $sql = "INSERT INTO users (uid, goog_email, session_id) VALUES ('$uid', '$goog_email', '$session_id')";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);

        if(!$conn->insert_id) {
            $return = $this->buildReturn("DB failure", false); 
            return $return; 
        } 

        $return = $this->buildReturn(true, "You're all set! Feel free to browse the Story Gallery, or use our tools to create your own!", array("users", $conn->insert_id));
        return $return;
    }


    function createStory($uid, $story_title, $story_subtitle, $story_description) {

        //invent uid for testing
        $story_id = $this->generateAlphaNumericStr(10);

         //insert story
        $uid = $this->generateAlphaNumericStr(10);

        $sql = "INSERT INTO stories (uid, story_id, story_title, story_subtitle, story_description) VALUES ('$uid', '$story_id', '" . addslashes($story_title) . "', '" . addslashes($story_subtitle) . "', '" . addslashes($story_description) . "')";

        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);

        if(!$result->insert_id) {
            $return = $this->buildReturn("DB failure", false); 
            return $return;
        }

        $return = array(true, "You've created a new story! Let's get started...");
        return $return;
    }


    function createMoment($story_id, $moment_id, $event_type, $text) {

        //check for char count
        if(strlen($text) > 1000) {
            $return = $this->buildReturn("Please keep your moment to under 170 words. Not enough? Try stringing multiple moments together without events.", false);
            return $return;   
        }

        //don't forget to include the table to search
        $moment_id = $this->generateAlphaNumericStr(10);

        //insert moment
        $sql = "INSERT INTO moments (story_id, moment_id, event_type, text) VALUES ('$story_id', '$moment_id', '$event_type', '$text')";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);

        if(!$result->insert_id) {
            $return = $this->buildReturn("A database error has occured", false);
            return $return;
        }

        $return = $this->buildReturn("A new moment has been added!", true, array("moments", $conn->insert_id));
        return $return;
    }


    function createChoice($choice_order = null, $choice_text) {

        //create choice ID
        $choice_id = $this->generateAlphaNumericStr(10);
        $moment_id = $this->generateAlphaNumericStr(10);

        //insert choice
        $sql = "INSERT INTO choices (choice_id, moment_id, choice_order, choice_text) VALUES ('$choice_id', '$moment_id', '$choice_order', '$choice_text')";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);

        if(!$result->insert_id) {
            $return = $this->buildReturn("There was a database error!", false);
            return $return; 
        }        

        $return = $this->buildReturn("A new choice has been added!", true, array("choices", $conn->insert_id));
        return $return;
    }


    function getStory($story_id) {
        $sql = "SELECT * FROM stories WHERE story_id = '$story_id'";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);

        if(!$result->num_rows) {
            $return = $this->buildReturn("There was a database error!", false);
            return $return;
        }

        $row = $result->fetch_array(MYSQLI_ASSOC);

        $return = $this->buildReturn("Success!", $row, true); 
        return $return;
    }


    function getMomentsForStory($story_id) {
        $sql = "SELECT * FROM moments WHERE story_id = '$story_id'";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);

        if($result->num_rows == 0) {
            $return = $this->buildReturn("There was a database error!", false); 
            return;
        }
        $row = $result->fetch_array(MYSQLI_ASSOC); 

        $return = $this->buildReturn("Success! Here's are the moments for the story you wanted.", $row, true); 
        return $return;
    }


    function getMoment($moment_id) {
        $sql = "SELECT * FROM moments WHERE moment_id = '$moment_id'";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);

        if($result->num_rows == 0) {
            $return = $this->buildReturn("There was a database error!", false); 
            return;
        }
        $row = $result->fetch_array(MYSQLI_ASSOC); 

        $return = $this->buildReturn("Success! Here's the moment you asked for.", $row, true); 
        return $return;
    }

    function getChoices($moment_id) {
        $sql = "SELECT * FROM choices WHERE moment_id = '$moment_id'";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);
        
        if($result->num_rows == 0) {
            $return = $this->buildReturn("There was a database error!", false); 
            return $return;
        }
        $row = $result->fetch_array(MYSQLI_ASSOC);

        $return = $this->buildReturn("Success! Here are the choices for this moment.", $row, true); 
        return $return;
    }


    function getChoice($choice_id) {
        $sql = "SELECT * FROM choices WHERE choice_id = '$choice_id'";
        $conn = $this->dbConnect();
        $result = mysqli_query($conn, $sql);
        
        if($result->num_rows == 0) {
            $return = $this->buildReturn("There was a database error! Here's the choice you requested.", false); 
            return $return;
        }
        $row = $result->fetch_array(MYSQLI_ASSOC);

        $return = $this->buildReturn("Success!", $row, true); 
        return $return;
    }


    //WIP!!!!!!!!!!!!!
    function getParentEntity($anyChildId) {
        $arr_of_tables_to_check = array (
            array("users", "uid"),
            array("stories", "story_id"),
            array("moments", "moment_id"),
            array("choices", "choice_id")
        );
        
        foreach ($arr_of_tables_to_check as $key => $value) {
                    # code...
        }        

    }



}














