<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/edumy-html/page-shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 14:50:46 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edumy - LMS Online Education Course & School HTML Template</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
        <div class="container-fluid">
            <!-- Ace Responsive Menu -->
            <nav>
                <!-- Menu Toggle btn-->
                <div class="menu-toggle">
                    <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="#" class="navbar_brand float-left dn-smd">
                    <img class="logo1 img-fluid" src="images/header-logo.png" alt="header-logo.png">
                    <img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png">
                    <span>Marifaa</span>
                </a>
                <!-- Responsive Menu Structure-->
                <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                    <li>
                        <a href="#"><span class="title">Accueil</span></a>
                        <!-- Level Two-->
                        <ul>
                            <li><a href="Préparatoire.html">Préparatoire</a></li>
                            <li><a href="primaire.html">primaire</a></li>                  
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#"><span class="title">Qui somme nous</span></a>
                        <ul>
                            <li><a href="historique.html">historique</a></li>
                            <li><a href="palmarès.html">palmarès</a></li>
                            <li><a href="staff.html">staff</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="title">Vie scolaire</span></a>
                        <ul>
                            <li><a href="#">Activités</a>
                                <ul>
                                    <a href="Culturelle.html">Culturelle</a>
                                    <a href="Sportif.html">Sportif</a>
                                    <a href="Club.html">Club</a>
                                </ul>
                            </li>
                            <li><a href="#">Services</a>
                                <ul>
                                    <a href="Cantine.html">Cantine</a>
                                    <a href="Garderie.html">Garderie</a>
                                    <a href="Transport.html">Transport</a>
                                </ul>
                            </li>
                            <li><a href="Evénements.html">Evénements</a></li>                           
                            <li><a href="Excursions.html">Excursions</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="afficherproduit.php"><span class="title">store</span></a>                      
                    </li>
         

                </ul>
                <ul class="sign_up_btn pull-right dn-smd mt20">
                    <li class="list-inline-item list_s">
                        <a href="#" class="btn flaticon-user" data-toggle="modal" data-target="#exampleModalCenter"> 
                            <span class="dn-lg">Login/Register</span>
                        </a>
                    </li>
                    <li class="list-inline-item list_s">
                        <div class="cart_btn">
                            <ul class="cart">
                                <li>
                                    <a href="afficherpanier.php" class="btn cart_btn flaticon-shopping-bag"></a>

                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-inline-item list_s">
                        <div class="search_overlay">
                            <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                            </a>
                        </div>
                    </li>
                </ul><!-- Button trigger modal -->
            </nav>
        </div>
    </header>
    <!-- Modal -->
    <div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="login_form">
                            <form action="#">
                                <div class="heading">
                                    <h3 class="text-center">Login to your account</h3>
                                    <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                                </div>
                                 <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                    <a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                                <hr>                                
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="sign_up_form">
                            <div class="heading">
                                <h3 class="text-center">Create New Account</h3>
                                <p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Username">
                                </div>
                                 <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password">
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                    <label class="custom-control-label" for="exampleCheck2">Want to become an instructor?</label>
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                                <hr>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search Button Bacground Overlay -->
    <div class="search_overlay dn-992">
        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
            <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
            <div id="mk-fullscreen-search-wrapper">
              <form method="get" id="mk-fullscreen-searchform">
                <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
                <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
              </form>
            </div>
        </div>
    </div>

    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="main_logo_home2">
                    <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
                    <span>edumy</span>
                </div>
                <ul class="menu_bar_home2">
                    <li class="list-inline-item">
                        <div class="search_overlay">
                          <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                          </a>
                            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                                <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
                                <div id="mk-fullscreen-search-wrapper2">
                                  <form method="get" id="mk-fullscreen-searchform2">
                                    <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
                                    <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                </ul>
            </div>
        </div><!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <li>
                        <a href="#"><span class="title">Accueil</span></a>
                        <!-- Level Two-->
                        <ul>
                            <li><a href="Préparatoire.html">Préparatoire</a></li>
                            <li><a href="primaire.html">primaire</a></li>                  
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#"><span class="title">Qui somme nous</span></a>
                        <ul>
                            <li><a href="historique.html">historique</a></li>
                            <li><a href="palmarès.html">palmarès</a></li>
                            <li><a href="staff.html">staff</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="title">Vie scolaire</span></a>
                        <ul>
                            <li><a href="#">Activités</a>
                                <ul>
                                    <a href="Culturelle.html">Culturelle</a>
                                    <a href="Sportif.html">Sportif</a>
                                    <a href="Club.html">Club</a>
                                </ul>
                            </li>
                            <li><a href="#">Services</a>
                                <ul>
                                    <a href="Cantine.html">Cantine</a>
                                    <a href="Garderie.html">Garderie</a>
                                    <a href="Transport.html">Transport</a>
                                </ul>
                            </li>
                            <li><a href="Evénements.html">Evénements</a></li>                           
                            <li><a href="Excursions.html">Excursions</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="afficherproduit.php"><span class="title">store</span></a>                      
                    </li>
        </nav>
    </div>

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Shop</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Commande</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Members -->
    <section class="our-team pb50">
        <div class="container">
            <div class="row">
                <h1>Les Commandes : </h1>
                <?php

include '../core/commandeC.php';

$crim = new commandeC();
$listcrim = $crim->affichercommande();
?>
<table border="2">
    <tr>
      
        <td>IDCommande</td>
        <td>prix</td>
        <td>description</td>
        <td>quantite</td>
        <td>annulation</td>

    </tr>
    <?php

foreach ($listcrim as $row)
{
    echo '
        <tr>
            
            <td>'.$row["IDCommande"].'</td>
            <td>'.$row["prixTotal"].'</td>
            <td>'.$row["etat"].'</td>
            <td>'.$row["CIN"].'</td>
            <td>'.$row["date"].'

            <form action="modifiercommande.php" method="get">
                    
                    <input type="hidden" id="etat" name="etat" value="confirmer">
                    <input type="hidden" id="CIN" name="CIN" value="0987663">
                    <input type="hidden" id="IDCommande" name="IDCommande" value="'.$row["IDCommande"].'" >
                    <input type="hidden" id="date" name="date" value="'.$row["date"].'">

                    <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="modifier">
                </form>

                </td>

            <td>
                <form action="supprimercommande.php" method="get">
                    
                    <input type="hidden" id="etat" name="etat" value="confirmer">
                    <input type="hidden" id="CIN" name="CIN" value="0987663">
                    <input type="hidden" id="IDCommande" name="IDCommande" value="'.$row["IDCommande"].'" >
                    <input type="hidden" id="date" name="date" value="'.$row["date"].'">

                    <input style="background: none; border: none; color: red; text-decoration: underline;" type="submit" value="Supprimer">
                </form>
            </td>
            
        </tr>
    ';
}
?>

</table>
                </li>
                
                
            </div>
        </div>
    </section>

    <!-- Our Footer -->
    <section class="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                    <div class="footer_contact_widget">
                        <h4>CONTACT</h4>
                        <p>19 Rue albanie, nasr 1 </p>
                        <p>1234 Tunis,Tunisie</p>
                        <p>+216 22 595 191 </p>
                        <p><a href="https://gmail.coms">wafahamdiboubahri@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                    <div class="footer_company_widget">
                        <h4>COMPANY</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                            <li><a href="#">Become a Teacher</a></li>
                        </ul>
                    </div>
                </div>
                
            
            </div>
        </div>
    </section>

    <!-- Our Footer Middle Area -->
    <section class="footer_middle_area p0">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
                    <div class="logo-widget home1">
                        <img class="img-fluid" src="images/header-logo.png" alt="header-logo.png">
                        <span>MARFAA</span>
                    </div>
                </div>
                <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right">
                    <div class="footer_menu_widget">
                        <ul>
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">Privacy</a></li>
                            <li class="list-inline-item"><a href="#">Terms</a></li>
                            <li class="list-inline-item"><a href="#">Sitemap</a></li>
                            <li class="list-inline-item"><a href="#">Purchase</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                    <div class="footer_social_widget mt15">
                        <ul>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer Bottom Area -->
    <section class="footer_bottom_area pt25 pb25">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="copyright-widget text-center">
                        <p>Copyright Marfaa © 2019. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from grandetest.com/theme/edumy-html/page-shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 14:50:48 GMT -->
</html>