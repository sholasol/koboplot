 <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  by <a href="index">KoboPlot</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
     <!-- Google Maps js -->
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>-->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr4WUTzRVdoGV2TIPMFHYh7fgt2uG1km8&libraries=places&callback=activatePlaces"></script>
    <script src="js/google-map/map-active.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
	<script type="text/javascript" src="js/background.cycle.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#x").backgroundCycle({
				imageUrls: [
					'res/img/bg1.jpg',
					'res/img/bg2.jpg',
					'res/img/bg3.jpg',
					'res/img/bg4.jpg',
					'res/img/bg5.jpg',
          'res/img/bg6.jpg',
          'res/img/bg7.jpg',
          'res/img/bg8.jpg'      
				],
				fadeSpeed: 7000,
				duration: 8000,
				backgroundSize: SCALING_MODE_COVER
			});
		});
	</script>
	<script>
                var TxtRotate = function(el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
              };

              TxtRotate.prototype.tick = function() {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                  this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                  this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

                var that = this;
                var delta = 300 - Math.random() * 100;

                if (this.isDeleting) { delta /= 2; }

                if (!this.isDeleting && this.txt === fullTxt) {
                  delta = this.period;
                  this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                  this.isDeleting = false;
                  this.loopNum++;
                  delta = 500;
                }

                setTimeout(function() {
                  that.tick();
                }, delta);
              };

              window.onload = function() {
                var elements = document.getElementsByClassName('txt-rotate');
                for (var i=0; i<elements.length; i++) {
                  var toRotate = elements[i].getAttribute('data-rotate');
                  var period = elements[i].getAttribute('data-period');
                  if (toRotate) {
                    new TxtRotate(elements[i], JSON.parse(toRotate), period);
                  }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #fff }";
                document.body.appendChild(css);
              };
        </script>
</body>

</html>