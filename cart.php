<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form id="form1" name="form1" method="post" action="updatenow3.php">
		<?php
		$igd=$_GET['id'];
	    $mysqli = new mysqli("localhost","root","","e_commt");
		$sql="select * from tbl_product where p_id='$igd'";
		$result=$mysqli->query($sql);
		$r=$result-> fetch_array();
		?>
	  <p>
	    <label for="textfield">ชื่อลูกค้า:</label>
	    <input type="text" name="n1" id="textfield">
	    
      </p>
	  <p>
	    <label for="textfield6">ชื่อสินค้า:</label>
        <input type="text" name="n6" id="textfield6" value="<?php echo $r[1];?>">
	  </p>
		<p>
	    <label for="textfield6">รายละเอียด:</label>
        <input type="text" name="n8" id="textfield6" value="<?php echo $r[2];?>">
	  </p>
	  <p>
	    <label for="textfield2">ที่อยู่:</label>
        <input type="text" name="n2" id="textfield2">
	  </p>
	  <p>
	    <label for="textfield3">size:</label>
        <input type="text" name="n3" id="textfield3" value="<?php echo $r[4];?>">
	  </p>
	  <p>
	    <label for="textfield4">เบอร์โทร:</label>
        <input type="text" name="n4" id="textfield4">
	  </p>
	  <p>วันที่จ่ายเงิน<input type="text" name="n7" id="textfield5" value="<?php echo date("Y-m-d")?>"></p>
	  <p>จำนวนที่สั่ง <input type="number" name="n5">
	  </p>
	  <p>
	    <input type="submit" name="submit" id="submit" value="พรีออเดอร์">
	  </p>
	</form>
</body>
</html>