<?php

//php cart class
class Cart{
    public $db = null;

    public function __construct(DBControllor $db)
    {
        if(!isset($db->con))
        return null;
        $this->db = $db;            
    }

    public function inserIntoCart($params = null, $table = "cart"){
        if($this->db->con!=null){
            if($params!=null){
                $columns = implode(',',array_keys($params));

                $value = implode(',',array_values($params));

                $query = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$value);
                
                // execute query
                $result = $this->db->con->query($query);
                return $result;
            }
        }
    }

    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    //  to get user_id and item_id and insert it iinto cart table
    public function  addToCart($user_id,$item_id){
        if(isset($user_id)&&isset($item_id)){
            $params=array(
                "user_id"=>$user_id,
                "item_id"=> $item_id
            );
            // insert data into cart table
            $result = $this->inserIntoCart($params);
            if($result){
                header("Refresh:0;url=cart.php");
            }
        }
    }

    // delete item
    public function deleteItem($item_id=null,$table='cart'){
        if($item_id!=null){
        $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
        if($result){
            header("Location:" .$_SERVER['PHP_SELF']);
        }
        return $result;
        }
    }

    // remove duplicate items
    public function getCartId($cartArray=null,$key="item_id"){
        if($cartArray!=null){
            $cart_id=array_map(function($value)use($key){
                return $value[$key];
            },$cartArray);
            return $cart_id;
        }
    }
}

?>