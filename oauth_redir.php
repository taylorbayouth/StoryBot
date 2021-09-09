<?php
// Start the session
session_start();

require_once 'libs/vendor/autoload.php';
 
// init configuration
$clientID = '70369335195-vcj1d8ua9iutcs9oqb1aeds3l8hgfes8.apps.googleusercontent.com';
$clientSecret = '9EaztV5MrjctkwlLGQAr_YIQ';
$redirectUri = 'http://localhost:8888/storybot/oauth_redir.php';
  
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
//$client->addScope("profile");
 
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
  
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;

  $_SESSION["google_oauth_info"] = array($email, $name);

  header("Location: http://localhost:8888/storybot/gallery.php");

  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>