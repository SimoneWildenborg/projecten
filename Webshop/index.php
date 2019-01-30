<?php
include("navbar.php");
?>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <BR><BR>
    <h2 class="prodlist">Productenlijst</h2>
<?php
    include("toonproducten.php");
?>

<BR><BR>
<?php
    include("toonbestellingen.php")
?>




<footer>
    <p class="footext">Posted by: Simone Wildenborg</p>
    <p class="footext">Contact information: <a href="#!">  </a>.</p>
</footer>
</body>


