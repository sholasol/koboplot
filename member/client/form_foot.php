 <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; Koboplot.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:15 am</span></h3>
                            <p>Hi, what you are doing and where are you gay?</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:10 am</span></h3>
                            <p>Now working in graphic design with coding and you?</p>
                        </div>
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:05 am</span></h3>
                            <p>Practice in programming</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:02 am</span></h3>
                            <p>That's good man! carry on...</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chat Box End-->
    <!-- jquery
		============================================ -->
    <script src="../js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="../js/counterup/jquery.counterup.min.js"></script>
    <script src="../js/counterup/waypoints.min.js"></script>
    <!-- modal JS
		============================================ -->
    <script src="../js/modal-active.js"></script>
    <!-- touchspin JS
		============================================ -->
    <script src="../js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="../js/touchspin/touchspin-active.js"></script>
    <!-- colorpicker JS
		============================================ -->
    <script src="../js/colorpicker/jquery.spectrum.min.js"></script>
    <script src="../js/colorpicker/color-picker-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="../js/datapicker/bootstrap-datepicker.js"></script>
    <script src="../js/datapicker/datepicker-active.js"></script>
    <!-- input-mask JS
		============================================ -->
    <script src="../js/input-mask/jasny-bootstrap.min.js"></script>
    <!-- chosen JS
		============================================ -->
    <script src="../js/chosen/chosen.jquery.js"></script>
    <script src="../js/chosen/chosen-active.js"></script>
    <!-- select2 JS
		============================================ -->
    <script src="../js/select2/select2.full.min.js"></script>
    <script src="../js/select2/select2-active.js"></script>
    <!-- ionRangeSlider JS
		============================================ -->
    <script src="../js/ionRangeSlider/ion.rangeSlider.min.js"></script>
    <script src="../js/ionRangeSlider/ion.rangeSlider.active.js"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="../js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="../js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="../js/rangle-slider/rangle-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="../js/knob/jquery.knob.js"></script>
    <script src="../js/knob/knob-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../js/main.js"></script>
    <script language="JavaScript" type="text/javascript">
        $(function() {
        var jsobj = <?php echo $phpobj; ?>;
        // Area Chart
        Morris.Area({
        element: 'morris-area-chart',
        data: jsobj,
        xkey: 'daydate',
        ykeys: ['pagefrom', 'ip', 'totalpages'],
        labels: ['No Pages From', 'No of IP', 'Total Pages Visited'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
        });
        
        
        
        var jsobj2 = <?php echo $phpobj2; ?>;
        // Bar Chart
        Morris.Bar({
        element: 'morris-bar-chart',
        data: jsobj2,
        xkey: 'IPAddress',
        ykeys: ['Quantity'],
        labels: ['Quantity'],
        // stacked : true,
        
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true,
        stacked:false,
        barColors:['#d13c3e']
        });
        
        
        var jsobj3 = <?php echo $phpobj3; ?>;
        // Donut Chart
        Morris.Donut({
        element: 'morris-donut-chart',
        data:jsobj3,
        resize: true
        });
        
        });
        
        
        function calcKoboplot() {
            var count, tot,  sum;
            count=Number(document.getElementById("count").value);
            tot =Number(document.getElementById("total").value);
            sum =Number(document.getElementById("sum").value);
            
            tot = (sum * count);
            
            document.getElementById("total").value= tot;
        }
   </script>
   <script>
        function calcTotal() {
            var percentage = $('input[name=count]').val(),
                price = $('input[name=price]').val(),
                calcPrice = (percentage * price) ,
                discountPrice = calcPrice.toFixed(2);
            $('input[name=\'total\']').val(discountPrice);
        }
        </script>

</body>

</html>