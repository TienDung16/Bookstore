<?php 
    include_once '/xampp/htdocs/BookShop/php/dbconnect.php';
    $id=$_GET['id'];
    $sql="DELETE FROM user WHERE id ='$id'";
     $kq=mysqli_query($conn,$sql);
     if($kq) echo "<script>alert('Xóa Thành Công!')</script>";
     else echo "<script>alert('Xóa Thất Bại')</script>";
     echo "<script>window.location.href='./user.php'</script>";

?>