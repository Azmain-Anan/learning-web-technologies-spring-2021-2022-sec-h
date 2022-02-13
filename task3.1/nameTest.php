<?php 

	//print_r($_GET);
	//print_r($_REQUEST);

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['username'] == null){
			echo "invalid username...";
		}else{
			echo "success";
		}
	}


   ?>