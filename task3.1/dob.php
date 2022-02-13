<?php 

	$uerror = "";
	$dob = "";

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['dob'] == null){
			$uerror  = "invalid dob...";
		}else{
			$dob = $_REQUEST['dob'];
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
				<td>DoB</td>
				<td><input type="date" name="dob" value="<?=$dob?>"></td>
				<td> <?=$uerror?> </td>
			</tr>
			
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html> 