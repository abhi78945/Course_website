<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

include 'db.php';

// Fetch all courses
$courses = mysqli_query($conn, "SELECT * FROM courses");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>
<body>
    
    <!-- header section starts -->

    <header class="header">

        <a href="#" class="logo"><i class="fas fa-book"></i> SAKSHAM</a>

        <nav class="navbar">
            <a href="#home" class="hover-underline">home</a>
            <a href="#about" class="hover-underline">about</a>
            <a href="#courses" class="hover-underline">courses</a>
            <a href="#teacher" class="hover-underline">teacher</a>
            <a href="#review" class="hover-underline">review</a>
            <a href="#apply" class="hover-underline">apply</a>
            <a href="#contact" class="hover-underline">contact</a>
        </nav>

        <div class="icons">
                    <a href="logout.php" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>

            
        </div>

        <!-- login form -->

        <form action="" class="login-form">
            <h3>login form</h3>
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <div class="remember">
                <input type="checkbox" name="" id="remember">
                <label for="remember-me">remember me</label>
            </div>
            <a href="#" class="btn">
                <span class="text text-1">login now</span>
                <span class="text text-2" aria-hidden="true">login now</span>
            </a>
        </form>
        <div class="website-container">
            
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts-->

    <section class="home" id="home">

        <div class="content">
            <h3>the best courses you will find here</h3>
            <p>This website contains various courses to develop the students knowledge.For any queries contact us .</p>
            <a href="#" class="btn">
                <span class="text text-1">learn more</span>
                <span class="text text-2" aria-hidden="true">learn more</span>
            </a>    
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts -->

    <section class="about" id="about">

        <h1 class="heading">about us</h1>

        <div class="container">

            <figure class="about-image">
                <img src="images/about.jpg" alt="" height="500">
                <img src="images/about1.jpg" alt="" class="about-img">
            </figure>

            <div class="about-content">
                <h3>About the E-Learning plateform</h3>
                <p>Our website contains popular courses with team collabortion and extra features to enhance the student knowledge.we have link the instructors social media links to clarify their doubts. For any queries contact us through our social media links or send a message or clarify the doubts in chatbot.</p>
                <p>This is a best e learning platform for the users to enhance their knowledge and growth purpose.This learning website will also provides placement materials for the users who is preparing for their interviews. </p>
                       
            </div>

        </div>

    </section>


    <section class="courses" id="courses">

        <h1 class="heading">our famous courses</h1>

        <div class="box-container">

            <div class="box">
                <div class="image shine">
                    <a href="data_science_course.php">
                        <img src="images/course-1.jpg" alt="">
                        <h3>basic</h3>
                    </a>
                </div>
                <div class="content">
                    <a href="frontend.php">
                        <h4>$49.99</h4>
                        <p>updated 25/09/2021</p>
                        <h3>frontend development</h3>
                    </a>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(785)</span>
                    </div>
                    <div class="icons">
                        
                        <span><i class="far fa-clock"></i> 8h 25m 9s</span>
                    </div>
                </div>
            </div>








            <div class="box">
                <div class="image shine">
                    <a href="data_science_course.php">
                        <img src="images/course-2.jpg" alt="">
                        <h3>basic</h3>
                    </a>
                </div>
                <div class="content">
                    <a href="data_science_course.php">
                        <h4>$49.99</h4>
                        <p>updated 20/04/2021</p>
                        <h3>Data Science</h3>
                    </a>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(785)</span>
                    </div>
                    <div class="icons">
                        
                        <span><i class="far fa-clock"></i> 2h 25m 9s</span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image shine">
                    <a href="machine_learning.php">
                        <img src="images/course-3.jpg" alt="">
                        <h3>basic</h3>
                    </a>
                </div>
                <div class="content">
                    <a href="machine_learning.php">
                        <h4>$49.99</h4>
                        <p>updated 5/04/2021</p>
                        <h3>Machine Learning</h3>
                    </a>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(785)</span>
                    </div>
                    <div class="icons">
                        
                        <span><i class="far fa-clock"></i> 8h 25m 9s</span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image shine">
                    <a href="python.php">
                        <img src="images/course-4.png" alt="">
                        <h3>basic</h3>
                    </a>
                </div>
                <div class="content">
                    <a href="python.php">
                        <h4>$49.99</h4>
                        <p>updated 25/09/2021</p>
                        <h3>Python Programming</h3>
                    </a>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(785)</span>
                    </div>
                    <div class="icons">
                        <span><i class="far fa-bookmark"></i> </span>
                        <span><i class="far fa-clock"></i> 8h 25m 9s</span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image shine">
                    <a href="java.php">
                        <img src="images/course-5.png" alt="">
                        <h3>basic</h3>
                    </a>
                </div>
                <div class="content">
                    <a href="java.php">
                        <h4>$49.99</h4>
                        <p>updated 25/09/2021</p>
                        <h3>Java Programming</h3>
                    </a>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(785)</span>
                    </div>
                    <div class="icons">
                        <span><i class="far fa-bookmark"></i> </span>
                        <span><i class="far fa-clock"></i> 8h 25m 9s</span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image shine">
                    <a href="cs.php">
                        <img src="images/course-6.png" alt="">
                        <h3>basic</h3>
                    </a>
                </div>
                <div class="content">
                    <a href="cs.php">
                        <h4>$49.99</h4>
                        <p>updated 25/09/2021</p>
                        <h3>Cyber Security</h3>
                    </a>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(785)</span>
                    </div>
                    <div class="icons">
                        <span><i class="far fa-bookmark"></i></span>
                        <span><i class="far fa-clock"></i> 8h 25m 9s</span>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- courses section ends -->

    <!-- teacher section starts -->

    <section class="teacher" id="teacher">

        <h1 class="heading">our expert teacher</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/teacher-1.png" alt="">
                    <div class="share">
                        <a href="https://www.linkedin.com/in/theagneljohn/" class="fab fa-linkedin"></a>
                        <a href="https://www.youtube.com/watch?v=Byx4sgLR88E" class="fab fa-youtube"></a>
                        <a href="https://www.instagram.com/leomessi/" class="fab fa-instagram"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Agnel John </h3>
                    <span>instructor</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/teacher-2.png" alt="">
                    <div class="share">
                        <a href="https://www.linkedin.com/in/samuel-raita-raita-1972972aa/?originalSubdomain=in" class="fab fa-linkedin"></a>
                        <a href="https://www.youtube.com/watch?v=Byx4sgLR88E" class="fab fa-youtube"></a>
                        <a href="https://www.instagram.com/leomessi/" class="fab fa-instagram"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Samuel Raita</h3>
                    <span>instructor</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/teacher-3.png" alt="">
                    <div class="share">
                        <a href="https://www.linkedin.com/in/samuel-raita-raita-1972972aa/?originalSubdomain=in" class="fab fa-linkedin"></a>
                        <a href="https://www.youtube.com/watch?v=Byx4sgLR88E" class="fab fa-youtube"></a>
                        <a href="https://www.instagram.com/leomessi/" class="fab fa-instagram"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Sushan Leo</h3>
                    <span>instructor</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/teacher-4.png" alt="">
                    <div class="share">
                        <a href="https://www.linkedin.com/in/samuel-raita-raita-1972972aa/?originalSubdomain=in" class="fab fa-linkedin"></a>
                        <a href="https://www.youtube.com/watch?v=Byx4sgLR88E" class="fab fa-youtube"></a>
                        <a href="https://www.instagram.com/leomessi/" class="fab fa-instagram"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Samul rita</h3>
                    <span>instructor</span>
                </div>
            </div>

        </div>

    </section>

    <!-- teacher section ends -->

    <!-- review section starts -->

    <section class="review" id="review">

        <h1 class="heading">our students review</h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p>The way you teaching is very nice.I have never gained such experience in my life because I am so motivated by you,because one who take their own time to grow up others is just wow.</p>
                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-1.png" alt="">
                        <div class="user-info">
                            <h3>Shyaam</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>way of teaching is amazing. And this session is very useful for me.I learned basis about web development. Thank you so much for this wonderful session.</p>
                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-2.png" alt="">
                        <div class="user-info">
                            <h3>Jency</h3>
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

                <div class="swiper-slide slide">
                    <p>I thought the content was very helpful and informative.very insightful,refreshing and challenging.pleased to be part of the group.informative and well informative.</p>
                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-3.png" alt="">
                        <div class="user-info">
                            <h3>John</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>the course was very comprehensive and easy to understand.the instructors made sure that they are giving the information in a way that wont make me confused.thank you!</p>
                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-4.png" alt="">
                        <div class="user-info">
                            <h3>Shaira</h3>
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

                <div class="swiper-slide slide">
                    <p>This course taught me a lot of techniques in searching information for my academic researches. Thank you to all people behind this, especially to the instructors in this course.</p>
                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-5.png" alt="">
                        <div class="user-info">
                            <h3>Surya</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>ur way of explaining things is understanable.way more worth for money that I gave to attend this class.i never thought front end development would this much easy.</p>
                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-6.png" alt="">
                        <div class="user-info">
                            <h3>Litcy</h3>
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

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- blog section starts -->

    <section class="apply" id="apply">

        <h1 class="heading">Become an Instructor</h1>

        <div class="box-container">

            <div class="box">
                <div class="image shine">
                <p><center>To become an instructor in our community click below and fill the form</center></p>
                <style>
                    p{
                        margin-bottom: 3px;
                    }
                </style>
                
               
                <a href="#" class="btn">
                    <span class="text text-1">Apply Now </span>
                    <span class="text text-2" aria-hidden="true">Apply Now</span>
                </a>
                <!-- Add this code where you want the form to appear -->
                <div id="apply-form-popup" class="apply-form-popup">
                   <form id="apply-form" class="apply-form">
                       <h3>Apply Now</h3>
                       <div class="form-group">
                           <label for="apply-name">Name</label>
                           <input type="text" id="apply-name" placeholder="Name" class="box">
        </div>
        <div class="form-group">
            <label for="apply-expertise">Expertise Domain</label>
            <input type="text" id="apply-expertise" placeholder="Expertise Domain" class="box">
        </div>
        <div class="form-group">
            <label for="apply-experince">Experience</label>
            <input type="text" id="apply-experience" placeholder="Experience" class="box">
        </div>
        <div class="form-group">
            <label for="apply-email">Email</label>
            <input type="email" id="apply-email" placeholder="Email" class="box">
        </div>
        <div class="form-group">
            <label for="apply-phone">Phone Number</label>
            <input type="number" id="apply-phone" placeholder="Phone Number" class="box">
        </div>
        <button type="submit" id="apply-submit-btn" class="btn">Submit</button>
    </form>
</div>
<div id="overlay" class="overlay"></div>

                </div>    
        </div>

    </section>

    <!-- blog section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">

        <h1 class="heading">contact us</h1>

        <div class="row">
            <div class="image">
                <img src="images/contact.png" alt="">
            </div>
            <form action="">
                <h3>send us a message</h3>
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="phone number" class="box">
                <textarea placeholder="message" class="box" cols="30" rows="10"></textarea>
                <a href="#" class="btn">
                    <span class="text text-1">send message</span>
                    <span class="text text-2" aria-hidden="true">send message</span>
                </a>
            </form>
        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section stars -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>find us here</h3>
                <p>For any Queries contact as through our social media link</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact us</h3>
                <p>+1234 587 1478</p>
                <a href="#" class="link">SHAKSHAM@gmail.com</a>
            </div>

            <div class="box">
                <h3>localization</h3>
                <p>230 points of the pines <br>
                colorado springs <br>
                united states</p>
            </div>

        </div>
        <div class="credit">created by <span>SHAKSHAM </span>| all rights are reserved!</div>
    </section>
    
        <ul id="team-members-list">
            <!-- Team members will be listed here -->
        </ul>
    </div>
    <!-- footer section ends -->












    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
</body>
</html>