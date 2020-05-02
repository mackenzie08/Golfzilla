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
<title>Scores</title>
<link rel="stylesheet" href= "stylesheet.css">
</head>



<img src="golfzillalogo.png" alt="Logo"><br>
<p>Your Scores</p> <br>
<div class="w3-container">

  <table class="w3-table w3-striped w3-border">
    <tr>
      <th>Date</th>
      <th>Course</th>
      <th>Score</th>
    </tr>
    <tr>
      <td>08/24/2019</td>
      <td>Augusta National Golf Club</td>
      <td>72</td>
    </tr>
    <tr>
      <td>01/1/2020</td>
      <td>TPC Sawgrass</td>
      <td>84</td>
    </tr>
  </table>
</div>
<button class="button button3" onclick="document.location = 'golfzilla.php'">Back to Home Page</button><br>
    
   
    


<p>
        <button onclick="document.location = 'logout.php'">Sign Out of Your Account</button>
    </p>
<div class="container">
    <p id="response"></p>
    
	
</div>



</body>
</html>