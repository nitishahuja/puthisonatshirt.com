<?php 
//   require mysql connection
require("./include/database/DBControllor.php");


//   require DBPRODUCT
require("./include/database/DBproduct.php");

//   require cart
require("./include/database/cart.php");
 

// DBControllor object
$db = new DBControllor();
 
// product object
$product = new  DBproduct($db);


// Cart Object
$cart = new cart($db);
$arr = array(
    "user_id"=>2,
    "item_id" =>1003
);

$cart->inserIntoCart($arr);
