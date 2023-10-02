<?php
    require 'inc/header.php'
?>

<?php 
     include_once '/xampp/htdocs/BookShop/php/dbconnect.php';
     $id = $_GET['id'];
     $sql = "Select * From user WHERE id = '$id'";
     $data = mysqli_query($conn,$sql);
    if(isset($_POST['btnLuu'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $authority = $_POST['authority'];
        $sql1 = "UPDATE user SET username='$username',email = '$email',password ='$password',mobile = '$mobile', address='$address',authority='$authority' WHERE id ='$id'" ;
        $kq=mysqli_query($conn,$sql1);
                if($kq){
                    header("Location: ./user.php");
                    exit;
                } 
                else echo "<script>alert('Sửa Thất Bại')</script>";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box-edit {
            width: 1100px;
            margin-top: 50px;
            margin-left: 350px;
        }
        .box-edit table{
            width: 500px;
            
        }
        .box-edit table tr{
            height: 40px;
            font-size: 15px;
        }
        .box-edit table tr td input{
            width: 200px;
            height: 30px;
            font-size: large;
        }
        .btn:hover{
            background-color: brown;
            color: aquamarine;
        }
    </style>
</head>
<body>
<div  class= box-edit>
        <form action="" method="post">
            <table style="text-align: center;" cellspacing="0">
                <tr>
                    <td colspan="2" style="font-size: 30px;" >
                        <h5 style="color: red;" >CẬP NHẬT THÔNG TIN NGƯỜI DÙNG</h5>
                    </td>
                </tr>
                <?php
                    if(isset($data)&&$data!=null){
                        while($row=mysqli_fetch_array($data)){
                  ?>
                   <tr>
                    <td>ID</td>
                    <td>
                        <input  type="text" name="id" value="<?php echo $row['id'] ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>UserName</td>
                    <td>
                        <input  type="text" name="username" value="<?php echo $row['username'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" value="<?php echo $row['email'] ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>PassWord</td>
                    <td>
                        <input type="text" name="password" value="<?php echo $row['password'] ?>">
                    </td>
                </tr>
               
                <tr>
                    <td>Mobile</td>
                    <td>
                        <input type="text" name="mobile" value="<?php echo $row['mobile'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>
                        <input type="text" name="address" value="<?php echo $row['address'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Authority</td>
                    <td>
                        <input type="text" name="authority" value="<?php echo $row['authority'] ?>">
                    </td>
                </tr>
                <?php               
                        }
                    }
                ?>
                <tr>
                    
                    <td colspan="2">
                        <input  style="width: 100px; background-color: darkgray ; color: red; border-radius: 15px; "class="btn"  type="submit" name="btnLuu" value="Lưu">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<?php
    require 'inc/footer.php'
?>