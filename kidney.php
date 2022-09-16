<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>DiaBeta</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <!-- <img src="img/core-img/leaf.png" alt="" > -->
            <img src="img/core-img/DiaBetaLogo.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: diabeta@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Contact Us: +94 123 45 67 89"><i class="fa fa-phone" aria-hidden="true"></i> <span>Contact Us: +94 123 45 67 89</span></a>
                            </div>
                            <div class="language">
                                <button type="button" class="btn btn-primary btn-xs">English</button>
                                <button type="button" class="btn btn-primary btn-xs">සිංහල</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/DiaBetaLogo.png" alt="" style="width: 200px;"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="predictions.html">Predictions</a></li>
                                    <li><a href="educations.html">Health Educations Tips</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->


    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/4.jpg);">
            <h2>Kidney Risk Prediction</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="predictions.html"></i> Predictions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kidney Risk Prediction</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Product Area Start ##### -->
    <section class="team-area section-padding-100-0">
        <div class="container">

            <div class="row align-items-center justify-content-between">
            <div class="container">
            <p>Please answers the all questions</p>
            <form action="kidneyscore.php" method="post">
                    <div class="form-group">
                        <h3>Questions 1 : How old are you ? </h3>
                                <div class="form-group"> 
                                    <ol>
                                        <li>
                                            <input type="radio" name="q1" value="1" />&nbsp;&nbsp;age < 44
                                        </li>
                                        <li>
                                            <input type="radio" name="q1" value="2" />&nbsp;&nbsp;45 < age < 54
                                        </li>
                                        <li>
                                            <input type="radio" name="q1" value="3" />&nbsp;&nbsp;55 < age < 64
                                        </li>
                                        <li>
                                            <input type="radio" name="q1" value="4" />&nbsp;&nbsp;65 < age < 74
                                        </li>
                                        <li>
                                            <input type="radio" name="q1" value="5" />&nbsp;&nbsp;75 < age 
                                        </li>
                                    </ol>
                                </div>
                        <br/>
                        <h3>Questions 2 : What is your Gender? </h3>
                            <div class="form-group"> 
                                <ol>
                                    <li>
                                        <input type="radio" name="q2" value="1" />&nbsp;&nbsp;Male
                                    </li>
                                    <li>
                                        <input type="radio" name="q2" value="2" />&nbsp;&nbsp;Female
                                    </li>
                                </ol>
                            </div>
                        <br/>
                        <h3>Questions 3 : BMI?</h3>
                            ( BMI = kg/m<sup>2</sup> )
                            <div class="form-group"> 
                                <ol>
                                    <li>
                                        <input type="radio" name="q4" value="1" />&nbsp;&nbsp;Below 25
                                    </li>
                                    <li>
                                        <input type="radio" name="q4" value="2" />&nbsp;&nbsp;25 - 29
                                    </li>
                                    <li>
                                        <input type="radio" name="q4" value="3" />&nbsp;&nbsp;30 - 39
                                    </li>
                                    <li>
                                        <input type="radio" name="q4" value="4" />&nbsp;&nbsp;Above 40
                                    </li>
                                </ol>
                            </div>
                        <br/>
                        
                        <h3>Questions 4 : Take medicine to a disease?</h3>
                            <div class="form-group"> 
                                <ol>
                                    <li>
                                        <input type="radio" name="q3" value="1" />&nbsp;&nbsp;Yes
                                    </li>
                                    <li>
                                        <input type="radio" name="q3" value="2" />&nbsp;&nbsp;No
                                    </li>
                                </ol> 
                            </div>
                    <br/>
                    <div class="form-group"> 
                        <h3>Questions 5 : Has any one in your family hhad kidney transplant , had kidney failure or been on dialysis?</h3>
                            <ol>
                                <li>
                                    <input type="radio" name="q3" value="1" />&nbsp;&nbsp;Yes
                                </li>
                                <li>
                                    <input type="radio" name="q3" value="2" />&nbsp;&nbsp;No
                                </li>
                            </ol>
                    </div>
                    <br/>
                    <div class="form-group"> 
                        <h3>Questions 6 : Have you noticed a changes in your vision over the last 12 months?</h3>
                            <ol>
                                <li>
                                    <input type="radio" name="q3" value="1" />&nbsp;&nbsp;Yes
                                </li>
                                <li>
                                    <input type="radio" name="q3" value="2" />&nbsp;&nbsp;No
                                </li>
                                <li>
                                    <input type="radio" name="q3" value="3" />&nbsp;&nbsp;I don't Know
                                </li>
                            </ol>
                    </div>
                    <br/>
                    <div class="form-group"> 
                        <h3>Questions 7 : Decreased amount of urine ?</h3>
                            <ol>
                                <li>
                                    <input type="radio" name="q3" value="1" />&nbsp;&nbsp;Yes
                                </li>
                                <li>
                                    <input type="radio" name="q3" value="2" />&nbsp;&nbsp;No
                                </li>
                            </ol>
                    </div>
                    <br>
                    <div class="form-group"> 
                        <h3>Questions 7 : Diabetes Status?</h3>
                            <ol>
                                <li>
                                    <input type="radio" name="q7" value="1" />&nbsp;&nbsp;Absent
                                </li>
                                <li>
                                    <input type="radio" name="q7" value="2" />&nbsp;&nbsp;Type I
                                </li>
                                <li>
                                    <input type="radio" name="q7" value="3" />&nbsp;&nbsp;Type II
                                </li>
                            </ol>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
                    </div>
            </form>
            </div>
        </div>
    </section>
    <!-- ##### Product Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/bg-img/DiaBeta.png);">
        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>&copy; Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="predictions.html">Predictions</a></li>
                                    <li><a href="educations.html">Health Educations Tips</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>