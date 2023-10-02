<?php
    require 'inc/header.php';
    require 'php/dbconnect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $current_user->getId();
        $new_username = $_POST['username'];
        $new_mobile = $_POST['mobile'];
        $new_address = $_POST['address'];

        $sql = "UPDATE user SET username = '$new_username', mobile = '$new_mobile', address = '$new_address' WHERE id = '$id'";
        $result = $conn->query($sql);
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
            echo "Sửa thông tin không thành công";
        }
    }
?>

    <div class="user-form">
        <h1 class="user-form__title">Sửa thông tin người dùng</h1>
        <form class="user-form__form" method="post">
            <div class="user-form__field">
                <label for="email" class="user-form__label">Email:</label>
                <input type="email" id="email" class="user-form__input" value="<?php echo $current_user->getEmail() ?>" disabled>
            </div>
            <div class="user-form__field">
                <label for="username" class="user-form__label">Tên người dùng:</label>
                <input type="text" id="username" name="username" class="user-form__input" value="<?php echo $current_user->getUsername() ?>">
            </div>
            <div class="user-form__field">
                <label for="phone" class="user-form__label">Số điện thoại:</label>
                <input type="tel" id="mobile" name="mobile" class="user-form__input" placeholder="<?php echo $current_user->getMobile() ?>">
            </div>
            <div class="user-form__field">
                <label for="address" class="user-form__label">Địa chỉ:</label>
                <textarea id="address" name="address" class="user-form__textarea" placeholder="<?php echo $current_user->getAddress() ?>"></textarea>
            </div>
            <button type="submit" class="btn btn--mdf">Lưu thay đổi</button>
        </form>
    </div>

<?php
    require 'inc/footer.php';
?>