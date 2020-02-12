<?php
//waar staat de server
$host = "localhost";

//database naam
$dbname = "ijshorentje";

//gebruikernaam
$user = "root";

//wachtwoord
$password = "";

$pconn = new PDO("mysql:host=$host;dbname=$dbname",
    "root", "") or die();

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<link rel="stylesheet" href="style2.css">
<script src="https://use.fontawesome.com/d1341f9b7a.js?v=<?php echo time(); ?>">"></script>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"+
          charset="UTF-8">
    <title>Hoi stefan</title>
</head>


<body>

<div class="header">
    <img src="Image/banner.jpg" alt="" class="center"  height="225" width="1600">
</div>


<ul>
    <li><a class="active" href="home.php">Home</a></li>
    <li><a href="CV.php">CV</a></li>
    <li><a href="projecten.php">Projecten</a></li>
    <li><a href="contacten.php">Contact</a></li>



</ul>

 <h2> Dit ben ik! </h2>

<center><img CLASS="self" src="Image/selfie.jpg" alt=""   height="275" width="350"/></center>
<p>Naam: Stefan van Nijf <br/>Waar woon ik: Dordrecht <br/>Email: stefanvannijf2003@gmail.com <br/>Telefoonnummer: 06 0655**** </p>




</body>
</html>

