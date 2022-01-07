 <!-- ***** Features Events Area Start ***** -->
    <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Hottest Investment</h4>
                        <p>Opportunities</p>
                    </div>
                </div>
            </div>

            <div class="row">
              <?php
               $us= dbConnect()->prepare("SELECT * FROM project  ORDER BY rand() LIMIT 6");
                $us->execute();
                while($ru=$us->fetch()){
               ?>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                        <div class="feature-events-thumb">
                            <img src="member/upload/<?php echo $ru['image']; ?>" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">Now Selling</a>
                                <a href="#" class="fa fa-shopping-cart"></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5><?php echo $ru['name']; ?></h5>
                            <h6><?php echo $ru['location']; ?></h6>
                            <p><?php echo $ru['detail']; ?></p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#" class="fa fa-shopping-cart"></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
        </div>
    </section>
    <!-- ***** Features Events Area End ***** -->
