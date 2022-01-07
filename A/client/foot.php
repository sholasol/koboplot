 <!-- Floating Action Button -->
                    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                        <a class="btn-floating btn-large blue">
                          <i class="large mdi-action-group-work "></i>
                        </a>
                        <ul>
                            <li><a href="invest.php" title="Investment Opportunities" class="btn-floating red"><i class="large mdi-action-account-child "></i></a></li>
                          <li><a href="portfolio" title="Portfolio" class="btn-floating yellow darken-1"><i class="large mdi-action-home"></i></a></li>
                          <li><a href="transfer.php" title="Investment Transfer" class="btn-floating green"><i class="large mdi-maps-local-atm "></i></a></li>
                          <li><a href="message.php" title="Messages" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                        </ul>
                    </div>
                    <!-- Floating Action Button -->

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->
<!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            &nbsp;
        </div>
       
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2018 
                <span class="right"> Owned Together </span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="../own/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="../own/js/materialize.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../own/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="../own/js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="../own/js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/chartjs/chart-script.js"></script>
    <script src="../own/js/plugins/chartjs/chartjs-sample-chart.js" type="text/javascript"></script>
    <!-- sparkline -->
    <script type="text/javascript" src="../own/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/sparkline/sparkline-script.js"></script>
      

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../own/js/plugins.js"></script>
    
    <!-- Data Tables-->
    <script type="text/javascript" src="../own/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<?php echo "Welcome $name"; ?></span>', 1500);
        }, 1500);
        /*
        setTimeout(function() {
            Materialize.toast('<span>You have 30 requests!</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>You have 30 messages.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 15000);
        */
    });

    
    </script>
</body>


</html>
