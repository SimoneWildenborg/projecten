<?php
class productmodel extends Data
{
    public function getAllProducts()
    {
    $statement = $this->connection->prepare("SELECT * FROM producten ");
    $statement->execute();
    return $statement;
    }
}


$product=new productmodel();
$products=$product->getAllProducts();
foreach ($products as $product)
{
    echo("<h5>". $product['id'] ." <h2>" . $product['naam'] . " ". "<h2>" . $product['prijs'] . "<br>");
}


?>