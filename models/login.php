<?php 

/*
 *Login class 
 */

class Login
{
    private $username;
    private $password;
    private $r_name;
    private $r_pass;
    private $table;
    private $cxn;

    function __construct($data, $r_name, $r_pass, $table){
        //setData
        if(is_array($data)) $this->setData($data, $r_name, $r_pass, $table);
        
        //connectToDB
        $this->connectToDB();

        //getData
        $this->getData();
    }

    private function setData($data, $r_name, $r_pass, $table){
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->r_name   = $r_name;
        $this->r_pass   = $r_pass;
        $this->table    = $table;
    }
    
    private function connectToDB(){
        include 'database.php';
        $this->cxn = new Database('../models/info.php');
    }
    
    private function getData(){
        $un  = $this->username;
        $usp = $this->password;
        
        $tbname = "`".$this->table."`";
        $rname = "`".$this->r_name."`";
        $rpass = "`".$this->r_pass."`";
        $conn = $this->cxn->Connect();
        
        $query = "SELECT * FROM $tbname WHERE $rname = '$un' AND $rpass = '$usp'";
        $sql   = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($sql) > 0) return TRUE;
        else throw new Exception("Error : Username or password is invalid!!");
    }
    private function Close(){
        $this->cxn->Close();
    }

}

?>