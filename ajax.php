<?php

//   require mysql connection
require("./include/database/DBControllor.php");

//   require DBPRODUCT
require("./include/database/DBproduct.php");

// DBControllor object
$db = new DBControllor();

// product object
$product = new  DBproduct($db);


if(isset($_POST['itemid'])){
    $result=$product->getProduct($_POST['itemid']);
    echo json_encode($result);
}