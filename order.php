<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cheak order admin</title>
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
            <td align="center" valign="top">รหัสออเดอร์</td>
            <td align="center" valign="top">รหัสสถานะ</td>
            <td align="center" valign="top">ชื่อลูกค้า</td>
			<td align="center" valign="top">ที่อยู่ลูกค้า</td>
			 <td align="center" valign="top">sizeที่สั่ง</td>
			  <td align="center" valign="top">เบอร์โทร</td>
			  <td align="center" valign="top">วันที่จ่ายเงิน</td>
			  <td align="center" valign="top">จำนวนที่สั่ง</td>
			  <td align="center" valign="top">รวมราคา</td>
			  <td align="center" valign="top">สถานะชำระเงิน</td>
			   <td align="center" valign="top">สินค้าชื่อ</td>
              
          </tr>
			<?php
			


		
			$mysqli = new mysqli("localhost","root","","e_commt");
			$sql= "SELECT or_t.o_id,or_t.s_id,or_t.o_name,or_t.o_address,or_t.o_size,or_t.o_phone,.or_t.o_date,or_t.o_num,or_t.o_total,status_pt.s_pay,or_t.o_detel FROM or_t INNER JOIN status_pt ON or_t.s_id=status_pt.s_id";
			
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
			<td align="center" valign="top"><?php echo $r[7]?></td>
			<td align="center" valign="top"><?php echo $r[8]?></td>
			<td align="center" valign="top"><?php echo $r[9]?></td>
			<td align="center" valign="top"><?php echo $r[10]?></td>
		
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
     <td><a href="cheaksinka.php"><img src="images/icons/Untitled-3.png" width="220" height="64" alt=""/></a></td>
    </tr>
    <tr>
      <td><img src="page/images/Untitled-1_11.jpg" width="220" height="450" alt=""/></td>
    </tr>
  </tbody>
</table>
</body>
</html>