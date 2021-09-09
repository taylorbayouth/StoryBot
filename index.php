<?php
// Start the session
session_start();

include_once(__dir__ . "/incs/commons.class.php");

?>
<html>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/profile.js"></script>
<link href='http://fonts.googleapis.com/css?family=Abhaya%20Libre' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/profile.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/112f54d6c9.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
include "incs/header.inc.php"
?>

<div class="container" style="margin-top: 50px;">
	<h2 style="margin-top: 15px;">Story what?</h2>
	<h5 style="margin-top: 15px;">StoryBot is a place where great stories turn into <span style="background-color: #F26267; padding: 2px; color: #ffffff; padding-left: 5px; padding-right: 5px;">captivating puzzles</span> and hyper-immersive first-peson experiences.</h5>
	<h5 style="margin-top: 15px;"><span style="background-color: #F0BB00; padding: 2px; color: #ffffff; padding-left: 5px; padding-right: 5px;">Have you ever been Captain Nemo,</span> trapped inside your submarine, while the giant squid was attacking you? We welcome you into a new, short-form medium where the lines between reading and puzzle-solving are blurred and where the decisions you make will shape the story, and ultimately, the outcome.</h5>
	<h5 style="margin-top: 15px;">Come explore our gallery of short, interactive fictions, <span style="background-color: #01CADE; padding: 2px; color: #ffffff; padding-left: 5px; padding-right: 5px;">or become a builder of worlds,</span> yourself.

	<div class="d-flex justify-content-center" style="margin-top: 30px;">
		<img src="imgs/captain_nemo_fish.png" height="160">
	</div>

	<div class="" style="margin-top: 50px; text-align: center;">
		<h2>No registration needed!</h2>
		<h5>Just sign-in with your Google account and get started.</h5>
		<h5>(We only see your email address.)</h5>
	</div>
</div>		

</body>
</html>