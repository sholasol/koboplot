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
    <script src="../../js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/countrySelect.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../../js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../../js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../../js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="../../js/counterup/jquery.counterup.min.js"></script>
    <script src="../../js/counterup/waypoints.min.js"></script>
    <!-- rounded-counter JS
		============================================ -->
    <script src="../../js/rounded-counter/jquery.countdown.min.js"></script>
    <script src="../../js/rounded-counter/jquery.knob.js"></script>
    <script src="../../js/rounded-counter/jquery.appear.js"></script>
    <script src="../../js/rounded-counter/knob-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="../../js/peity/jquery.peity.min.js"></script>
    <script src="../../js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="../../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="../../js/flot/jquery.flot.js"></script>
    <script src="../../js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../js/flot/jquery.flot.resize.js"></script>
    <script src="../../js/flot/widget-flot-chart-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="../../js/map/raphael.min.js"></script>
    <script src="../../js/map/jquery.mapael.js"></script>
    <script src="../../js/map/france_departments.js"></script>
    <script src="../../js/map/world_countries.js"></script>
    <script src="../../js/map/usa_states.js"></script>
    <script src="../../js/map/map-active.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="../../js/jquery.mockjax.js"></script>
    <script src="../../js/mock-active.js"></script>
    <script src="../../js/moment.min.js"></script>
    <script src="../../js/bootstrap-datetimepicker.js"></script>
    <script src="../../js/bootstrap-editable.js"></script>
    <script src="../../js/xediable-active.js"></script>
    <!-- COUNTER -->
    <script src="../../js/counterup/jquery.counterup.min.js"></script>
    <script src="../../js/counterup/waypoints.min.js"></script>
    <script src="../../js/counterup/counterup-active.js"></script>
    <!-- Modals-->
    <script src="../../js/modal-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="../../js/datapicker/bootstrap-datepicker.js"></script>
    <script src="../../js/datapicker/datepicker-active.js"></script>
   <!-- 	============================================ -->
    <script src="../../js/data-table/bootstrap-table.js"></script>
    <script src="../../js/data-table/tableExport.js"></script>
    <script src="../../js/data-table/data-table-active.js"></script>
    <script src="../../js/data-table/bootstrap-table-editable.js"></script>
    <script src="../../js/data-table/bootstrap-editable.js"></script>
    <script src="../../js/data-table/bootstrap-table-resizable.js"></script>
    <script src="../../js/data-table/colResizable-1.5.source.js"></script>
    <script src="../../js/data-table/bootstrap-table-export.js"></script>
    <!-- select2 JS
		============================================ -->
    <script src="../../js/jquery.timeselector.js"></script>
    <script src="../../js/select2/select2.full.min.js"></script>
    <script src="../../js/select2/select2-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../../js/main.js"></script>
    <script>
            $(function() {
            $('[name="time"]').timeselector({ min: '09:30', max: '18:30' })
                    });
    </script>
    <script>
            $("#country_selector").countrySelect({
                    // defaultCountry: "jp",
                    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                    // responsiveDropdown: true,
                    preferredCountries: ['ng','ca', 'gb', 'us']
            });
    </script>
    <script>
        function calculatePrice() {
            var percentage = $('input[name=percent]').val(),
                price = $('input[name=price]').val(),
                calcPrice = ( (percentage * price)/(100) ),
                discountPrice = calcPrice.toFixed(2);
            $('input[name=\'markup\']').val(discountPrice);
        }
        function calculatePerc() {
            var discountPrice = $('input[name=markup]').val(),    
                price = $('input[name=price]').val(),
                calcPerc = ((discountPrice/price) * (100)),
                discountPerc = calcPerc.toFixed("2");
            $('input[name=percent]').val(discountPerc);
        }
    </script>
</body>

</html>