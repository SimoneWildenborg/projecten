<?php
include('navbar.php');
?>


<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>


<?php
    $productid = $_GET['productid'];
    try {
        $conn = new PDO("mysql:host=localhost;dbname=webshopdb", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // let op: dit nog herschrijven als prepared statement
        $statement = $conn->prepare("SELECT * FROM producten WHERE id = :fproductid");
        $statement->execute([
         'fproductid' => $productid
         ]);
         
        while ($row = $statement->fetch()) {
            $productnaam = $row['naam'];
            $productprijs = $row['prijs'];
        }	
            
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null;	
?>
<body>
<BR>
<BR>

<form class="prodfilterr" action="dbproductupdate.php" method="POST">
<BR>
    <input class="zoekr" name="productid" placeholder="Product id" value="<?php echo $productid ?>">
    <input class="zoekr" name="productnaam" placeholder="Product naam" value="<?php echo $productnaam ?>">
    <input class="zoekr" name="productprijs" placeholder="Product prijs" value="<?php echo $productprijs ?>"> 
    <button class="btn btn-success" type="submit">Pas aan</button>

</form>
</body>