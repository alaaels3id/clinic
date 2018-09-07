<?php 
	/**
	* this is update model
	*/
	class Update
	{
		private $tbname;
		private $data;
		private $cxn;

		function __construct($data, $tbname)
		{
			if(is_array($data)){ 
				$this->tbname = $tbname; 
				$this->data   = $data; 
			}
			$this->connectToDB();
		}
		private function connectToDB(){
            include 'database.php';
            $this->cxn = new Database('../models/info.php');
        }
		function update($id)
		{
			$id = intval($id);
			$query = "UPDATE `$this->tbname` SET ";
			foreach ($this->data as $key => $value) {
				$query .= "`".$key."` = '".$value."', ";
			}
			$pat = "/*-$%";
			$query .= $pat;
			$query = str_replace(", ".$pat, " ", $query);
			$query .= "WHERE `id` = '$id'";

			$conn = $this->cxn->Connect();
			$sql = mysqli_query($conn, $query);
			if(!$sql){
				throw new Exception("Error : the querry is not excuted !");
				return FALSE;
			}else{
				return TRUE;
			}
		}
	}
?>