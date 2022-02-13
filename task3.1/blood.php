<?php 

	$uerror = "";
	$blood = "";

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['blood'] == null){
			$uerror  = "invalid blood...";
		}else{
			$blood = $_REQUEST['blood'];
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
				<td>Blood</td>
				<td>
                <select name="">
							<option value="<?=$blood?>">O+</option>
							<option value="<?=$blood?>">O-</option>
							<option value="<?=$blood?>">A+</option>
                            <option value="<?=$blood?>">A-</option>
							<option value="<?=$blood?>">B+</option>
							<option value="<?=$blood?>">B-</option>
                            <option value="<?=$blood?>">AB+</option>
							<option value="<?=$blood?>">AB-</option>
							
						</select>
                </td>
				<td> <?=$uerror?> </td>
			</tr>
			
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html> 