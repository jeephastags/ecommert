<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>เพิ่มสินค้า</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
 
<body>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <br />
      <h4 align="center"> ฟอร์มพรีออเดอร์สินค้า </h4>
      <hr />
      <form action="sinka.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="p_id1">
        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
            <textarea name="p_detail" class="form-control"  rows="3"  required placeholder="รายละเอียดสินค้า"></textarea>
          </div>
        </div>
        <div class="form-group">
			<div class="col-sm-3">
            <p> size </p>
           <textarea name="p_size" class="form-control"  rows="3"  required placeholder="กรอกไซต์"></textarea>
          </div>
         <div class="form-group">
          <div class="col-sm-3">
            <p> ราคา (บาท) </p>
            <input type="number"  name="p_price" class="form-control" required placeholder="ราคา" />
          </div><p> <br><br><br><br><br><br>จำนวน </p>
            <input type="number"  name="p_num" class="form-control" required placeholder="จำนวน" /width="220" height="64" >
          <div class="col-sm-8 info"><br><div class="col-sm-3">
            <p> ประเภท </p>
           <textarea name="p_pat" class="form-control"  rows="3"  required placeholder="ประเภท"></textarea>
          </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" name="btnadd"> + เพิ่มสินค้า </button><br><br>
		 
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>