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
	$d=$_POST['subject1']; 
	$mysqli = new mysqli("localhost","root","","e_commt");
	$sql="UPDATE `tbl_product` SET `p_name`='$s',`p_detail`='$t',`p_price`='$b',`p_site`='$c',`p_num`='$u',`ex_id`='$d'WHERE tbl_product.p_id='$a'";
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