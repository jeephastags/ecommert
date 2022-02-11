<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<?php
	$igd=$_GET['id'];
	$mysqli = new mysqli("localhost","root","","shoolpro");
	$sql="select * from student where id='$igd'";
	$result=$mysqli->query($sql);
	$r=$result-> fetch_array();
	
	
	?>
	<form id="form1" name="form1" method="post" action="updatenow.php">
	  <p>แก้ไขข้อมูล</p>
	  <p>&nbsp;</p>
	  <table width="200" border="1">
	    <tbody>
	      <tr>
	        <td>รหัสนักเรียน</td>
	        <td><input name="stid" type="text" id="stid" value="<?php echo $r[1];?>"></td>
          </tr>
	      <tr>
	        <td>คำนำหน้า</td>
	        <td><input name="sex" type="text" id="sex" value="<?php echo $r[2];?>"></td>
          </tr>
	      <tr>
	        <td>ชื่อ</td>
	        <td><input name="name1" type="text" id="name1" value="<?php echo $r[3];?>"></td>
          </tr>
	      <tr>
	        <td>นามสกุล</td>
	        <td><input name="lname1" type="text" id="lname1" value="<?php echo $r[4];?>"></td>
          </tr>
	      <tr>
	        <td>วิชา</td>
	        <td><input name="subject" type="text" id="subject" value="<?php echo $r[5];?>"></td>
          </tr>
	      <tr>
	        <td>รหัสผ่าน</td>
	        <td><input name="password1" type="password" id="password1" value="<?php echo $r[6];?>"></td>
          </tr>
	      <tr>
	        <td>userlevel</td>
	        <td><input name="level" type="text" id="level" value="<?php echo $r[7];?>"></td>
          </tr>
	      <tr>
	        <td>email</td>
	        <td><input name="email" type="text" id="email" value="<?php echo $r[8];?>"></td>
          </tr>
	      <tr>
	        <td><input type="submit" name="submit" id="submit" value="บันทึกการเปลี่ยนแปลง"></td>
	        <td><input type="reset" name="reset" id="reset" value="ยกเลิกการเปลี่ยนแปลง"></td>
          </tr>
        </tbody>
      </table>
	  <p>
	    <input name="bnk48" type="hidden" id="bnk48" value="<?php echo $r[0]; ?>">
      </p>
	  <p>&nbsp;</p>
</form>
</body>
</html>