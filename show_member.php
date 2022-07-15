<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF8">
    <meta http-equiv= "X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=11.0">
    <title>Member</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>    
<body>
    <div class="container"> 
    <div class="h4 text-center alert alert-info mb-4 mt-4" role="alert">แสดงข้อมูลสมาชิก</div>
<a href="fr_member.php" class="btn btn-success mb-4">Add+</a>

    <table class="table table-dark table-striped">
    <tr>
        <th>รหัส</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>เบอร์โทร</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    $sql = "SELECT * FROM member";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?=$row["id"]?></td>
        <td><?=$row["name"]?></td>
        <td><?=$row["surname"]?></td>
        <td><?=$row["telephone"]?></td>
        <td><a href="edit_member.php?id=<?=$row["id"]?>" class="btn btn-secondary">Update</a></td>
        <td><a href="delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger" onclick="Del(this.href); return false;">Delete</a> </td>
</tr>
<?php
}
mysqli_close($conn);   //ปิดการเชื่อมต่อข้อมูล
?>
</table>
</div>

</body>
</html>

<script language="JavaScript">
    function Del(mapage){
        var agree=confirm("คุณต้องการลบข้อมูลหรือไม่")ว
        window.location=mypage;
    }
</script>