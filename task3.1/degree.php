<?php 

	$uerror = "";
	$degree = "";

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['degree'] == null){
			$uerror  = "invalid degree...";
		}else{
			$degree = $_REQUEST['degree'];
		}
	}	

?>


<html>
<head>
	<title>Login page</title>
</head>
<body>

	<form method="POST" action="#">
		<table>
			<tr>
				<td>Degree</td>
				<td>
                <select name="">
                        <input type="checkbox" name="" value="<?=$degree?>"> SSC  
						<input type="checkbox" name="" value="<?=$degree?>"> HSC  
						<input type="checkbox" name="" value="<?=$degree?>"> BSc 
                        <input type="checkbox" name="" value="<?=$degree?>"> MSc 
				</select>
                </td>
				<td>  </td>
			</tr>
			
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html> 