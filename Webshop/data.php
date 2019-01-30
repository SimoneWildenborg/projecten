<?php
abstract class data 
{
    protected $connection = null;
    

    function __construct()
    {
      $this->connection = new PDO("mysql:host=localhost;dbname=webshopdb", "root", "");
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
    

    function __destruct()
    
    {
    $this->connection = null;
    }

}


?>
