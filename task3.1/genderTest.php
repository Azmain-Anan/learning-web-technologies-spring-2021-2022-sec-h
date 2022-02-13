<?php 

	//print_r($_GET);
	//print_r($_REQUEST);

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['gender'] == null){
			echo "invalid gender...";
		}else{
			echo "success";
		}
	}


   ?>