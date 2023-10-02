<?php
    require 'inc/header.php';
?>

    <div class="profile">
        <div class="profile__header">
            <h1>Thông tin người dùng</h1>
        </div>
        <div class="profile__info">
            <p><strong>Tên người dùng:</strong> <?php echo $current_user->getUsername(); ?></p>
            <p><strong>Email:</strong> <?php echo $current_user->getEmail(); ?></p>
            <p><strong>Số điện thoại:</strong> <?php echo $current_user->getMobile(); ?></p>
            <p><strong>Địa chỉ:</strong> <?php echo $current_user->getAddress(); ?></p>
        </div>
    </div>
    <div class="action_profile">
        <a href="edituser.php"><button class="btn">Chỉnh sửa</button></a>
        <a href="changepassword.php"><button class="btn">Đổi mật khẩu</button></a>
    </div>

<?php
    require 'inc/footer.php'
?>