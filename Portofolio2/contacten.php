<?php

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
    <li><a href="#">CV</a></li>
    <li><a href="#">Projecten</a></li>
    <li><a href="contacten.php">Contact</a></li>



</ul>

<h3>Contact Form</h3>

<div class="containerr">
    <form action="/action_page.php">
        <label for="fname">Voornaam</label>
        <input type="text" id="fname" name="firstname" placeholder="Uw voornaam..">

        <label for="lname">Achternaam</label>
        <input type="text" id="lname" name="lastname" placeholder="Uw achternaam..">

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            <option value="Nederland">Nederland</option>
        </select>

        <label for="subject">Onderwerp</label>
        <textarea id="subject" name="subject" placeholder="Wat is je vraag.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>



</body>
</html>