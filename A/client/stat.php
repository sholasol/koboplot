 <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-action-add-shopping-cart"></i> Number of Investment</p>
                                        <h4 class="card-stats-number"><?php echo $cust;  ?></h4>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Investment</p>
                                        <h4 class="card-stats-number">#<?php echo $sum; ?></h4>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebar"></div>

                                    </div>
                                </div>
                            </div>                            
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-av-my-library-books"></i> Property Listing</p>
                                        <h4 class="card-stats-number"><?php echo $proj; ?></h4>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-2 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Cashout</p>
                                        <h4 class="card-stats-number"><?php echo $payout;?></h4>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-line"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--card stats end-->

