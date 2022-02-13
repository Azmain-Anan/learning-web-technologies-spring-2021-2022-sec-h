<?php 

	$uerror = "";
	$gender = "";

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['gender'] == null){
			$uerror  = "invalid gender...";
		}else{
			$gender = $_REQUEST['gender'];
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
				<td>Gender</td>
				<td>
                        <input type="radio" name="gender" value="<?=$gender?>"> Male
						<input type="radio" name="gender" value="<?=$gender?>"> Female
						<input type="radio" name="gender" value="<?=$gender?>"> Other
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