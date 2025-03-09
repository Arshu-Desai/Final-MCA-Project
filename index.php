<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Website for Farmers</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style_index.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">


        <a href="#" class="logo"> <i class="fas fa-seedling"></i> Art Gallary</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#features">Features</a>
            <!-- <a href="#blogs">blogs</a> -->
            <a href="#review">review</a>
            <a href="about.php">about</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <a href="chatapp/login.php"> <div class="fa-brands fa-whatsapp" id="cart-btn"></div></a> 
            <div class="fas fa-user" id="login-btn"></div>

        </div>

        <form action="search_page.php" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <!-- Blogs cart  -->
        <div class="blogs">

        </div>

        <form action="login.php" class="login-form" method="POST">
            <h3>login as Farmer/ Buyer</h3>
            <input type="email" name="email" class="box" placeholder="enter your email" required>
            <input type="password" name="pass" class="box" placeholder="enter your password" required>
            <input type="submit" value="login now" class="btn" name="submit">
            <p>don't have an account? <a href="register.php">register now</a></p>
        </form>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <div class="content">
                <i><h3>Platform for Buy, Sell and collect Masterpieces of Paintings & Sketches by Artists Worldwide</h3></i>
                <b><p style="color:#ffffff;">Connecting Artists and Art lover</p></b>
            </div>

        </div>

    </section>

    <!-- home section ends -->
    <!-- features section starts  -->

    <section class="features" id="features">

        <h1 class="heading"> our <span>features</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/f1.jpg" alt="">
                <h3>Best Platform </h3>
                <p>It is Best platform for Artists and buyer.!</p>
                <!-- <a href="#" class="btn">read more</a> -->
            </div>

            <div class="box">
                <img src="images/f2.jpg" alt="">
                <h3>Easy for Artists</h3>
                <p>It is Easiest for Artists for Selling Sketches & Paintings.</p>

            </div>

            <div class="box">
                <img src="images/f3.jpg" alt="">
                <h3>Easy payments</h3>
                <p>Online payment method for secure,time saving.</p>
            </div>

        </div>

    </section>

    <!-- features section ends -->

    <!-- blogs section starts  -->

    <!-- <section class="blogs" id="blogs">

        <h1 class="heading">Blogs for<span>Farmers</span> </h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/product-1.png" alt="">
                    <h3>Fruits</h3>
                    <div class="price">Information</div>
                    <a href="blogs/fruits.html" class="btn">More info</a>
                </div>

                <div class="swiper-slide box">
                    <img src="image/product-2.png" alt="">
                    <h3>Vegitables</h3>
                    <div class="price">Information</div>
                    <a href="blogs/vegitables.html" class="btn">More info</a>
                </div>

                <div class="swiper-slide box">
                    <img src="image/product-3.png" alt="">
                    <h3>Grains</h3>
                    <div class="price">Information</div>
                    <a href="blogs/grains.html" class="btn">More info</a>
                </div>

                <div class="swiper-slide box">
                    <img src="image/product-4.png" alt="">
                    <h3>Flowers</h3>
                    <div class="price">Information</div>
                    <a href="blogs/flowers.html" class="btn">More info</a>
                </div>
                <div class="swiper-slide box">
                    <img src="image/product-5.jpg" alt="">
                    <h3>Legume</h3>
                    <div class="price">Information</div>
                    <a href="blogs/legume.html" class="btn">More info</a>
                </div>

            </div>

        </div>

    </section> -->

    <!-- blogs section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <p>Is very helpful and informative on crops and good services by this platform. it looks absolutely
                        good. Best
                        experienced.
                    </p>
                    <h3>Ram</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/r2.jpg" alt="">
                    <p>I love the design of your app. I just visit it and wow ... it looks absolutely good. Best
                        experienced....</p>
                    <h3>Vikarm</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <p>It is best Website to farmer and buyer . I am buyer helful to me by the product.
                        I can buy many product in on click. </p>
                    <h3>Vijay</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/r4.jpg" alt="">
                    <p>It is very user friendly website.It use like social media. it looks absolutely good. Best
                        experienced....</p>
                    <h3>Ajay</h3>
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

    <!-- review section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3><i class="fas fa-seedling"></i>Art Gallary</h3>
                <p>Social media</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fa-brands fa-whatsapp"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#" class="links" id="email"> <i class="fas fa-envelope"></i>artgallary@gmail.com</a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Ichalkaranji, india - 416115 </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Features </a>
                <!-- <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Blogs </a> -->
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Review </a>
                <a href="about.php" class="links"> <i class="fas fa-arrow-right"></i> About</a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <input type="email" placeholder="your email" class="email">
                <input type="submit" value="subscribe" class="btn">

                <div class="share">

                    <a href="#" class="fa-brands fa-google-pay"></a>
                    <a href="#" class="fa-brands fa-amazon-pay"></a>
                    <a href="#" class="fa-solid fa-credit-card"></a>
                    <a href="#" class="fa-brands fa-square-whatsapp"></a>
                </div>
            </div>

        </div>

        <div class="credit"> created by <span>mr.arshad Desai </span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>


</body>

</html>