<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website Design </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">      
</head>
<body>
    <section class="header">
         
        <nav>
            <a href="index.html"><img src="../images/logo.png" alt=""></a>
            <div class="nav-link" id="navLink">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="blog.html">BLOGS</a></li>
                    <li><a href="contact.html">CONTANT</a></li>
                    <li><a href="contact.html">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <input type="submit" value="Log out">
                            </form>
                           
                                    
                                @else
                                    <a href="{{ route('login') }}" class=" " style="margin-right:20px;">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" >Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>World's Biggest University</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi natus ipsa,<br> ea et totam incidunt, harum magnam, dicta eos.
                <br>
            </p>
            <a href="" class="btn-hero">Visit Us to know More</a>
            
        </div>    
    </section>
    <!-- Course Part start here -->

    <section class="course">
        <h1>Courses we offer</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        <div class="row">
            <div class="course-col">
                <h3>Intermediat</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nostrum, dolorum 
                    voluptaslaudantium molestias similique quisquam quidem deleniti, 
                    ea consectetur totam enim suscipit dolore blanditiis nisi ipsa aliquam cumque sapiente?
                </p>
            </div>
            <div class="course-col">
                <h3>Intermediat</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nostrum, dolorum 
                    voluptaslaudantium molestias similique quisquam quidem deleniti, 
                    ea consectetur totam enim suscipit dolore blanditiis nisi ipsa aliquam cumque sapiente?
                </p>
            </div>
            <div class="course-col">
                <h3>Intermediat</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nostrum, dolorum 
                    voluptaslaudantium molestias similique quisquam quidem deleniti, 
                    ea consectetur totam enim suscipit dolore blanditiis nisi ipsa aliquam cumque sapiente?
                </p>
            </div>
        </div>
    </section>
    <!-- Campus part start here-->
    <section class="campus">
        <h1>Our Global Campus</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        <div class="row">
            <div class="campus-col">
                <img src="images/london.png" alt="">
                <div class="layer">
                    <h3>LANDON</h3>
                </div>
            </div>     
            <div class="campus-col">
                <img src="images/newyork.png" alt="">
                <div class="layer">
                    <h3>NEW YORK</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/washington.png" alt="">
                <div class="layer">
                    <h3>WASHINGTON</h3>
                </div>
            </div>    
        </div>
    </section>
    <!-- Facilities -->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/library.png">
                <h3>World Class Library</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Mollitia libero suscipit inventore esse ratione quo debitis. 
                    Accusantium natus nesciunt alias, qui sed ipsam? 
                </p>
            </div>
            <div class="facilities-col">
                <img src="images/basketball.png">
                <h3>Largest Play Ground</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Mollitia libero suscipit inventore esse ratione quo debitis. 
                    Accusantium natus nesciunt alias, qui sed ipsam? 
                </p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.png">
                <h3>Testy and Healthy Food</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Mollitia libero suscipit inventore esse ratione quo debitis. 
                    Accusantium natus nesciunt alias, qui sed ipsam? 
                </p>
            </div>
        </div>
    </section>
    <!-- Testimoinal -->
    <section class="testimonial">
        <h3>What Our Student Says</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="testimonila-col">
                <img src="images/user1.jpg" alt="">
                <div class="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, perspiciatis? Magni
                         animi adipisci impedit officiis blanditiis, aut iure odit doloribus harum aspernatur, 
                         quod, aliquam fuga. Aliquam doloribus similique esse expedita?
                    </p>
                    <h3>Zahra Danishwar</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonila-col">
                <img src="images/user2.jpg">
                <div class="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, perspiciatis? Magni
                         animi adipisci impedit officiis blanditiis, aut iure odit doloribus harum aspernatur, 
                         quod, aliquam fuga. Aliquam doloribus similique esse expedita?
                    </p>
                    <h3>Ghafoor Malikzadah</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action -->
    <section class="cta">
        <h1>Enroll for Our Various Online Courses <br> Any Where From The World</h1>
        <a href="" class="btn-hero">CONTACT US</a>
    </section>
    <!-- Footer -->
    <section class="footer">
        <h4>ABOUT US</h4>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime at quas aspernatur 
            exercitationem quam vitae voluptate. Soluta nostrum qui <br>ad itaque eveniet voluptate 
            nam, quaerat ipsum corrupti omnis molestiae architecto.
        </P>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Mad with <i class="fa fa-heart-o"></i> Ali Parsa</p>
    </section>





    <!-- Javascrip to show and hide menu -->
    <script>
        var navLink = document.getElementById('navLink');
        function showMenu(){
            navLink.style.right="0";
        }
        function hideMenu(){
            navLink.style.right="-200px";
        }
    </script>
</body>
</html>