<html>
<head>
<title>Carros</title>
<link href='http://fonts.googleapis.com/css?family=Courgette|Itim|Chewy' rel='stylesheet' type='text/css'>
<style>
body{
	  background-image: url("Car Background.jpg");
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	  position:absolute;
	}
aside{
    margin-top:10px;
    float:right;
    width:400px;
	background-color: #FFEFD5;
	opacity: 0.5;
	padding: 30px;
	margin: 25px;
	font-family: 'Courgette';
	font-size: 18px;
	font-weight: bold;
}
#imgs{
	width: 650px;
	height: 500px;
	padding: 30px;
}
a{
	text-decoration:none;
	color: black;
}
a:hover{
	color: #DC143C;
}
div.navigationb{
	   position: absolute;
	   top: 50px;
	   left: 0px;
	   width: 1330px;
	   height: 40px;
	   background-color: #FFEFD5;
	   opacity: 0.5;
}
div.navigation{
	   position: absolute;
	   top: 50px;
	   left: 0px;
	   width: 1330px;
	   height: 40px;
	   font-size:22px;
	   font-family: 'Itim';
	   font-weight: bold;
}
.sty{
	font-family: 'Courgette'; font-size: 20px; font-weight: bold;
}

</style>
</head>
<body>
<div class="navigationb">
  </div>
  <div class="navigation">
  <nav>
      &nbsp &nbsp &nbsp &nbsp <a href="HOMEPAGE.html"> &nbsp &nbsp HOME &nbsp &nbsp </a> |
      <a href="index.html"> &nbsp &nbsp LOGIN &nbsp &nbsp  </a> |
      <a href="REVIEW.html"> &nbsp &nbsp REVIEW &nbsp &nbsp </a> |
      <a href="BOOKING.html"> &nbsp &nbsp BOOK NOW &nbsp &nbsp </a>
  </nav>
  </div>
  
  
<?php
$servername = "localhost";
$username = "root";
$passwANDd = "";
$dbname = "cars";

$conn = new mysqli($servername, $username, $passwANDd, $dbname);

/*if ($conn->connect_errAND) {
    die("Connection failed: " . $conn->connect_errAND);
} */

$link=$_POST["seater"];
if($_POST["price"]=="a" AND $_POST["mileage"]=="a")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 100000 AND 500000) AND (mileage BETWEEN 10 AND 15) AND (seater='$link')" ;
else if($_POST["price"]=="a" AND $_POST["mileage"]=="b")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 100000 AND 500000) AND (mileage BETWEEN 15 AND 18) AND (seater='$link') ";
else if($_POST["price"]=="a" AND $_POST["mileage"]=="c")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 100000 AND 500000) AND (mileage BETWEEN 18 AND 21) AND (seater='$link') ";
else if($_POST["price"]=="a" AND $_POST["mileage"]=="d")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 100000 AND 500000) AND (mileage BETWEEN 21 AND 25) AND (seater='$link') ";
else if($_POST["price"]=="a" AND $_POST["mileage"]=="e")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 100000 AND 500000) AND (mileage BETWEEN 25 AND 50) AND (seater='$link') ";

else if($_POST["price"]=="b" AND $_POST["mileage"]=="a")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 500000 AND 1000000) AND (mileage BETWEEN 10 AND 15) AND (seater='$link') ";
else if($_POST["price"]=="b" AND $_POST["mileage"]=="b")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 500000 AND 1000000) AND (mileage BETWEEN 15 AND 18) AND (seater='$link') ";
else if($_POST["price"]=="b" AND $_POST["mileage"]=="c")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 500000 AND 1000000) AND (mileage BETWEEN 18 AND 21) AND (seater='$link') ";
else if($_POST["price"]=="b" AND $_POST["mileage"]=="d")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 500000 AND 1000000) AND (mileage BETWEEN 21 AND 25) AND (seater='$link') ";
else if($_POST["price"]=="b" AND $_POST["mileage"]=="e")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 500000 AND 1000000) AND (mileage BETWEEN 25 AND 50) AND (seater='$link') ";

else if($_POST["price"]=="c" AND $_POST["mileage"]=="a")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 1000000 AND 3000000) AND (mileage BETWEEN 10 AND 15) AND (seater='$link') ";
else if($_POST["price"]=="c" AND $_POST["mileage"]=="b")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 1000000 AND 3000000) AND (mileage BETWEEN 15 AND 18) AND (seater='$link') ";
else if($_POST["price"]=="c" AND $_POST["mileage"]=="c")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 1000000 AND 3000000) AND (mileage BETWEEN 18 AND 21) AND (seater='$link') ";
else if($_POST["price"]=="c" AND $_POST["mileage"]=="d")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 1000000 AND 3000000) AND (mileage BETWEEN 21 AND 25) AND (seater='$link') ";
elseif($_POST["price"]=="c" AND $_POST["mileage"]=="e")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 1000000 AND 3000000) AND (mileage BETWEEN 25 AND 50) AND (seater='$link') ";

else if($_POST["price"]=="d" AND $_POST["mileage"]=="a")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 3000000 AND 4000000) AND (mileage BETWEEN 10 AND 15) AND (seater='$link') ";
else if($_POST["price"]=="d" AND $_POST["mileage"]=="b")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 3000000 AND 4000000) AND (mileage BETWEEN 15 AND 18) AND (seater='$link') ";
else if($_POST["price"]=="d" AND $_POST["mileage"]=="c")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 3000000 AND 4000000) AND (mileage BETWEEN 18 AND 21) AND (seater='$link') ";
else if($_POST["price"]=="d" AND $_POST["mileage"]=="d")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 3000000 AND 4000000) AND (mileage BETWEEN 21 AND 25) AND (seater='$link') ";
else if($_POST["price"]=="d" AND $_POST["mileage"]=="e")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 3000000 AND 4000000) AND (mileage BETWEEN 25 AND 50) AND (seater='$link') ";

else if($_POST["price"]=="e" AND $_POST["mileage"]=="a")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 4000000 AND 8000000) AND (mileage BETWEEN 10 AND 15) AND (seater='$link') ";
else if($_POST["price"]=="e" AND $_POST["mileage"]=="b")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 4000000 AND 8000000) AND (mileage BETWEEN 15 AND 18) AND (seater='$link') ";
else if($_POST["price"]=="e" AND $_POST["mileage"]=="c")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 4000000 AND 8000000) AND (mileage BETWEEN 18 AND 21) AND (seater='$link') ";
else if($_POST["price"]=="e" AND $_POST["mileage"]=="d")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 4000000 AND 8000000) AND (mileage BETWEEN 21 AND 25) AND (seater='$link') ";
else if($_POST["price"]=="e" AND $_POST["mileage"]=="e")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 4000000 AND 8000000) AND (mileage BETWEEN 25 AND 50) AND (seater='$link') ";

else if($_POST["price"]=="f" AND $_POST["mileage"]=="a")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 8000000 AND 100000001) AND (mileage BETWEEN 10 AND 15) AND (seater='$link')" ;
else if($_POST["price"]=="f" AND $_POST["mileage"]=="b")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 8000000 AND 100000001) AND (mileage BETWEEN 15 AND 18) AND (seater='$link') ";
else if($_POST["price"]=="f" AND $_POST["mileage"]=="c")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 8000000 AND 100000001) AND (mileage BETWEEN 18 AND 21) AND (seater='$link') ";
else if($_POST["price"]=="f" AND $_POST["mileage"]=="d")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 8000000 AND 100000001) AND (mileage BETWEEN 21 AND 25) AND (seater='$link') ";
else if($_POST["price"]=="f" AND $_POST["mileage"]=="e")
  $sql = "SELECT * FROM cars WHERE (price BETWEEN 8000000 AND 100000001) AND (mileage BETWEEN 25 AND 50) AND (seater='$link') ";

$result = $conn->query($sql);

echo "<br/><br/><br/><br/><br/>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $link = $row["image"];
         echo "<img src='$link' id='imgs'>";
         echo "<aside>";
         echo "<p>Company: ".$row["company"]."</p>";
		 echo "<p>Model: ".$row["model"]."</p>";
         echo "<p>Engine: ".$row["engine"]."</p>";
         echo "<p>Mileage: ".$row["mileage"]."</p>";
         echo "<p>Colors: ".$row["colors"]."</p>";
         echo "<p>Special Features: ".$row["specfeat"]."</p>";
         echo "<p>Seater: ".$row["seater"]."</p>";
         echo "<p>Price: ".$row["price"]."</p>";
         echo "</aside>";
    }
}
else
		echo "<br/><br/><br/><div align='center'><p class='sty'>No Cars Found in the given Range<p></div>";

 mysqli_close($conn);  
?> 
</body>
</html>