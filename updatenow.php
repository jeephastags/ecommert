<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$a=$_POST['bnk48'];
	$b=$_POST['name1']; 
    $c=$_POST['lname1'];
	$s=$_POST['stid'];
	$t=$_POST['sex'];
	$u=$_POST['subject'];
	$mysqli = new mysqli("localhost","root","","e_commt");
	$sql="UPDATE `user_e` SET `password`='$s',`u_name`='$t',`u_address`='$b',`u_sex`='$c',`u_level`='$u' WHERE user_e.u_id='$a'";
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