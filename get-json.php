<?php
include "incs/story.class.php";
include "incs/db.inc.php";



// Create the story object and pass it the ID of the story we want to deal with
$storyObject	= new Story( 1 );


// Just load all nodes for the story
$ALL_NODES		= $storyObject->getAllNodes();


// Send the header saying this will ONLY be json displaying
header('Content-Type: application/json');

/*
$json_prefix = '
    var chart_config = {
        chart: {
            container: "#collapsable-example",
            animateOnInit: true,
            connectors: {
                type: "step",
                style: {
                    "stroke-width": 2,
                    "stroke": "#F26267"
                }
            },        
            node: {
                collapsable: true,
                drawLineThrough: false
            },
            animation: {
                nodeAnimation: "easeOutBounce",
                nodeSpeed: 700,
                connectorsAnimation: "bounce",
                connectorsSpeed: 700
            }
        },
';
*/

//$json_suffix = '};';

// Spit out the JSON
echo @$json_prefix . json_encode($ALL_NODES) . @$json_suffix;