<?php
include 'condb.php';
$ids = $_GET['id'];
$sql="DELETE FROM member WHERE id='$ids' ";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_member.php';</scipt>";
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามรถลบข้อมูลเรียบร้อย');</script>";
}
mysqli_close($conn);
?>
