<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table border="0"width="100%">
  <tbody>
    <tr>
      <td width="225"><img src="page/images/Untitled-1_01.jpg" width="224" height="100" alt=""/></td>
      <td width="944" style="color: #F8F4F4"><form id="form1" name="form1" method="post" action="out.php"> 
        <input type="submit" name="submit" id="submit" value="ออกจากระบบ">
      </form></td>
    </tr>
    <tr>
      <td><img src="page/images/Untitled-1_10.jpg" width="220" height="64" alt=""/></td>
      <td rowspan="4" align="center" valign="top">
		  <?php
	$igd=$_GET['id'];
	$mysqli = new mysqli("localhost","root","","e_commt");
	$sql="select * from tbl_product where p_id='$igd'";
	$result=$mysqli->query($sql);
	$r=$result-> fetch_array();
	
	
	?>
		<form id="form1" name="form1" method="post" action="updatenow2.php">
	  <p>แก้ไขข้อมูล</p>
	  <p>&nbsp;</p>
	   <table width="200" border="1">
	    <tbody>
	      <tr>
	        <td>ชื่อสินค้า</td>
	        <td><input name="stid" type="text" id="stid" value="<?php echo $r[1];?>"></td>
          </tr>
	      <tr>
	        <td>รายละเอียด</td>
	        <td><input name="sex" type="text" id="sex" value="<?php echo $r[2];?>"></td>
          </tr>
	      <tr>
	        <td>ราคา</td>
	        <td><input name="name1" type="text" id="name1" value="<?php echo $r[3];?>"></td>
          </tr>
	      <tr>
	        <td>size</td>
	        <td><input name="lname1" type="text" id="lname1" value="<?php echo $r[4];?>"></td>
          </tr>
	      <tr>
	        <td>จำนวนที่มี</td>
	        <td><input name="subject" type="text" id="subject" value="<?php echo $r[5];?>"></td>
          </tr>
			 <td>ประเภท</td>
	        <td><input name="subject1" type="text" id="subject" value="<?php echo $r[6];?>"></td>
          </tr>
	     
	         <td><input type="submit" name="submit" id="submit" value="บันทึกการเปลี่ยนแปลง"></td>
			<td><input type="reset" name="reset" id="reset" value="ยกเลิกการเปลี่ยนแปลง"></td>
          </tr>
       
      </table>
	  <p>
	    <input name="bnk48" type="hidden" id="bnk48" value="<?php echo $r[0]; ?>">
      </p>
	  <p>&nbsp;</p>
</form>
		
		
		</td>
		
    </tr>
    <tr>
      <td><img src="page/images/Untitled-1_11.jpg" width="220" height="450" alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>
</body>
</html>