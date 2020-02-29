<?php

class db{
    public $con;
    function __construct(){
        
$this->con = mysqli_connect("localhost","root","","bookshop");
  if(!($this->con)){
     echo "error in connection"; 
      
  }      
    }
    
}

$obj=new DB();
?>