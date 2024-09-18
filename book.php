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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .booking .book-form {
            padding: 2rem;
            background: var(--light-bg);
        }

        .booking .book-form .flex {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .booking .book-form .flex .inputBox {
            flex: 1 1 41rem;
        }

        .booking .book-form .flex .inputBox input {
            width: 100%;
            padding: 1.2rem 1.4rem;
            font-size: 1.6rem;
            color: var(--light-black);
            text-transform: none;
            margin-bottom: 1.5rem;
            border: var(--border);
        }

        .booking .book-form .flex .inputBox input:focus {
            background: var(--black);
            color: var(--white);
        }

        .booking .book-form .flex .inputBox input:focus::placeholder {
            color: var(--light-white);
        }

        .booking .book-form .flex .inputBox span {
            font-size: 1.5rem;
            color: var(--light-black);
        }

        .booking .book-form .btn {
            margin-bottom: 2rem;
        }

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

    <div class="heading" style="background:url(images/booking.webp) no-repeat">
        <h1>book now</h1>
    </div>

    <!--booking section starts-->

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>

            </div>

            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

    <!--booking section starts-->



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
    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>