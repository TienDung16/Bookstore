<?php
    require dirname(__DIR__) . '/models/user.php';
    require 'dbconnect.php';

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user(email, username, password, authority) VALUES('$email', '$username', '$password', 1)";
    $result = $conn->query($sql);

    if ($result === TRUE){
        session_start();

        $select_sql = "SELECT * FROM user WHERE email = '$email' and username = '$username' and password = '$password'";
        $select_result = $conn->query($select_sql);
        
        if ($select_result->num_rows > 0){
            $row = $select_result->fetch_assoc();

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
        header('Location: http://localhost/BookShop/');
    }else {
        echo "Thêm người dùng mới không thành công";
    }

    $conn->close();
?>
