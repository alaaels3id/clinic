<?php 

/*
 *Database class 
 */

class Database
{
	private $host;
	private $user;
	private $pass;
	private $db;

	function __construct($file)
	{
		if(is_file($file)) include $file;
		else throw new Exception("Error : Can not Open the file!!");

		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->db   = $db;

		$this->Connect();	
	}
	public function Connect(){
		$con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		if(!$con) throw new Exception("Error : Can not Connect to the Server!!");
		
		if(!mysqli_select_db($con, $this->db)) throw new Exception("Error : Can not Connect to Database!!");
		return $con;
	}
	function Close(){
		$con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		mysqli_close($con);
	}
}

?>