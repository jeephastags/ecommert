<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$id=$_GET['id'];
	$mysqli = new mysqli("localhost","root","","e_commt");
	$sql= "DELETE FROM user_e WHERE u_id='$id'";
	$result=$mysqli->query($sql);
	if($result){
		echo "อัพเดทเรียบ100";
		header("refresh:2;url=admin.php");
		exit;
	}else{ echo "แหมเสียดายจัง เฮ้อเสียดายจัง";
		header("refresh:2;url=admin.php");
		exit;
	}
	?>
</body>
</html>