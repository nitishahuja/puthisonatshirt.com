<?php 
//   require mysql connection
require("./include/database/DBControllor.php");


//   require DBPRODUCT
require("./include/database/DBproduct.php");


// DBControllor object
$db = new DBControllor();
 
// product object
$product = new  DBproduct($db);

// print_r($product->getData());