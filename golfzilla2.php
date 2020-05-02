<head>
    <style>
        .button3 {width: 50%;}
    </style>
<meta charset="utf-8">
<title>Golfzilla</title>
<link rel="stylesheet" href= "stylesheet.css">
</head>



<img src="golfzillalogo.png" alt="Logo"><br>

<p>Welcome to Hole 1!</p> 
<h2><label for="fname">Score:</label></h2>
<form action = "golfzilla2.php" method = "post">
<p>
<input type = "button"  name = "stokes" value = 1 ></button>
<input type = "button" name = "strokes" value = 2></button>
<input type = "button" name = "strokes" value = 3></button>
<input type = "button" name = "strokes" value = 4></button>
<input type = "button" name = "strokes" value = 5></button>
<input type = "button" name = "strokes" value = 6></button>
<input type = "button" name = "strokes" value = 7></button>
<input type = "button" name = "strokes" value = 8></button>
<input type = "button" name = "strokes" value = 9></button>
<input type = "button" name = "strokes" value = 10></button>
</p>
<br>
<p>
<button onClick="document.location = 'golfzilla.php'">Return to Main Page</button><br>
 </p>   
   
     




<div class="container">
    <p id="response"></p>
    
	
</div>
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


$stroke = $_POST['strokes'];
mysql_query("INSERT INTO scores (rid, hole1) VALUES (1,'$stroke')");

mysql_close($con);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    ?>


</body>
</html>
