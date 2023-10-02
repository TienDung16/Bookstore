<?php
    require dirname(__DIR__) . '/models/user.php';
    require 'dbconnect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        session_start();

        $row = $result->fetch_assoc();
        if ($row) {
            $user = new User(
                $row['id'],
                $row['username'],
                $row['email'],
                $row['password'],
                $row['mobile'],
                $row['address'],
                $row['authority']
            );
        }

        $_SESSION['current_user'] = $user;
        if ($user->getAuthority() == 0) {
            header('Location: http://localhost/BookShop/admin');
        } else {
            header('Location: http://localhost/BookShop/');
        }
    }else {
        echo "Đăng nhập thất bại";
    }
    
    $conn->close();
?>