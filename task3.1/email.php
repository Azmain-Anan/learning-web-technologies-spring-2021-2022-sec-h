<?php 

	$uerror = "";
	$email = "";

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['email'] == null){
			$uerror  = "invalid email...";
		}else{
			$email = $_REQUEST['email'];
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
				<td>Email</td>
				<td><input type="email" name="email" value="<?=$email?>"></td>
				<td> <?=$uerror?> </td>
			</tr>
			
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html> 