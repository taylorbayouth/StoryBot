<?php
// Start the session
session_start();

include_once(__dir__ . "/incs/commons.class.php");
//$common = new Common;
//echo $common->generateAlphaNumericStr(10);
//print_r($_SESSION["google_oauth_info"]);
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


<!--
<p>StoryBot is a place where great stories turn into captivating puzzles and hyper-immersive games.</p>
<p>Have you ever been Captain Nemo, trapped inside your submarine while the giant squid was attacking you? We welcome you in to experience a new first-person, short-form medium where the lines between literature and puzzle are blurred and where your choices shape the story, and ultimately, the outcome.</p>
<img src="imgs/captain_nemo_fish.png" class="captain_nemo_fish">
<p class="home_about logo_block">No registration needed!<br />Just sign-in with your Google account. (We'll only see your email address.)</p>
-->





<!--
<div class="fixed-top">	
	<div class="header_container">
		<img src="svgs/brand.svg" class="svg_brand">

<?php
if(!isset($_SESSION["google_oauth_info"])) {
?>

	<div class="home_about">
			<p>StoryBot is a place where great stories turn into captivating puzzles and hyper-immersive games.</p>
		<p>Have you ever been Captain Nemo, trapped inside your submarine while the giant squid was attacking you? We welcome you in to experience a new first-person, short-form medium where the lines between literature and puzzle are blurred and where your choices shape the story, and ultimately, the outcome.</p>
		<img src="imgs/captain_nemo_fish.png" class="captain_nemo_fish">
		<p class="home_about logo_block">No registration needed!<br />Just sign-in with your Google account. (We'll only see your email address.)</p>
		<img src="svgs/decisionChip.svg" class="decision_chip">

<?php
} //if(!isset($_SESSION["google_oauth_info"])) {
	else {
?>

	</div>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>



</div>
<?php
} //else {}
?>
-->
</body>
</html>