<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/about.css">
</head>

<body>

   <header class="header">


      <a href="#" class="logo"> <i class="fas fa-seedling"></i> Art Gallary</a>

      <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="index.php#features">Features</a>
         <!-- <a href="index.php#blogs">Blogs</a> -->
         <a href="index.php#review">Review</a>
         <a href="about.php">About</a>
      </nav>

      <div class="icons">
         <div class="fas fa-bars" id="menu-btn"></div>
         <!-- <div class="fas fa-search" id="search-btn"></div>s -->
         <a href="chatapp/login.php">
            <div class="fa-brands fa-whatsapp" id="cart-btn"></div>
         </a>
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
         <h3>login as Artist/ Buyer</h3>
         <input type="email" name="email" class="box" placeholder="enter your email" required>
         <input type="password" name="pass" class="box" placeholder="enter your password" required>
         <input type="submit" value="login now" class="btn" name="submit">
         <p>don't have an account? <a href="register.php">register now</a></p>
      </form>

   </header>

   <!-- header section ends -->
   <section class="about" style="background-image: url('./images/back_img1.jpg'); ">

      <div class="box-container" >
         <div class="box" >
            <h3 class="title">What we are provide for buyer?</h3>
            <img src="image\buyer_img.jpg" class="image" alt="">
            <p class="tutor">Buyer can use Art gallary to buy artist's Sketches and paintings.It is very best platform for buyer to
               check needed product like posts.Artists posts there Sketches and paintings on website and buyer can watch, and buy
               according to requird.
               Art gallary is an online portal that aims to directly connect Artists of the country to best buyers. In
               short, buyers get contact details and Paintings details of Artists in Art gallary. Art gallary is an advance online
               platform connecting buyers directly to Artists across India.
            </p>
            <p class="tutor">
               Art gallary is here with an advanced online portal that helps potential Indian buyers find Indian
               Artists from various parts of India. Which will help users to buy/sell/sale paintings online at the best
               prices which means the buyer will receive paintings online at affordable rates, while the
               artists will get the best price for their quality produce.
               Buyers who use Art gallary receive contact information for reputable prospective artists with whom they
               can conduct business. Art gallary makes it simple for buyers to contact the greatest artist in the
               country
            </p>
         </div>
         <div class="box">
            <h3 class="title">What we are provide for artist?</h3>
            <img src="image\artist_img.jpg" class="image" alt="">
            <p class="tutor"> Art gallary Online Art gallary PRIVATE LIMITED.
            Artgallary.com .An online Artgallary-MART and it will truly fulfills our dream "Sabko Sahi Mol ".
            Art gallary.comis 100% free for artist and we are not charging anything from artists . Now artists
                can sale their Paintings and sketches directly to end customer i.e. Institution , Group Co-operative Societies
               , Citizen Associations or any other group buyers on Artgallary.com
            </p>
            <p class="tutor">
               Artists can use Art gallary to promote their paintings and receive queries from possible
               purchasers. Arists in India must give their information. They can directly sell their product to
               buyer,and chat with us for product pricing.
               Artist can save their regular or favourite buyers and vice versa to reconnect them. These shortlisted
               details will not only help them to trade for the current stocks but also help them for their future
               buy/sell/sale paintings online.
               <ui>
                  <li>Get more inquiries from buyers</li>
                  <li>Attract buyers with the best quality pictures and videos</li>
                  <Li>Show all types of paintings</li>
               </ui>
            </p> 
         </div>
   </section>


   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3><i class="fas fa-seedling"></i>Art Gallary </h3>
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
            <a href="#" class="links"> <i class="fas fa-envelope"></i>arshad@gmail.com</a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Kolhapur, india - 416115 </a>
         </div>

         <div class="box">
            <h3>quick links</h3>
            <a href="index.php" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Features </a>
         
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

      <div class="credit"> created by <span> mr.arshad </span> | all rights reserved </div>

   </section>

   <!-- footer section ends -->

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>
</body>

</html>