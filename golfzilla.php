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
        .button3 {width: 80%;}
    
    </style>
<meta charset="utf-8">
<title>Golfzilla</title>
<link rel="stylesheet" href= "stylesheet.css">
</head>



<br><img src="golfzillalogo.png" alt="Logo"><br>
<br>
<br>
<h1>Welcome to Golfzilla!</h1> <br>
<input type = "submit" class="button button3" onclick="document.location = 'golfzilla2.php'" name = "start" value = "Start Round"></button><br>
<button class="button button3" onclick="document.location = 'pastscores.php'">View Past Scores</button>

   
    


<p>
        <button onclick="document.location = 'reset-password.php'">Reset Your Password</button>
        <button onclick="document.location = 'logout.php'">Sign Out of Your Account</button>
</p>
<div class="container">
    <p id="response"></p>
    
	
</div>



</body>
</html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "golfzilla";

    $conn = new mysqli($servername, $username, $password, $dbname);
    

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(!isset($_GET["start"])){

        $sql = "INSERT INTO roundinfo(id, tdate) VALUES (1, NOW());";
          
      }

  $conn->close();    
    ?>