<?php
    require 'inc/header.php';
    require 'php/dbconnect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $current_user->getId();
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        $sql = "UPDATE user SET password = '$new_password' where id = '$id'";
        $result = $conn->query($sql);
        if ($new_password != $confirm_password) {
            echo "<script> notify('success', 'Mật khẩu không khớp!'); </script>";
        } else {
            if ($result === TRUE) {
                $select_sql = "SELECT * FROM user WHERE id = '$id'";
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
            header('Location: http://localhost/BookShop/profileuser.php');
            } else {
                echo "<script> notify('success', 'Đổi mật khẩu không thành công!'); </script>";
            }
        }
    }
?>

    <div class="changepassword">
        <h1 class="changepassword__title">Đổi mật khẩu</h1>
        <form action="" method="POST" class="changepassword__form">
            <div class="changepassword__group">
                <label for="email" class="changepassword__label">Email:</label>
                <input type="email" id="email" name="email" class="changepassword__input" value="<?php echo $current_user->getEmail() ?>" disabled>
            </div>
            <div class="changepassword__group">
                <label for="new-password" class="changepassword__label">Mật khẩu mới:</label>
                <input type="password" id="new_password" name="new_password" class="changepassword__input">
            </div>
            <div class="changepassword__group">
                <label for="confirm-password" class="changepassword__label">Xác nhận mật khẩu:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="changepassword__input">
            </div>
            <button type="submit" class="btn changepassword__button">Đổi mật khẩu</button>
        </form>
    </div>

<?php
    require 'inc/footer.php';
?>