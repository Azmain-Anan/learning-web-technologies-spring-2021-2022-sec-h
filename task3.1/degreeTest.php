<?php 

	//print_r($_GET);
	//print_r($_REQUEST);

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['degree'] == null){
			echo "invalid degree...";
		}else{
			echo "success";
		}
	}


   ?>