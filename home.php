<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!--Custom css file link-->
    <link rel="stylesheet" href="css/style.css"> 
    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
    
    <!--Header section starts-->
    <section class="header">
        <a href="home.php" class="logo"> Travel. </a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--Header section ends-->

    <!--home section starts-->
    <section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background:url(images/homeheader1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/homeheader3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/homeheader2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

    <!--home section ends-->


    <!--service section starts-->
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/hiking.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/tour-guide.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="images/trekking.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/bonfire.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/jeep.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/tent.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <!--service section ends-->

    <!--home about section starts-->
    <section class="home-about">
        <div class="image">
            <img src="images/homeabout.jpg">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p style="text-align:justify">Welcome to TravelScape, your premier destination for unforgettable travel experiences. Our mission is to 
                make your journey extraordinary by offering personalized and curated travel packages that cater to your every need. 
                Whether you’re seeking a relaxing beach getaway, an adventurous trek, or a cultural exploration, we provide expert 
                guidance and seamless arrangements to ensure a hassle-free experience. </p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!--home about section ends-->

    <!--home packages section starts-->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/des1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Aerial view of Tangalle Beach, Southern Province, Sri Lanka</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/des2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Train passing over Nine Arch Bridge</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/des3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Horton Plains national park montane grassland environment, Sri Lanka</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>
    <!--home packages section ends-->

    <!--home offer section starts-->

    <section class="home-offer">
        <div class="content">
            <h3>up to 50% off</h3>
            <p>Don’t miss out on these incredible savings. Book now!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>


    <!--home offer section ends-->

    <!--Footer section starts-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+71-456-6789</a>
                <a href="#"><i class="fas fa-phone"></i>+71-234-6779</a>
                <a href="#"><i class="fas fa-envelope"></i>thisaa7@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Chilaw Road,Kurunegala</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
        </div>
        <div class="credit">created by <span>Thisarani Aloka</span> |all rights reserved!</div>
    </section>
    <!--Footer section ends-->

    <!--Custom js file link-->
    <script src="script.js"></script>
    
   
</body>
</html>