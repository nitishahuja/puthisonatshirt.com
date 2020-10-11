<?php 
//   require mysql connection
require("./include/database/DBControllor.php");

//   require DBPRODUCT
require("./include/database/DBproduct.php");

//   require Cart
require("./include/database/Cart.php");
 

// DBControllor object
$db = new DBControllor();
 
// product object
$product = new  DBproduct($db);


// Cart Object
$cart = new Cart($db);
