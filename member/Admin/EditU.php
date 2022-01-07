 c
     <?php 
include 'head2.php'; 
$id=$_GET['id'];
include_once '../classes/connect.php';

$us= dbConnect()->prepare("SELECT count(userID) AS num FROM users WHERE compID='$user_id' AND (role=4 OR role=5 OR role=6 OR role=7 OR role=8 OR role=10)");
$us->execute();
$ru=$us->fetch();
$num=$ru['num'];

if(isset($_POST['submit'])){
    $em=check_input($_POST['email']);
    
    if(empty($_POST['fname'])){
        $e="Please fill in first name!"; 
        echo  " <script>alert('$e'); </script>";
	}
        
    elseif(empty($_POST['lname'])){
        $e="Please fill in last name!"; 
        echo  " <script>alert('$e'); </script>";
	}
      
    elseif(empty($_POST['phone'])){
        $e="Please fill in the phone number!"; 
        echo  " <script>alert('$e'); </script>";
	}
    
    elseif(empty($_POST['email'])){
	 $e="Please enter an email!"; 
         echo  " <script>alert('$e'); </script>"; 
    }
    
    
    elseif ((!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $em))){
          $e="Invalid email entered!"; 
           echo  " <script>alert('$e'); </script>";  
       }
       
    else{
        $email = check_input($_POST["email"]);
        $fname=check_input($_POST['fname']);
        $lname=check_input($_POST['lname']);
        $phone=check_input($_POST['phone']);
        $joined=date('Y-m-d');
        //Corporate Account
        
        $ins= dbConnect()->prepare("UPDATE users SET fname=:fname, lname=:lname, email=:email, phone=:phone, modified=:modify, modifiedby=:createdby WHERE userID=:usr");
            $ins->bindParam(':email', $email);
            $ins->bindParam(':fname', $fname);
            $ins->bindParam(':lname', $lname);
            $ins->bindParam(':phone', $phone);
            $ins->bindParam(':modify', $joined);
            $ins->bindParam(':createdby', $uid);
            $ins->bindParam(':usr', $id);
            
            if($ins->execute()){
                $e="Changes has been successfully saved"; 
                echo  " <script>alert('$e'); window.location='../manageU'</script>";
            }
            else{
                $e="Processing error"; 
                echo  " <script>alert('$e'); </script>";
            }
    }
}
function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$u= dbConnect()->prepare("SELECT * FROM users WHERE userID='$id'");
$u->execute();
$t=$u->fetch();
?>

            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                             <form role="search" method="POST" action="../enq" class="">
                                                <input type="text" name="searchs" placeholder="Checkout ID" class="form-control" required>
                                                    <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="home">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add User</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Breadcome End-->
            <div class="user-profile-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="user-profile-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="user-profile-img">
                                                    <img src="../img/notification/5.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="user-profile-content">
                                                    <h2>Update User</h2>
                                                    <p class="profile-founder">Founder of <strong>Uttara It Park</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="user-profile-social-list">
                                            <table class="table small m-b-xs">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <strong>542</strong> Projects
                                                        </td>
                                                        <td>
                                                            <strong>222</strong> Followers
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>612</strong> Comments
                                                        </td>
                                                        <td>
                                                            <strong>542</strong> Articles
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>254</strong> Tags
                                                        </td>
                                                        <td>
                                                            <strong>552</strong> Friends
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="analytics-sparkle-line user-profile-sparkline">
                                            <div class="analytics-content">
                                                <h5>All Users</h5>
                                                <h2 class="counter"><?php echo number_format($num); ?></h2>
                                                <div id="sparkline22"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="user-profile-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="sparkline11-list shadow-reset mg-t-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Create User</h1>
                                        <div class="sparkline11-outline-icon">
                                            <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline11-graph">
                                    <div class="input-knob-dial-wrap">
                                        <form method="post">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-6">
                                                <label>First Name</label>
                                                <div class="input-group date">
                                                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                      <input type="text" name="fname" class="form-control" value="<?php echo $t['fname']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Last Name</label>
                                                <div class="input-group date">
                                                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                      <input type="text" name="lname" class="form-control" value="<?php echo $t['lname']; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-6">
                                                <label>Email</label>
                                                <div class="input-group date">
                                                      <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                      <input type="email" name="email" class="form-control" value="<?php echo $t['email']; ?>" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="format: username@email.xx or username@email.xxx" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Phone</label>
                                                <div class="input-group date">
                                                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                      <input type="text" name="phone" class="form-control" value="<?php echo $t['phone']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12"><br>
                                                <button type="submit" name="submit" class="btn btn-info">Save Changes</button>
                                            </div>
                                        </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="sparkline11-list shadow-reset mg-t-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Recent Users</h1>
                                        <div class="sparkline11-outline-icon">
                                            <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline11-graph">
                                    <div class="input-knob-dial-wrap">
                                        <table class="table small m-b-xs">
                                            <thead>
                                                    <tr>
                                                        <th>
                                                            Name
                                                        </th>
                                                        <th>
                                                            Role
                                                        </th>
                                                        <th>
                                                            Email
                                                        </th>
                                                    </tr>
                                            </thead>
                                            <tbody>  
                                                <?php 
                                                    $ag= dbConnect()->prepare("SELECT * FROM users WHERE (role=5 OR role=6 OR role=7 OR role=8 OR role=10) AND compID='$user_id' ORDER BY userID DESC LIMIT 10");
                                                    $ag->execute();
                                                    while($r=$ag->fetch()){
                                                        $rl=$r['role'];
                                                        
                                                       $gp=  dbConnect()->prepare("SELECT name FROM groups WHERE id='$rl'");
                                                       $gp->execute();
                                                       $ro=$gp->fetch();
                                                       $rol=$ro['name'];
                                                ?> 
                                                    <tr>
                                                        <td>
                                                            <strong><?php echo $r['fname']." ".$r['lname']; ?></strong> 
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $rol;?></strong> 
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $r['email'];?></strong> 
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
            
            
            
        </div>
    </div>
   <?php include 'foot2.php'; ?>