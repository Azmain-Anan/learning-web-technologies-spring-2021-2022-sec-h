<?php 

	//print_r($_GET);
	//print_r($_REQUEST);

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['blood'] == null){
			echo "invalid bloodgroup...";
		}else{
			echo "success";
		}
	}


   ?>