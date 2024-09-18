<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!--Custom css file link-->
    <link rel="stylesheet" href="css/style.css"> 
    <!--swiper css link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        @media(max-width:768px) {
            .heading h1 {
                font-size: 4rem;
            }
        }
    </style>
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

    <div class="heading" style="background:url(images/aboutbg.jpeg) no-repeat">
        <h1>about us</h1>
    </div>

    <!--about section starts-->
    <section class="about">
        <div class="image">
            <img src="images/aboutus.jpg" alt="">
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>Experience unparalleled travel adventures with us. Our team is dedicated to crafting unforgettable journeys, 
                offering personalized service and insider knowledge to make every trip extraordinary.</p>
            
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>
    </section>
    <!--about section ends-->

   <!--review section starts-->
<section class="reviews">
<h1 class="heading-title">reviews</h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Our trip with TravelScape was nothing short of spectacular. From the personalized itinerary to the exceptional 
                    service, every detail was perfectly executed. Highly recommend for anyone looking for a seamless travel experience!</p>
                <h3>Sarah M</h3>
                <span>traveler</span>
                <img src="images/man1.jpeg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I’ve traveled with many tour operators, but TravelScape truly stands out. Their attention to detail and commitment to 
                    creating memorable experiences made our vacation unforgettable. We’ll definitely be booking with them again!</p>
                <h3>Johni L</h3>
                <span>traveler</span>
                <img src="images/man2.webp" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The level of professionalism and care we received from TravelScape was impressive. They went above and beyond
                     to ensure our trip was flawless. Excellent service and top-notch tours!</p>
                <h3>Emily R</h3>
                <span>traveler</span>
                <img src="images/man3.jpeg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>From start to finish, TravelScape provided an exceptional travel experience. The guides were knowledgeable, 
                    the accommodations were comfortable, and the itinerary was well-thought-out. A five-star experience all around!</p>
                <h3>Michael T</h3>
                <span>traveler</span>
                <img src="images/man4.webp" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Our adventure with TravelScape exceeded all expectations. Their team was incredibly helpful and made sure
                     every aspect of our trip was perfect. We had the time of our lives and will cherish the memories forever!</p>
                <h3>Lisa K</h3>
                <span>traveler</span>
                <img src="images/man5.jpeg" alt="">
            </div>
        </div>
    </div>
</section>
<!--review section ends-->


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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script>
        var swiper = new Swiper(".reviews-slider", { 
           spaceBetween: 20,
           autoHeight: true,
           grabCursor: true,
           breakpoints: {
              640: {
                slidesPerView: 1,
              },
              768: {
                slidesPerView: 2,
              },
              1024: {
                slidesPerView: 3,
              },
            },
        });
    </script>
   
</body>
</html>