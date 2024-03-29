<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="alcourses.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
            integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
        
        <title>All Courses</title>
    </head>

    <body onload="show();">
        <header>
            <div class="toggle-btn" onclick="myfuntion();">
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
            </div>
            <div class="logo">
                <h2>Educore.</h2>
            </div>

            <nav id="nav">
                <ul>
                    <li><a href="#">Browse <i class="fa fa-chevron-down"></i></a></li>
                    <li>
                        <form action="apply-now.php" method="POST">
                            <button class="serch">
                                <i class="fa fa-search"></i>
                            </button type="submit"><input type="search" placeholder="What do you want to learn?"
                                required>
                        </form>
                    </li>
                    <li><a href="#">Student Pricing</a></li>
                    <li><a href="#">For Mentors</a></li>
                    <li><a href="#"><i class="fa fa-bell-o "></i></a></li>
                    <li><img src="../images/Profile Dropdown.png" alt="user-icon" width="100%" height="100%"><i
                            class="fa fa-chevron-down" id="col"></i></li>
                </ul>
            </nav>

        </header>
        <div class="scroll">
            <div class="courselist">
                <h4 class="lin">All Courses</h4>
                <h4 class="lin">Design</h4>
                <h4 class="lin">Music</h4>
                <h4 class="lin">Marketing</h4>
                <h4 class="lin">Photography</h4>
                <h4 class="lin">Programming</h4>
                <h4 class="lin">Architecture</h4>
            </div>
        </div>
        <div class="bigbox">
            <div class="freecrse">
                <h2 class="line">Free Course</h2>
                <div class="carousel">
                    <div id="leftarrow" onclick="moveleft1();">
                        <i class="fas fa-chevron-circle-left fa-2x" id="leftar"></i>
                    </div>
                    <div class="crsbox1" id="c1">
                        <div class="imgbox">
                            <img src="../images/Card 1.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star" id="rat"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox1" id="c2">
                        <div class="imgbox">
                            <img src="../images/Card 2.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox1" id="c3">
                        <div class="imgbox">
                            <img src="../images/Card 3.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox1" id="c4">
                        <div class="imgbox">
                            <img src="../images/Card 4.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox1" id="c5">
                        <div class="imgbox">
                            <img src="../images/Card 5.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox1" id="c6">
                        <div class="imgbox">
                            <img src="../images/Card 1.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div id="rightarrow" onclick="moveright1();">
                        <i class="fas fa-chevron-circle-right fa-2x" id="rightar"></i>
                    </div>
                </div>
            </div>
            <div class="freecrse">
                <div class="heading">
                    <h2 class="line">Top Course</h2>
                    <button class="viwal">View All <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="carousel">
                    <div id="leftarrow" onclick="moveleft2();">
                        <i class="fas fa-chevron-circle-left fa-2x" id="leftar"></i>
                    </div>
                    <div class="crsbox2" id="d1">
                        <div class="imgbox">
                            <img src="../images/Card 1.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star" id="rat"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox2" id="d2">
                        <div class="imgbox">
                            <img src="../images/Card 2.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox2" id="d3">
                        <div class="imgbox">
                            <img src="../images/Card 3.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox2" id="d4">
                        <div class="imgbox">
                            <img src="../images/Card 4.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox2" id="d5">
                        <div class="imgbox">
                            <img src="../images/Card 5.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox2" id="d6">
                        <div class="imgbox">
                            <img src="../images/Card 1.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div id="rightarrow" onclick="moveright2();">
                        <i class="fas fa-chevron-circle-right fa-2x" id="rightar"></i>
                    </div>
                </div>
            </div>
            <div class="freecrse">
                <div class="heading">
                    <h2 class="line">Recommended For You</h2>
                    <button class="viwal">View All <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="carousel">
                    <div id="leftarrow" onclick="moveleft3();">
                        <i class="fas fa-chevron-circle-left fa-2x" id="leftar"></i>
                    </div>
                    <div class="crsbox3" id="e1">
                        <div class="imgbox">
                            <img src="../images/Card 1.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star" id="rat"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox3" id="e2">
                        <div class="imgbox">
                            <img src="../images/Card 2.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox3" id="e3">
                        <div class="imgbox">
                            <img src="../images/Card 3.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox3" id="e4">
                        <div class="imgbox">
                            <img src="../images/Card 4.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox3" id="e5">
                        <div class="imgbox">
                            <img src="../images/Card 5.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox3" id="e6">
                        <div class="imgbox">
                            <img src="../images/Card 1.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div id="rightarrow" onclick="moveright3();">
                        <i class="fas fa-chevron-circle-right fa-2x" id="rightar"></i>
                    </div>
                </div>
            </div>
            <div class="freecrse">
                <h2 class="line">Trending Courses</h2>
                <div class="carousel">
                    <div id="leftarrow" onclick="moveleft4();">
                        <i class="fas fa-chevron-circle-left fa-2x" id="leftar"></i>
                    </div>
                    <div class="crsbox4" id="f1">
                        <div class="imgbox">
                            <img src="../images/Card 1.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star" id="rat"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox4" id="f2">
                        <div class="imgbox">
                            <img src="../images/Card 2.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox4" id="f3">
                        <div class="imgbox">
                            <img src="../images/Card 3.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox4" id="f4">
                        <div class="imgbox">
                            <img src="../images/Card 4.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox4" id="f5">
                        <div class="imgbox">
                            <img src="../images/Card 5.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div class="crsbox4" id="f6">
                        <div class="imgbox">
                            <img src="../images/Card 1.png">
                        </div>
                        <div class="detailsec">
                            <div class="rating">
                                <p>1080 Learners</p>
                                <p><i class="far fa-star"></i> 4.5</p>
                            </div>
                            <h4> Basic Skills/Beginning with Drawing</h4>
                            <div class="mentor">
                                <p>by Kelly Adwards</p>
                                <button class="free">Free</button>
                            </div>
                        </div>
                    </div>
                    <div id="rightarrow" onclick="moveright4();">
                        <i class="fas fa-chevron-circle-right fa-2x" id="rightar"></i>
                    </div>
                </div>
            </div>
        </div>
        <footer class="box7">
            <div class="boxxx">
                <div class="box">
                    <h2>Educore.</h2>
                    <p id="clr">Experience the best pedagogy with this E-learning platform.</p>
                    <div class="conthandle2">
                        <div class="handles2">
                            <i class="fab fa-github fa-2x"></i>
                        </div>
                        <div class="handles2">
                            <i class="fab fa-facebook fa-2x"></i>
                        </div>
                        <div class="handles2">
                            <i class="fab fa-twitter fa-2x"></i>
                        </div>
                        <div class="handles2">
                            <i class="fab fa-linkedin-in fa-2x"></i>
                        </div>
                    </div>

                </div>
                <div class="box">
                    <h2>Courses</h2>
                    <ul>
                        <li>All courses <i class="fas fa-angle-right"></i></li>
                        <li>Design <i class="fas fa-angle-right"></i></i></li>
                        <li>Programming <i class="fas fa-angle-right"></i></li>
                        <li>Music <i class="fas fa-angle-right"></i></li>
                        <li>Marketing <i class="fas fa-angle-right"></i></li>
                        <li>Photography <i class="fas fa-angle-right"></i></li>
                        <li>Architecture <i class="fas fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="box">
                    <h2>About Educore</h2>
                    <ul>
                        <li>About us</li>
                        <li>Blog</li>
                        <li>Our Service</li>
                        <li>Terms and Conditions</li>
                        <li>Careers</li>
                        <li>Privacy</li>
                    </ul>
                </div>
                <div class="box">
                    <h2>Contact us</h2>
                    <h4>888-999-111-0</h4>
                    <h4>educore.support@gmail.com</h4>
                </div>
                <div class="box">
                    <h2>Subscribe to our <br>Newsletter</h2>
                    <input type="text" placeholder="Enter Your Email" name="mail"><input type="submit" value="Submit">
                </div>
            </div>
            <div class="copyright">
                <p> © Copyright 2021 Educore </p>
            </div>

        </footer>

        <div class="two-box">
            <div class="leftbox">
                <h3>Want be a<br> Mentor?</h3>
                <button class="viewal1"><a href="apply-now.php">Apply Now <i class="fas fa-arrow-right"></a></i></button>

            </div>
            <div class="rightbox">
                <h3>Want to Discover<br>Courses?</h3>
                <button class="viewal2"><a href="alcourses.php">Enroll Now <i class="fas fa-arrow-right"></a></i></button>
            </div>

        </div>
    </body>
    <script src="../js/alcourses.js"></script>

</html>