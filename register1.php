<?php
include 'inc/d.php';



if (isset($_POST['submit'])) {
 
   
    
    if(empty($_POST['email'])){
        $e="Please fill in your email!"; 
        echo  " <script>alert('$e'); window.location='login'</script>";
	}
 
    $pwd = check_input($_POST["password"]);
    if(empty($_POST['password'])){
        $e="Password is required!"; 
        echo  " <script>alert('$e'); window.location='login'</script>";
	}
    else{
            $email = check_input($_POST["email"]);
            $pwd = check_input($_POST["password"]);

            $query=$con->query("select * from users where email='$email' "); //admin login query
            $num_rows=$query->num_rows;
            
            $query2=$con->query("select * from customer where email='$email' "); //client login query
            $num_rows2=$query2->num_rows;

            if($num_rows > 0){
                $row=$query->fetch_array();
                $phash=$row['password'];
                $password = password_verify($pwd, $phash);
                if($password){
                    session_start();	
                    $_SESSION["email"] = $row['email']; // setting session
                    $_SESSION["id"] = $row['userID'];
                    $role=$row['role'];
                    if($role=='Admin'){
                        echo  " <script>window.location='Admin/home.php' </script>"; 
                    }
                    if($role=='User'){
                        echo  " <script>window.location='User/home.php' </script>";  // take to Users to the home page
                    }   
                }
                else{
                        $e="Incorrect user authentication! Try again"; 
                        echo  " <script>alert('$e');window.location='login' </script>";
                    } 
            }
            elseif($num_rows2 > 0){
                    $row2=$query2->fetch_array();
                    $phash2=$row2['password'];
                    $password1 = password_verify($pwd, $phash2);
                    if($password1){    
                    session_start();
				
                    $_SESSION["email"] = $row2['email']; // setting session
                    $_SESSION["id"] = $row2['userID']; // setting session
                        
                    echo  " <script>window.location='client/home.php' </script>";  // take user to the home page    
                    }
                    else{
                        $e="Incorrect user authentication! Try again"; 
                        echo  " <script>alert('$e');window.location='login' </script>";
                         //header("Location:login.php?err=" . urlencode("Incorrect user authentication! Try again")); 
                    } 
                }
                else{
                    $e="Incorrect user authentication! Try again"; 
                    echo  " <script>alert('$e');window.location='login' </script>";
                     //header("Location:login.php?err=" . urlencode("Incorrect user authentication! Try again")); 
                    } 
               
                 
            
    
        }
}


function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Owned</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>
<?php include 'nav.php';?>




<!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" id="x" >
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Hero Search Form -->
                    <div>
                        
                    </div>
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Sign Up</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <h6><a href="login" style="color: #fff;">Already have an Account? Sign In</a></h6>
                                <form action="#">
                                <div class="row col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="name" class="form-control custom-select" placeholder="Your Name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="name" class="form-control custom-select" placeholder="Your Name">
                                        </div>
                                    </div> <br/><br/>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="name" class="form-control custom-select" placeholder="Your Name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="name" class="form-control custom-select" placeholder="Your Name">
                                        </div>
                                    </div> <br/><br/>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div> <br/><br/>
                                    <div class="col-12">
                                        <button type="submit" class="btn dorne-btn">Send</button>
                                    </div>
                                </div>
                            </form>
<!--                                <form  method="POST">
                                    <div class="row">
                                        <input type="text" name="fname" class="custom-select" placeholder="First Name" required style="margin-bottom: 5px;"/>
                                        <input type="text" name="lname" class="custom-select" placeholder="Last Name" required style="margin-bottom: 5px;"/>
                                    </div>
                                    <div class="row">
                                        <input type="email" name="email" class="custom-select" placeholder="Your Email" required style="margin-bottom: 5px;"/>
                                        <input type="number" name="phone" class="custom-select" placeholder="Your Phone Number" required style="margin-bottom: 5px;"/>
                                    </div>
                                    <div class="row">
                                        <input type="password" name="password" class="custom-select" placeholder="Your Password" required style="margin-bottom: 5px;"/>
                                        <input type="password" name="cpassword" class="custom-select" placeholder="Confirm Your Password" required style="margin-bottom: 5px;"/>
                                    </div>
                                    <div class="row">
                                    <button type="submit" class="btn dorne-btn" name="submit"><i class="fa fa-sign-in pr-2" aria-hidden="true"></i> Sign Up</button>
                                    </div>
                                </form>-->
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
                        <h2>Who We Are <br><span>Owned Together</span></h2>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce quis tempus elit. Sed efficitur tortor neque, vitae aliquet urna varius sit amet. Ut rhoncus, nunc nec tincidunt volutpat, ex libero.</p>
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
                                <a href="#">Real Estate Investment</a>
                                <a href="#">1643 Destinations</a>
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
                                <a href="#">Off Plan</a>
                                <a href="#">943 Destinations</a>
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
                                <a href="#">Buy to Occupy</a>
                                <a href="#">243 Destinations</a>
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

    
    <?php include 'foot.php';?>
