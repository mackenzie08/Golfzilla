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
<h1>Your Scorecard!</h1> <br>
<table>
  <tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
    <th>11</th>
    <th>12</th>
    <th>13</th>
    <th>14</th>
    <th>15</th>
    <th>16</th>
    <th>17</th>
    <th>18</th>
    
  </tr>
  <tr>
    <td>4</td>
    <td>4</td>
    <td>3</td>
    <td>5</td>
    <td>7</td>
    <td>3</td>
    <td>5</td>
    <td>4</td>
    <td>4</td>
    <td>5</td>
    <td>4</td>
    <td>3</td>
    <td>5</td>
    <td>6</td>
    <td>4</td>
    <td>5</td>
    <td>3</td>
    <td>4</td>
  </tr>
 
</table>
<br>

<button class="button button3" onclick="document.location = 'pastScores.php'">View Past Scores</button> <br>
<button class="button button3" onclick="document.location = 'golfzilla.php'">Go back to Home Page</button>
    
   
    


<p>
        <button onclick="document.location = 'logout.php'">Sign Out of Your Account</button>
</p>
<div class="container">
    <p id="response"></p>
    
	
</div>



</body>
</html>
