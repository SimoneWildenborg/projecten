<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>


<div class="zoeker">

<form >
<input class="zoek" name="naamfilter" placeholder=" Zoek naar">
<input class="subm" type="submit" value="filter">
</form>
</div>
<BR><BR>

<?php
if (isset($_GET['naamfilter']))
    {$naamfilter =$_GET['naamfilter'];
    }
    else{
        $naamfilter = '';
    }



$conn = new PDO ("mysql:host=localhost;dbname=webshopdb", "root", "");


$stmt = $conn->query("SELECT * FROM producten WHERE naam LIKE '%$naamfilter%' ");

echo "<table class='table'>";
	while ($row = $stmt->fetch()) {
    echo "<tr class='table-succes'>"; 
    echo "<td>" . $row['naam'] . "</td><td>" . $row['prijs'] . "</td>";
    echo "<td><a class='btn btn-danger btn-sm' href='dbproductverwijderen.php?productid=" . $row['id'] . "'>Verwijder</a></td> ";
    echo "<td><a href='productbewerken.php?productid=" . $row['id'] . "'><button type='button' class='btn btn-primary  btn-sm'>Wijzigen</button></a></td>";
    echo "<td><a href='koopproduct.php?productid=" . $row['id'] . "'><button type='button' class='btn btn-success  btn-sm'>Kopen</button></a></td>";
    
	echo "</tr>";
  }	
echo "</table>";

$conn = null;


?>


