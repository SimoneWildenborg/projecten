
<form>
<input name="naamfilter" placeholder="Zoek naar">
<input type="submit" value="filter">
</form>


<?php
if (isset($_GET['naamfilter']))
    {$naamfilter =$_GET['naamfilter'];
    }
    else{
        $naamfilter = '';
    }



$conn = new PDO ("mysql:host=localhost;dbname=webshopdb", "root", "");


$stmt = $conn->query("SELECT * FROM producten WHERE naam LIKE '%$naamfilter%' ");
while ($row = $stmt->fetch()){
    echo "<LI>" . $row['naam'] . ":" . $row['prijs'];
    echo "<a href='dbproductverwijderen.php?productid=" . $row['id'] . "'> verwijder</a>";
    echo "<a href='productbewerken.php?productid=" . $row['id'] . "'>Wijzigen</a>";
    echo "<a href='koopproduct.php?productid=" . $row['id'] . "'>Kopen</a>";
    echo "</LI>";
}

$conn = null;


?>