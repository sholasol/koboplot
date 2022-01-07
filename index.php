<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Kobo Landlord</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>
<?php 
include 'classes/connect.php';
include 'nav.php';

?>


<!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" id="x" >
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2 style="font-size: 50px !important">Discover
                        <span
                                class="txt-rotate"
                                data-period="500"
                                data-rotate='[ "Convenient,", "Simple,", "Reliable",  "High Returns",  "Investment Opportunities!" ]'></span>
							   
						</h2>
                        <h4><!-- Real Estate Investment--></h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Places</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <h6>What are you looking for?</h6>
                                <form action="search" method="POST">
                                    <select name="location" class="custom-select" required>
                                        <option value="">Location</option>
                                        <?php 
                                            $sc= dbConnect()->prepare("SELECT location FROM project WHERE location !='' ");
                                            $sc->execute();
                                            while($s=$sc->fetch()){
                                            ?>
                                               <option><?php echo $s['location']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <select class="custom-select" name="cat" >
                                        <option value="">Category</option>
                                        <?php 
                                            $sc1= dbConnect()->prepare("SELECT distinct category FROM project");
                                            $sc1->execute();
                                            while($ss=$sc1->fetch()){
                                            ?>
                                               <option><?php echo $ss['category']; ?></option>
                                        <?php } ?> 
                                    </select>
                                    <select class="custom-select" name="range" >
                                        <option selected>Price Range</option>
                                        <option>=N=100,000 - =N=500,000</option>
                                        <option>=N=500,000 - =N=1,000,000</option>
                                        <option>=N=1,000,000 - =N=5,000,000</option>
                                        <option>=N=5,000,000 - =N=10,000,000</option>
                                        <option>=N=10,000,000 - =N=20,000,000</option>
                                        <option>=N=20,000,000 - =N=50,000,000</option>
                                        <option>=N=50,000,000 - =N=100,000,000</option>
                                        <option>=N=100,000,000 and Above</option>
                                    </select>
                                    <button type="submit" name="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-facebook-official" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-google-plus-circle" aria-haspopup="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content itm">
                                        <img src="img/core-img/icon-1.png" class="itm" alt="">
                                        <a href="#">
                                            <h6>Investments</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-2.png" class="itm" alt="">
                                        <a href="#">
                                            <h6>Buy to Occupy</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-3.png" alt="">
                                        <a href="#">
                                            <h6>Off Sale</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-4.png" alt="">
                                        <a href="#">
                                            <h6>Properties</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-5.png" alt="">
                                        <a href="#">
                                            <h6>High Returns</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>Who We Are </h2>
                        <p>
                            Owning a property such as land, house, shopping units and others in the fast rising and fast developing areas of Lagos is dream of everyone residing
                            in Lagos. At Silver Pacific, we are passionate about helping individual achieve their desire by providing 
                            flexible plan and opportunities for our clients.
                            Koboplot  offers wide range of lands in different parts of Lagos for sale. 
                            Are you looking for a land for your private home or for commercial purposes, Look no further as 
                            Silver Pacific Limited is here to ensure that your goal is realized hassle free. 
                            Lands are available in Lekki Free Trade Zone, Ajah, Abijo GRA and other part of the state.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/bg-img/hero-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Why Choose Us</h4>
                        <p>When it comes to real estate Investment...We are the choice company</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/bg-img/a.jpg" alt="" class="itm">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">Housing Estate </a>
                                <a href="#">1643 Estates</a>
                            </div>
                            <div class="add-more">
                                <a href="#" class="fa fa-shopping-basket"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="img/bg-img/b.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">Shopping Units</a>
                                <a href="#">943 Shopping Lots</a>
                            </div>
                            <div class="add-more">
                                <a href="#" class="fa fa-shopping-bag"></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="img/bg-img/c.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">Opportunities</a>
                                <a href="#">243 Locations</a>
                            </div>
                            <div class="add-more">
                                <a href="#" class="fa fa-shopping-bag"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Editor Pick Area End ***** -->

    <!-- ***** Features Destinations Area Start ***** -->
    <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Own a Piece</h4>
                        <p>Investment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-1.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>Buy a Piece</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Shopping</h5>
                                    <p>Mall</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-2.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>Buy to Occupy</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Housing</h5>
                                    <p>Units</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-3.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>Mall & Hotels</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Hotels &</h5>
                                    <p>Malls</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-4.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>Royal County Estate</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Instant</h5>
                                    <p>Allocation</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-5.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>Property Investment</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>High Yield</h5>
                                    <p>Investments</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Destinations Area End ***** -->

    
    
    
    
    
    
    
    
   
    <!-- ***** Features Restaurant Area End ***** -->

   <?php include 'hot.php'; ?>

    <!-- ***** Clients Area Start ***** -->
<!--    <div class="dorne-clients-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="clients-logo d-md-flex align-items-center justify-content-around">
                        <img src="img/clients-img/1.png" alt="">
                        <img src="img/clients-img/2.png" alt="">
                        <img src="img/clients-img/3.png" alt="">
                        <img src="img/clients-img/4.png" alt="">
                        <img src="img/clients-img/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- ***** Clients Area End ***** -->
    
    
    <?php include 'foot.php';?>
