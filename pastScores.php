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
<h3>2020-06-02</h3>
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
    <td>5</td>
    <td>8</td>
    <td>3</td>
    <td>5</td>
    <td>7</td>
    <td>3</td>
    <td>4</td>
    <td>9</td>
    <td>4</td>
    <td>3</td>
    <td>4</td>
    <td>3</td>
    <td>5</td>
    <td>6</td>
    <td>4</td>
    <td>6</td>
    <td>4</td>
    <td>3</td>
  </tr>
 
</table>

</div>
<br>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "golfzilla";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection: No need for else.  It will quit if the connection thorws an error.
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
$sql = "SELECT * FROM scores";
$result = $conn->query($sql);
    if ($result->num_rows > 0){
        echo "<table><tr><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th> <th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th> <th>17</th><th>18</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" .$row["strokes"];
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
        
        $conn->close();
        ?>
    
   
    

    <button class="button button3" onclick="document.location = 'golfzilla.php'">Go back to Home Page</button>
<p>
        <button onclick="document.location = 'logout.php'">Sign Out of Your Account</button>
    </p>
<div class="container">
    <p id="response"></p>
    
	
</div>



</body>
</html>