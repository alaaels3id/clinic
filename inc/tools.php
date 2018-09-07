<?php 

	function tooltip($tip){
		echo " data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"$tip\" ";		
	}
	function fmodal($id){
		echo "data-toggle=\"modal\" data-target=\"$id\" ";
	}
?>