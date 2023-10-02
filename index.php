<?php
    require "inc/header.php";
?>

    <!--------- bottom navbar  ------------>

    <div class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-app-store"></a>
    </div>


    <!-------- bottom navbar start ----------->

    <div class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-app-store"></a>
    </div>


    <!-------- bottom navbar ends ----------->

     <!-------- login form start ----------->

   
     <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form method="POST" action="php/login.php">
            <h3>Đăng nhập</h3>
            <span>Email</span>
            <input type="email" name="email" class="box"  placeholder="Nhập email">
            <span>Password</span>
            <input type="password" name="password" class="box"  placeholder="Nhập mật khẩu">

            <div class="check-box">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <input type="submit" value="Đăng nhập" class="btn">
            <p> <a href="">Quên mật khẩu ?</a></p>
            <p> <a href="#" id="new-user">Bạn chưa có tài khoản ?</a></p>
        </form>
    </div>

     <!-------- login form ends ----------->

     <!-------- register form start ----------->
     
     <div class="register-form-container">

        <div id="close-register-btn" class="fas fa-times"></div>

        <form method="POST" action="php/register.php">
            <h3>Đăng ký</h3>
            <span>Email</span>
            <input type="email" name="email" class="box"  placeholder="Nhập email">
            <span>Name user</span>
            <input type="text" name="username" class="box"  placeholder="Nhập tên">
            <span>Password</span>
            <input type="password" name="password" class="box"  placeholder="Nhập mật khẩu">
            <span>Confirm password</span>
            <input type="password" name="" class="box"  placeholder="Nhập lại mật khẩu">
            <input type="submit" value="Đăng ký" class="btn">
        </form>
    </div>

     <!-------- register form ends ----------->


      <!-------- home section start ----------->

      <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>upto 55% offers</h3>
                <p>Gặp được một quyển sách hay nên mua liền dù đọc được hay không đọc được, vì sớm muộn gì cũng cần đến nó.</p>
                <a href="" class="btn">shop now</a>
            </div>

            <div class="swiper books-list" >

                <div class="swiper-wrapper">
                    <a href="" class="swiper-slide"><img src="./image/book-1.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-2.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-3.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-4.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-5.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-6.png" alt=""></a>
                </div>

                <img src="./image/stand.png" class="stand" alt="">
                
            </div>


        </div>

      </section>

     <!-------- home section ends  ----------->

    <!-------- icons section start  ----------->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-plane"></i>
            <div class="content">
                <h3>over payment</h3>
                <p>over payment $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>secure payment $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anythin</p>
            </div>
        </div>

    </section>

    <!-------- icons section ends  ----------->

    <!-------- featured section start  ----------->

    <section class="featured" id="featured">

        <div class="heading"><span>featured books</span></div>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-1.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-2.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-3.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-4.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-5.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-6.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-7.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-8.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-9.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-10.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="./image/book-1.png" alt="">
                    </div>

                    <div class="content">
                        <h3>featured book</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="" class="btn">add to cart</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

   

     <!-------- featured section ends  ----------->


     <!-------- news letter section start  ----------->

     <section class="newsletter">

        <form action="">

            <h3>subcribe for latest update</h3>
            <input type="email" name="" placeholder="enter your email" class="box">
            <input type="submit" value="subcribe" class="btn">
        </form>
     </section>



     <!-------- news letter section ends  ----------->


      <!-------- arrivals section start  ----------->

      <section class="arrivals" id="arrivals">

            <div class="heading"><span>new arrivals</span></div>

            <div class="swiper arrivals-slider">

                <div class="swiper-wrapper">

                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-1.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-2.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-3.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-4.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-5.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <div class="swiper arrivals-slider">

                <div class="swiper-wrapper">

                    
                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-6.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-7.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-8.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-9.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="" class="swiper-slide box">
                        <div class="image">
                            <img src="./image/book-10.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
      </section>


       <!-------- arrivals section ends  ----------->

        <!-------- deal section start  ----------->

        <section class="deal">

            <div class="content">
                <h3>deal of the day</h3>
                <h1>upto 50% offers</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, vero. Voluptatibus voluptates inventore nulla vel.
                </p>
                <a href="" class="btn">shop now</a>
            </div>

            <div class="image">
                <img src="./image/deal-img.jpg" alt="">
            </div>

        </section>




         <!-------- deal section ends  ----------->


        <!-------- review section start  ----------->

        <section class="reviews" id="reviews">

            <h1 class="heading"><span>client's reviews</span></h1>

            <div class="swiper reviews-slider">

                <div class="swiper-wrapper">
                     <div class="swiper-slide box">
                        <img src="./image/pic-1.png" alt="">
                        <h3>john deo</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae perferendis cumque nesciunt.
                        </p>
    
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                     </div>

                     <div class="swiper-slide box">
                        <img src="./image/pic-2.png" alt="">
                        <h3>john deo</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae perferendis cumque nesciunt.
                        </p>
    
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                     </div>

                     <div class="swiper-slide box">
                        <img src="./image/pic-3.png" alt="">
                        <h3>john deo</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae perferendis cumque nesciunt.
                        </p>
    
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                     </div>

                     <div class="swiper-slide box">
                        <img src="./image/pic-4.png" alt="">
                        <h3>john deo</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae perferendis cumque nesciunt.
                        </p>
    
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                     </div>

                     <div class="swiper-slide box">
                        <img src="./image/pic-5.png" alt="">
                        <h3>john deo</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae perferendis cumque nesciunt.
                        </p>
    
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                     </div>

                     <div class="swiper-slide box">
                        <img src="./image/pic-6.png" alt="">
                        <h3>john deo</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae perferendis cumque nesciunt.
                        </p>
    
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                     </div>
                </div>
            </div>
        </section>

        <!-------- review section ends  ----------->


         <!-------- blog section start  ----------->

         <section class="blogs" id="blogs">

            <div class="heading"><span>our blogs</span></div>

            <div class="swiper blog-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="./image/blog-1.jpg" alt="">
                        </div>

                        <div class="content">
                            <h3>blog title goes here</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat, ipsam minima suscipit neque quisquam.
                            </p>
                            <a href="" class="btn">read more</a>
                        </div>

                    </div>

                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="./image/blog-2.jpg" alt="">
                        </div>

                        <div class="content">
                            <h3>blog title goes here</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat, ipsam minima suscipit neque quisquam.
                            </p>
                            <a href="" class="btn">read more</a>
                        </div>
                        
                    </div>

                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="./image/blog-3.jpg" alt="">
                        </div>

                        <div class="content">
                            <h3>blog title goes here</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat, ipsam minima suscipit neque quisquam.
                            </p>
                            <a href="" class="btn">read more</a>
                        </div>
                        
                    </div>

                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="./image/blog-4.jpg" alt="">
                        </div>

                        <div class="content">
                            <h3>blog title goes here</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat, ipsam minima suscipit neque quisquam.
                            </p>
                            <a href="" class="btn">read more</a>
                        </div>
                        
                    </div>

                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="./image/blog-5.jpg" alt="">
                        </div>

                        <div class="content">
                            <h3>blog title goes here</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat, ipsam minima suscipit neque quisquam.
                            </p>
                            <a href="" class="btn">read more</a>
                        </div>
                        
                    </div>

                   
                </div>
            </div>
         </section>


          <!-------- blog section ends  ----------->

<?php
    require "inc/footer.php";
?>