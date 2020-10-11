<?php

// fetch product data
class DBproduct{
    public $db = null;

    public function __construct(DBControllor $db)
    {
        if(!isset($db->con))
        return null;
        $this->db = $db;            
    }

    // fetch product data from detData method
     public function getData($table = 'product')
     {
     $result = $this->db->con->query("SELECT * FROM {$table}");

     $resultArray = array();

     // fetch product data 
     while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
     {
         $resultArray[] = $item;
     }
     return $resultArray;
     }

    //  get product detail using item_id
    public function getProduct($item_id=null,$table='product'){
        if(isset($item_id))
        {
        $result=$this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id}");

        $resultArray = array();

        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}
}