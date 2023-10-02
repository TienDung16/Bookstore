<?php
    require 'inc/header.php'
?>

<?php
    include_once '/xampp/htdocs/BookShop/php/dbconnect.php';
    if(isset($_POST['btn_submit'])){
        $id = $_POST['ID'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $authority = $_POST['authority'];
        $sql = "INSERT INTO user VALUES ('$id','$username',' $email',' $password','$mobile ','$address','$authority') " ;
        $data = mysqli_query($conn,$sql);
        if($data){
            header("Location: ./user.php");
            exit;
        } 
        else echo "<script>alert('Thêm Thất Bại')</script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box-form{
            margin-left: 350px;
            margin-top: 30px;
        }
        .box-form h2{
            color: red;
            margin-left: 100px;
        }
        .form{
            width: 200px;
        }
        .form label{
            font-size: 20px;
        }
        .form .btn{
            width: 100px;
            height: 30px;
            
        }
        .btn:hover{
            background-color: aquamarine ;
            color: red;
        }
        .form .form-control{
            margin-top: 15px;
            margin-bottom: 10px;
            width: 500px;
            height: 35px;
            font-size: large;
        }
    </style>
</head>
<body>
    <div class="box-form" >
         <h2  >Thông Tin Sản Phẩm</h2>
        <form  method="post"  >
            <div class="form" >
                <label >ID</label>
               <input name="ID" type="text"  class="form-control" >
               <label >UserName</label>
               <input name="username" type="text"  class="form-control" >
               <label >Email</label> 
               <input name="email" type="text" class="form-control">
               <label >PassWord</label>
               <input name="password" type="number"  class="form-control" >
               <label >Mobile</label>
               <input name="mobile" type="number"  class="form-control" >
               <label >Address</label>
               <input name="address" type="number"  class="form-control" >
               <label >Authority</label>
               <input name="authority" type="text"  class="form-control" >
               
               
               <button name="btn_submit" type="submit" class="btn ">Submit</button>
            </div>
         </form>
         
      </div>
</body>
</html>

<?php
    require 'inc/footer.php'
?>