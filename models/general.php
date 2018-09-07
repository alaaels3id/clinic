<?php 
	/**
	* General Class To Use General Functions
	*/
	class General
	{
		private $cxn;

		function connectToDB(){
	        include '../models/database.php';
	        $this->cxn = new Database('../models/info.php');
	    }
	    function Close(){
	    	$this->cxn->Close();
	    }
	}
?>