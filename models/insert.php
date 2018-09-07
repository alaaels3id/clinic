<?php 
	/**
	* to insert data into any table;
	*/
	class InsertInto extends General
	{
		private $data;
		private $tbname;
		private $cxn;

		function __construct($data, $tbname)
		{
			if(is_array($data)){
				$this->data = $data;
				$this->tbname = $tbname;
			}else{
				throw new Exception("Error: this data must be an array");
			}
			$this->connectToDB();
			$this->addData();
			$this->cxn->Close();
		}
		function connectToDB(){
	        include '../models/database.php';
	        $this->cxn = new Database('../models/info.php');
	    }
		function addData()
		{
			foreach ($this->data as $key => $value) {
				$keys[] = $key;
				$values[] = $value;
			}
			$conn = $this->cxn->Connect();
			
			$tbkeys = implode($keys, ",");
			$datavalue = '"'.implode($values, '","').'"';
			
			$sql = mysqli_query($conn, "INSERT INTO $this->tbname ($tbkeys) VALUES ($datavalue)");
			
			if($sql) return TRUE;
			else throw new Exception("Error: Can not excute the query!");
		}
	}
?>