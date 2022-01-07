<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Kobo Landlord | Login</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>
<?php include 'nav.php';?>


<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)">
    </div>
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
                        <div class="single-listing-nav">
                            <nav>
                                <ul id="listingNav">
                                    <li class="active"><a href="#overview">Register Here</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="overview-content mt-50" id="overview">
                            <p>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                <div class="row col-8">
                                    <div class="col-12">
                                        <input type="text" name="fname" class="form-control" placeholder="First Name" required />
                                    </div><br><br/>
                                    <div class="col-12"> 
                                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required />
                                    </div><br><br/>
                                    <div class="col-12">
                                        <input type="number" name="phome" class="form-control" placeholder="Phone Number" required />
                                    </div><br><br/>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required />
                                    </div><br><br>
                                    <div class="col-12">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                                    </div><br><br/>
                                    <div class="col-12">
                                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required />
                                    </div><br><br/>
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn dorne-btn"><i class="fa fa-sign-in"></i> Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            </p>
                            
                            
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
                                <li>
                                    <p>Royal Garden</p>
                                    <p>FTZ Ibeju Lekki</p>
                                </li>
                                <li>
                                    <p>Royal Garden</p>
                                    <p>FTZ Ibeju Lekki</p>
                                </li>
                                <li>
                                    <p>Royal Garden</p>
                                    <p>FTZ Ibeju Lekki</p>
                                </li>
                                <li>
                                    <p>Royal Garden</p>
                                    <p>FTZ Ibeju Lekki</p>
                                </li>
                                <li>
                                    <p>Royal Garden</p>
                                    <p>FTZ Ibeju Lekki</p>
                                </li>
                                <li>
                                    <p>Royal Garden</p>
                                    <p>FTZ Ibeju Lekki</p>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'hot.php'; ?>
    <!-- ***** Single Listing Area End ***** -->


<?php
if(isset($_POST['submit'])){
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
?>


<?php include 'foot.php';?>

