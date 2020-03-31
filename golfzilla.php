
<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>


<!doctype html>
<html>
<head>
    <style>
        .button3 {width: 50%;}
    </style>
<meta charset="utf-8">
<title>Golfzilla</title>
<link rel="stylesheet" href= "stylesheet.css">
</head>



<img src="golfzillalogo.png" alt="Logo"><br>
<p>Welcome to Golfzilla!</p> <br>
<button class="button button3" onclick="document.location = 'golfzilla2.php'">Start Round</button><br>
<button class="button button3">View Past Scores</button>
    
   
    


<p>
        <button onclick="document.location = 'reset-password.php'">Reset Your Password</button>
        <button onclick="document.location = 'logout.php'">Sign Out of Your Account</button>
    </p>
<div class="container">
    <p id="response"></p>
    
	
</div>



</body>
</html>