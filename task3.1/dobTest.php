<?php 

	//print_r($_GET);
	//print_r($_REQUEST);

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['dob'] == null){
			echo "invalid dob...";
		}else{
			echo "success";
		}
	}


   ?>