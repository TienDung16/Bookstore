<?php
    require 'inc/header.php'
?>

<?php
    include_once '/xampp/htdocs/BookShop/php/dbconnect.php';
    $sql= "Select * From user";
    $data=$conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box-user{
            margin-left: 50px;
            margin-top: 50px;
            width: 1100px;

        }
        .box-user h1{
            background-color: aqua;
            text-align: center;
            color: red;
        }
        .box-user table{
            margin-top: 15px;
            width: 1100px;
            height: 20px;
            border: 1px;
            text-align: center;
            text-align: center;
        }
        
        .box-user .btn-add{
            width: 150px;
            height: 30px;
            font-size: medium;
            border-radius: 15px;
            
        }
        .box-user .btn-add a{
            color: cadetblue;
        
        }

    </style>
</head>
<body>
    <div class="box-user" >
    <h1>Quản Lý Người Dùng</h1>
    <div class="">
        <table cellspacing = "0"; class="table"  >
            <tr  style="background-color: black; color: aliceblue; height: 40px; border: 2px solid ; border-radius: 25px; " >
                <th>ID</th>
                <th>UserName</th>
                <th>Email</th>
                <th>PassWord</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Authority</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php
                        $i = 1;
                        //b3:xử lý kết quả truy vấn (hiển thị mảng $data lên bảng )
                        if(isset($data)&&$data!=null){
                            while($row=mysqli_fetch_array($data)){
                        
                    ?>
                    <tr style="height: 50px;" >
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['username']   ?></td>
                        <td><?php echo $row['email']   ?></td>
                        <td><?php echo $row['password']   ?></td>
                        <td><?php echo $row['mobile']  ?></td>
                        <td><?php echo $row['address']  ?></td>
                        <td><?php echo $row['authority']  ?></td>
                        <td>
                            <a style="text-decoration: none;" href="./edit-user.php?id=<?php echo $row['id']  ?>">Sửa</a> 
                        </td>
                        <td>
                            <a style="text-decoration: none;" href="./xoauser.php?id=<?php echo $row['id']  ?>">Xóa</a> 
                        </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
            </table>
    </div>
    <div>
        <button class="btn-add"><a style="text-decoration: none;" href="./add-user.php">Thêm User Mới</a></button>
    </div>
    
</div>
</body>
</html>

<?php
    require 'inc/footer.php'
?>