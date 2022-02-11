<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	//$a = $_POST['p_id1'];
	$b = $_POST['p_name'];
	$c = $_POST['p_detail'];
	$d = $_POST['p_size'];
	$e = $_POST['p_price'];
	$g = $_POST['p_num'];
	$h = $_POST['p_pat'];
	$mysqli = new mysqli("localhost","root","","e_commt");
	$sql= "INSERT INTO tbl_product( p_name,p_detail,p_price,p_site,p_num,ex_id) VALUES ('$b','$c','$e','$d','$g','$h')" ;
	$result2=$mysqli->query($sql);
	
	echo ("เพิ่มรายการสำเร็จ");
	header("Location: addsinka.php");	

	?>
</body>
</html>