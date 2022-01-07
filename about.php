<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Kobo Landlord | About us</title>

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


<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)"> </div>

 <!-- ***** Breadcumb Area Start ***** -->
<!--    <div class="breadcumb-area height-700 bg-img bg-overlay" style="background-image: url(img/bg-img/feature-9.JPG)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <div class="map-ratings-review-area d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><img src="img/core-img/map.png" alt=""></a>
                            <a href="#">8.7</a>
                            <a href="#">Write a review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Single Listing Area Start ***** -->
    <section class="dorne-single-listing-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
                <div class="col-12 col-lg-8">
                    <div class="single-listing-content">

<!--                        <div class="listing-title">
                            <h4>Burger House soho</h4>
                            <h6>First Avenue no 83</h6>
                        </div>-->

                        <div class="single-listing-nav">
                            <nav>
                                <ul id="listingNav">
                                    <li class="active"><a href="#overview">Wo We Are</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="overview-content mt-50" id="overview">
                            <p align="justify">
                                Owning a property such as land, house, shopping units and others in the fast rising and fast developing areas of Lagos is dream of everyone residing
                            in Lagos. At Silver Pacific, we are passionate about helping individual achieve their desire by providing 
                            flexible plan and opportunities for our clients.
                            Koboplot  offers wide range of lands in different parts of Lagos for sale. 
                            Are you looking for a land for your private home or for commercial purposes, Look no further as 
                            Silver Pacific Limited is here to ensure that your goal is realized hassle free. 
                            Lands are available in Lekki Free Trade Zone, Ajah, Abijo GRA and other part of the state.
                            </p>
                            <div class="row mt-5">
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Accepts Credit Cards</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Bike Parking</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wireless Internet</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Reservations</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Privat Parking</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Smoking Area</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wheelchair Accesible</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Coupons</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        

                       


                    </div>
                </div>

                <!-- Listing Sidebar -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="listing-sidebar">

                        <!-- Listing Verify -->
                        <div class="listing-verify">
                            <a href="#" class="btn dorne-btn w-100"><i class="fa fa-map-marker pr-3"></i>Our Locations</a>
                        </div>

                        

                        <!-- Opening Hours Widget -->
                        <div class="opening-hours-widget mt-50">
                            <h6>Locations</h6>
                            <ul class="opening-hours">
                                <?php
                                    $us= dbConnect()->prepare("SELECT name, location FROM project  ORDER BY rand() LIMIT 6");
                                     $us->execute();
                                     while($ru=$us->fetch()){
                                    ?>
                                <li>
                                    <p><?php echo $ru['name']; ?></p>
                                    <p><?php echo $ru['location']; ?></p>
                                </li>
                                     <?php } ?>
                            </ul>
                        </div>

                        <!-- Author Widget -->
                        <div class="author-widget mt-50 d-flex align-items-center">
                            <img src="img/core-img/logo.png" alt="">
                            <div class="authors-name">
                                <a href="#">Samuel Ikojie</a>
                                <p>Managing Director</p>
                            </div>
                        </div>

                        <!-- Contact Form -->
<!--                        <div class="contact-form contact-form-widget mt-50">
                            <h6>Contact Business</h6>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn dorne-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'hot.php'; ?>
    <!-- ***** Single Listing Area End ***** -->





<?php include 'foot.php';?>

