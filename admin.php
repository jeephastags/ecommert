<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mani admin</title>
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
      <td rowspan="4" align="center" valign="top"><table width="100%" border="1">
        <tbody>
          <tr>
            <td align="center" valign="top">ID</td>
            <td align="center" valign="top">password</td>
            <td align="center" valign="top">name</td>
            <td align="center" valign="top">address</td>
			<td align="center" valign="top">sex</td>
			 <td align="center" valign="top">level</td>
            <td align="center" valign="top">แก้ข้อมูล</td>
			<td align="center" valign="top">ลบข้อมูล</td>
          </tr>
			<?php
			
			$mysqli = new mysqli("localhost","root","","e_commt");
			$sql= "SELECT * FROM user_e ";
			
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
            <td width=50px><a href='editdata2.php?id=<?php echo $r[0]?>'>แก้ไขข้อมูล</a></td>
          <td width=50px><a href='deldata.php?id=<?php echo $r[0]?>'>ลบข้อมูล</a></td>
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