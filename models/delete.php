<?php 
	/**
	* To delete some elemet from some table
	*/
	class Delete
	{
		private $table;
		private $cxn;

		function __construct($table){
			//set the data;
			$this->table = $table;

			//connect to database;
			$this->connectToDB();
		}
		private function connectToDB(){
            include 'database.php';
            $this->cxn = new Database('../models/info.php');
        }
		function delete($id)
		{
			$id = intval($id);
			$conn = $this->cxn->Connect();
			$query = "DELETE FROM `$this->table` WHERE `id` = '$id'";
			
			if(mysqli_query($conn, $query)) return TRUE;
			else throw new Exception("Error: Can not excute the query!");
		}
	}
?>