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
<body> 



<img src="golfzillalogo.png" alt="Logo"><br>
<p>Welcome to Golfzilla!</p> 
<h2><label for="fname">Score:</label></h2>
<div class="container">

<form method = "GET" action = "golfzilla2.php" >
<p>
<input type = "submit"  name = "strokes" value = 1 id = 1></button>
<input type = "submit" name = "strokes" value = 2 id = 2></button>
<input type = "submit" name = "strokes" value = 3 id = 3></button>
<input type = "submit" name = "strokes" value = 4 id = 4></button>
<input type = "submit" name = "strokes" value = 5 id = 5></button>
<input type = "submit" name = "strokes" value = 6 id = 6></button>
<input type = "submit" name = "strokes" value = 7 id = 7></button>
<input type = "submit" name = "strokes" value = 8 id = 8></button>
<input type = "submit" name = "strokes" value = 9 id = 9></button>
<input type = "submit" name = "strokes" value = 10 id = 10></button>

</p>
</form>
</div>

<button class="button button3" onclick="document.location = 'endofround.php'">End Round</button>
<br>
<button class="button button3" onclick="document.location = 'golfzilla.php'">Go back to Home Page</button>
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
$hole = 1;
if(!isset($_POST["strokes"])){
    $strokes = $_GET['strokes'];
    $sql = "INSERT INTO score(id, rid, strokes) VALUES (1,1, '$strokes');";
    
    if ($conn->query($sql)){
        echo "<p> Score Recorded </p>";
      } 
      
      
  }
  $conn->close();    
    ?>



