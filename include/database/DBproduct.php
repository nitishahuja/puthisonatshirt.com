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
    //  $result = $this->db->con->query(query:"SELECT * from table {$table}");

     $resultArray = array();

    //  fetch product data 
    //  while($item = mysqli_fetch_array($result,resulttype: MYSQLI_ASSOC))
     {
        //  $resultArray[] = $item;
     }
     }
}