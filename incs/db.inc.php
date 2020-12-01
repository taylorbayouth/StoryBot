<?php

$db_host        = 'localhost';
$db_username    = 'root';
$db_password    = 'root';
$db_database    = 'storybot';

class DBConnection extends MySQLi
{

    public function query($query, $type=MYSQLI_STORE_RESULT)
    {
        $ts = microtime(true);

        $this->real_query($query);

        return new DBResult($this);
    }
}


class DBResult extends MySQLi_Result
{
    public function fetch_object($class_name=null, array $params=null) {
        return @parent::fetch_object();
    }

    public function close() {
        @$this->free();
    }
}


$DB = @new DBConnection($db_host, $db_username, $db_password, $db_database);

if ( $DB->connect_error ) {
    echo sprintf("Error. DB Connection problem <!-- %s -->", $DB->connect_error);
    die;
}

unset($db_host);
unset($db_username);
unset($db_password);
unset($db_database);

?>