<?php
    require dirname(__DIR__) . '/models/user.php';
    session_start();
    if (isset($_SESSION['current_user'])) {
        $current_user = $_SESSION['current_user'];
    } else {
        $current_user = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------- title ----------->
    <title>Online Book Shop</title>

    <!-------- customer style link ----------->
    <link rel="stylesheet" href="./css/style.css">


    <!-------- font awesome cdn link --------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />


    <!------- swipper cdn link ------------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <script src="js/notification.js"></script>
</head>
<body>

    <div id="notification-area"></div>

    <!--------- header section start ------------>
    <header class="header">

        <div class="header-1">

            <a href="http://localhost/BookShop" class="logo"><i class="fas fa-book"> hnbook</i></a>
            
            <div class="header-1__form1">
                <div class="category">
                    <div id="category__icon" class="fa-solid fa-bars-progress"></div>
                    <ul class="category__list">
                        <li><a href="#">Văn học</a></li>
                        <li><a href="#">Kinh tế</a></li>
                        <li><a href="#">Sách thiếu nhi</a></li>
                        <li><a href="#">Tiểu sử - Hồi ký</a></li>
                    </ul>
                </div>
                
                <form action="" class="search-form">
                    <input type="search" name="" placeholder="search here..." id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </form>
            </div>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-shopping-cart"></a>
                <?php
                    if (!isset($current_user)){ ?>
                        <div id="login-btn" class="fas fa-user"></div>
                <?php
                    } else { ?>
                        <div class="profile_menu">
                            <div id="profile__icon"><?php echo $current_user->getUsername() ?>  <i class="fa-solid fa-caret-down"></i></div>
                            <ul class="profile__list">
                                <li><a href="http://localhost/BookShop/profileuser.php">Thông tin cá nhân</a></li>
                                <li><a href="http://localhost/BookShop/php/logout.php">Đăng xuất</a></li>
                            </ul>
                        </div>
                <?php
                    } ?>
            </div>

        </div>

        <div class="header-2">

            <div class="navbar">
                <a href="#home">Home</a>
                <a href="#featured">Featured</a>
                <a href="#arrivals">Arrivals</a>
                <a href="#reviews">Reviews</a>
                <a href="#blogs">Blogs</a>
            </div>

        </div>

    </header>

    <!--------- header section ends ------------>