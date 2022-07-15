
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF8">
    <meta http-equiv= "X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=11.0">
    <title>Add Member</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>    
<body>
<div class="container"> 
<div class="row">
    <div class="col-sm-6">
<div class="h4 text-center alert alert-info mb-4 mt-4" role="alert">เพิ่มข้อมูลสมาชิก</div>
    <from method="POST" action="insert_member.php">
    <label>ชื่อ:</label>
    <input type="text" name="fname"  class="form-control"  placeholder="ชื่อ" required ><br>
    <label>นามสกุล:</label>
    <input type="text" name="lname"  class="form-control"  placeholder="นามสกุล" required ><br>
    <label>เบอร์โทร:</label>
    <input type="number" name="telephone"  class="form-control"  placeholder="เบอร์โทร" required ><br>
    <input type="submit" value="submit"  class="btn btn-success">
    <a href="show_member.php" class="btn btn-danger">Cancel</a>
</form>
    
</div>
</div>

</div>
</body>
</html>