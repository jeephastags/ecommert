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
      <td><a href="admin.php"><img src="page/images/Untitled-1_10.jpg" width="220" height="64" alt=""/></a></td>
      <td rowspan="4" align="center" valign="top"><table width="100%" border="1">
        <tbody>
          <tr>
            <td align="center" valign="top">ID</td>
            <td align="center" valign="top">ชื่อสินค้า</td>
            <td align="center" valign="top">รายละเอียด</td>
            <td align="center" valign="top">ราคา</td>
			<td align="center" valign="top">ขนาด</td>
			 <td align="center" valign="top">จำนวน</td>
			  <td align="center" valign="top">ประเภท</td>
            <td align="center" valign="top">แก้ข้อมูล</td>
			<td align="center" valign="top">ลบข้อมูล</td>
          </tr>
			<?php
	
			$mysqli = new mysqli("localhost","root","","e_commt");
			$sql= "SELECT * FROM tbl_product";
			
			$result=$mysqli->query($sql);
			while($r=$result->fetch_array()){
			?>
          <tr>
            <td align="center" valign="top"><?php echo $r[0]?></td>
            <td align="center" valign="top"><?php echo $r[1]?></td>
            <td align="center" valign="top"><?php echo $r[2]?></td>
			<td align="center" valign="top"><?php echo $r[3]?></td>
			<td align="center" valign="top"><?php echo $r[4]?></td>
			<td align="center" valign="top"><?php echo $r[5]?></td>
			<td align="center" valign="top"><?php echo $r[6]?></td>
			
			<td align="center" valign="top"><a href='editdata3.php?id=<?php echo $r[0]?>'>แก้ไขข้อมูล</a></td>
			 <td align="center" valign="top"><a href='deldata2.php?id=<?php echo $r[0]?>'>ลบข้อมูล</a></td>
          </tr>
        </tbody>
		  <?php } ?>
      </table></td>
    </tr>
    <tr>
     <td><a href="order.php"><img src="images/icons/Untitled-1.png" width="220" height="64" alt=""/></a></td>
    </tr>
    <tr>
      <td><a href="addsinka.php"><img src="images/icons/Untitled-2.png" width="220" height="64" alt=""/></a></td>
    </tr>
    <tr>
      <td><img src="page/images/Untitled-1_11.jpg" width="220" height="450" alt=""/></td>
  </tbody>
</table>
</body>
</html>