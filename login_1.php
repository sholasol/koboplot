<?php
/*
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
                        echo  " <script>window.location='member/Admin/home' </script>";  // take Admin to the home page  
                    }
                    if($role=='User'){
                        echo  " <script>window.location='member/User/home' </script>";  // take user to the home page  
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
                        
                    echo  " <script>window.location='member/client/home' </script>";  // take user to the home page    
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

if(isset($_POST['register'])){
    $pp = $_POST['password'];
    $cpp= $_POST['cpassword'];
    $em = $_POST['email'];
    
    if(empty($_POST['fname'])){
        $e="Please fill in your first name!"; 
        echo  " <script>alert('$e');</script>";
	}
        elseif(empty($_POST['lname'])){
        $e="Please fil in your last name!"; 
        echo  " <script>alert('$e');</script>";
	}
        elseif(empty($_POST['phone'])){
        $e="Please fil in your phone number!"; 
        echo  " <script>alert('$e');</script>";
	}
        elseif(empty($_POST['email'])){
        $e="Please fil in your email address!"; 
        echo  " <script>alert('$e');</script>";
	}
        elseif (filter_var($em, FILTER_VALIDATE_EMAIL)) {
        $e="Please enter a valid email!"; 
        echo  " <script>alert('$e');</script>";
        }
        elseif(empty($_POST['password'])){
        $e="Your password is required!"; 
        echo  " <script>alert('$e');</script>";
	}
        elseif(empty($_POST['cpassword'])){
        $e="Please confirm Your password!"; 
        echo  " <script>alert('$e');</script>";
	}
        elseif($pp !=$cpp){
        $e="Your password does not match!"; 
        echo  " <script>alert('$e');</script>";
	}
        else{
    
        $fname = check_input($_POST["fname"]);
        $lname = check_input($_POST["lname"]);
        $phone = check_input($_POST["phone"]); 
        $email = check_input($_POST["email"]); 
        $pass = check_input($_POST["password"]); 
        $pass=$pass;
        $options = [
            'cost' => 12,
        ];
        $hash= password_hash($pass, PASSWORD_BCRYPT, $options);
        
        $chk=$con->query("SELECT email FROM customer WHERE email='$email' ");
        $rr=$chk->num_rows;
        if($rr < 1){
            $reg = $con->query("INSERT INTO customer SET fname='$fname', lname='$lname', email='$email', password='$hash', phone='$phone'");
            if($reg){
                $query2=$con->query("select * from customer where email='$email' "); //client login query
                $row2=$query2->fetch_array();
                session_start();
				
                    $_SESSION["email"] = $row2['email']; // setting session
                    $_SESSION["id"] = $row2['userID']; // setting session
                        
                    echo  " <script>window.location='client/home.php' </script>";
            }else{
               $e="Processing error. Please try again"; 
                echo  " <script>alert('$e');</script>"; 
            }
        }
        else{
            $e="This email already exists"; 
                echo  " <script>alert('$e');</script>";
        }
        
        }
}

function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

*/
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
                    <div class=" alert-warning ">
                        <?php if(isset($_GET['err'])) { ?>

                        <div style="color: crimson;"><?php echo $_GET['err']; ?></div>

                        <?php } ?>
                    </div>
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Sign In</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Sign Up</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <div class="contact-form contact-form-widget mt-50" style="background: #5d25dd !important; opacity: 0.8;">
                                    <h6 style="color: #fff;">Sign In</h6>
<!--                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">-->
                                    <form action="classes/login.php" method="POST">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="email" name="email" class="form-control" placeholder="Email Address" required />
                                            </div>
                                            <div class="col-6">
                                                <input type="password" name="password" class="form-control" placeholder="password" required />
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="login" class="btn dorne-btn" style="background-color: #000;"><i class="fa fa-sign-in"></i> Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>   
                            </div>
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                                <div class="contact-form contact-form-widget mt-50" style="background: #5d25dd !important; opacity: 0.8;">
                                    <h6 style="color: #fff;">Sign Up</h6>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" name="fname" class="form-control" placeholder="First Name" required/>
                                            </div>
                                            <div class="col-6">
                                                <input type="text" name="lname" class="form-control" placeholder="Last Name" required/>
                                            </div>
                                            <div class="col-6">
                                                <input type="number" name="phone" class="form-control" placeholder="Phone" required />
                                            </div>
                                            <div class="col-6">
                                                <input type="email" name="email" class="form-control" placeholder="Email Address" required />
                                            </div>
                                            <div class="col-6">
                                                <input type="password" name="password" class="form-control" placeholder="password" required />
                                            </div>
                                            <div class="col-6">
                                                <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" required />
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="register" class="btn dorne-btn" style="background-color: #000;"><i class="fa fa-sign-in"></i> Sign Up</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
