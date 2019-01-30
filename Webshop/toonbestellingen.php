<?php
include("navbar1.php");
?>




<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->query("SELECT * FROM bestellingen");
        echo "<table class='table'>";
    while ($row = $stmt->fetch()) {
        echo "<tr class='table-succes'>"; 
        
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['productid'] . "</td>";
        echo "<td>" . $row['tebetalen'] . "</td>";
        echo "</tr>";
	}	
		echo "</table>";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;		
	
?>


	