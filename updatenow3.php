<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$a=$_POST['n1'];
	$b=$_POST['n2']; 
    $c=$_POST['n3'];
	$s=$_POST['n4'];
	$t=$_POST['n5'];
	$u=$_POST['n6'];
	$d=$_POST['n7'];
	$nt=$_POST['n8'];
	$r= $t*350;
	$mysqli = new mysqli("localhost","root","","e_commt");
	$sql="INSERT INTO `or_t`( `o_name`, `o_address`, `o_detel`, `o_size`, `o_phone`, `o_date`, `o_num`, `o_total`) VALUES('$a','$b','$nt','$c','$s','$d','$r')";
	$result=$mysqli->query($sql);
	if($result){
		echo "อัพเดทเรียบ100";
		
		header("refresh:2;url=u.php");
		exit;
	}else{ echo "แหมเสียดายจัง เฮ้อเสียดายจัง";
		header("refresh:2;url=u.php");
		exit;
	}
			
	?>
</body>
</html>