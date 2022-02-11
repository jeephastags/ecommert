<form> </form><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$id =$_POST['id1'];
	$pass =$_POST['password1'];
	$mysqli = new mysqli("localhost","root","","e_commt");
	
	$sql= "SELECT * FROM user_e WHERE  u_id = $id and password = $pass ";
	$result2=$mysqli->query($sql);
	$q=$result2-> fetch_array();
	
	
	 if ($q[5]=="U"){
		
		header("Location:u.php");
		
	}elseif($q[5] =="A"){
		header("Location:admin.php");
	}else{
		echo "ไม่สามารถเข้าสู่ระบบได้";
	}
		
	?>
	
</body>
</html>