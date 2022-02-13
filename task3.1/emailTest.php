<?php 

	//print_r($_GET);
	//print_r($_REQUEST);

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['email'] == null){
			echo "invalid email...";
		}else{
			echo "success";
		}
	}


   ?>