<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved. 
// 
// Application: wcprofessors
// File: 'index.php' 
//   This is a sample skeleton for your application. 
// 

require_once 'facebook.php';

$appapikey = '2cde2081da6903925038d687ffed8f3b';
$appsecret = '3d006a1d25f3614e64d7ce46821798d7';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

// Greet the currently logged-in user!
echo "<p>Hello, <fb:name uid=\"$user_id\" useyou=\"false\" />!</p>";


//// Print out at most 25 of the logged-in user's friends,
//// using the friends.get API method
//echo "<p>Friends:";
//$friends = $facebook->api_client->friends_get();
//$friends = array_slice($friends, 0, 25);
//foreach ($friends as $friend) {
//  echo "<br>$friend";
//}

echo "This application is currently in progress.";

echo "</p>";
