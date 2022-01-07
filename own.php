<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Kobo Landlord | Koboplot</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="zcss/responsive/responsive.css" rel="stylesheet">

</head>
<?php 
include 'classes/connect.php';
include 'nav.php';
?>




 <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)">
    </div>
    <!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Project Koboplots</h4>
                        <p>Invest in Landed Properties</p>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php
               $us= dbConnect()->prepare("SELECT * FROM project WHERE koboplot > 0  ORDER BY rand() LIMIT 6");
                $us->execute();
                while($ru=$us->fetch()){
               ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="member/upload/<?php echo $ru['image']; ?>" width="640" height="473" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>FROM <?php echo number_format($ru['koboplot']); ?></p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5><?php echo $ru['name']; ?></h5>
                                <p>Party</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->

<?php include 'foot.php';?>

