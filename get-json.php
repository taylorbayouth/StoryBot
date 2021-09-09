<?php
include "incs/story.class.php";
include "incs/db.inc.php";



// Create the story object and pass it the ID of the story we want to deal with
$storyObject	= new Story( 1 );


// Just load all nodes for the story
$ALL_NODES		= $storyObject->getAllNodes();


// Send the header saying this will ONLY be json displaying
header('Content-Type: application/json');

// Spit out the JSON
echo @$json_prefix . json_encode($ALL_NODES) . @$json_suffix;