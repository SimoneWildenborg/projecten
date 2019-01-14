<html>
<head>

</head>
<body>
    <h2>Welkom op mijn website</h2>
    <ul>
        <li><a href="producttoevoegen.html">Product toevoegen</a>
        <li><a href="toonbestellingen.php">Bestellingen</a>
        <li> Menu item
        <li> Menu item
    </ul>

    <h2>Productenlijst</h2>
    <?php
        include("toonproducten.php");
    
    ?>
<BR><BR>
<h2>Alle bestellingen</h2>

<?php
    include("toonbestellingen.php")

?>


</body>


</html>