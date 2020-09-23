<?php

class DBControllor
{
    protected $host = 'localhost:8989';
    protected $user = 'root';
    protected $password = 'root';
    protected $database = 'puthisonatshirt.com';

    // connection property
    public $con = null;

    // call constructor
    public function __construct(){
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            die("Fialed Connection").$this->con->connect_error;
        }
    }

    public function close(){
        $this->closeConnection( );
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if($this->con!=null){
            $this->con->close();
            $this->con=null;
        }
    }

}
