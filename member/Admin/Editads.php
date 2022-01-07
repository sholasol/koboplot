<?php 
include 'head2.php'; 
$id=$_GET['id'];
include_once '../classes/connect.php';

$us= dbConnect()->prepare("SELECT * FROM ads WHERE id='$id'");
$us->execute();
$ru=$us->fetch();
//$num=$ru['num'];
$pid=$ru['proID'];
$du=$ru['ads_duration'];

$us2= dbConnect()->prepare("SELECT count(id) AS num FROM ads WHERE proID='$pid'");
$us2->execute();
$ru2=$us2->fetch();
$num=$ru2['num'];

$pg= dbConnect()->prepare("SELECT * FROM program WHERE proID='$pid'");
$pg->execute();
$b=$pg->fetch();
$pg=$b['program'];

if(isset($_POST['submit'])){
    
    if(empty($_POST['name'])){
        $e="Please fill in programme name!"; 
        echo  " <script>alert('$e'); </script>";
	}
        
    elseif(empty($_POST['duration'])){
        $e="Please fill in duration for the Ads!"; 
        echo  " <script>alert('$e'); </script>";
	}
      
    elseif(empty($_POST['location'])){
        $e="Please select Ads Setion/Location!"; 
        echo  " <script>alert('$e'); </script>";
	}
       
    else{
        
        $name=check_input($_POST['name']);
        $dur = check_input($_POST["duration"]);
        $loc = check_input($_POST["location"]);
        $joined=date('Y-m-d');
        $desc=check_input($_POST['desc']);
        
        
        $que= dbConnect()->prepare("SELECT location, used FROM ads WHERE proID=:id");
        $que->bindParam(':id', $id);
        $que->execute();
        $row=$que->fetch();
        
        //$dr=$row['used'];
        //$use= $dr + $dur;
        
        
        $ins= dbConnect()->prepare("UPDATE ads SET compID=:comp, proID=:pro, program=:name, description=:desc, ads_duration=:duration, used=:use, location=:loc, modifiedby =:createdby, lastmodified =:created WHERE id=:id");
            $ins->bindParam(':comp', $agency);
            $ins->bindParam(':pro', $id);
            $ins->bindParam(':name', $name);
            $ins->bindParam(':desc', $desc);
            $ins->bindParam(':duration', $dur);
            $ins->bindParam(':loc', $loc);
            $ins->bindParam(':createdby', $uid);
            $ins->bindParam(':created', $joined);
            $ins->bindParam(':use', $use);
            $ins->bindParam(':id', $id);
            
            if($ins->execute()){
                
                    $e="Adspot has been successfully Updated"; 
                    echo  " <script>alert('$e');window.location='../manageA' </script>";
                }else{
                    $e="Unable to process agency registration"; 
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
                                            <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="home">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Edit Adspot</span>
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
                                                    <img src="../../img/notification/5.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="user-profile-content">
                                                    <h2>Adspot</h2>
                                                    <p class="profile-founder">Available <strong>Ads Spot</strong>
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
                                                <h5>All Adspot</h5>
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
                                        <h1>Edit Adspot</h1>
                                        <div class="sparkline11-outline-icon">
                                            <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline11-graph">
                                    <div class="input-knob-dial-wrap">
                                        <form method="post" enctype="multipart/form-data">
                                        <div class="row" style="margin-bottom: 2px;">
                                            <div class="col-lg-12">
                                                 <div class="date-picker-inner">
                                                    <div class="form-group data-custon-pick" id="data_1">
                                                        <label>Programme Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                            <input type="text" name="name" class="form-control" value="<?php echo $b['program']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 2px;">
                                            <div class="col-lg-6">
                                                <div class="date-picker-inner">
                                                    <div class="form-group data-custon-pick" id="data_1">
                                                        <label>Duration</label>
                                                        <select class="select2_demo_3 form-control" name="duration">
                                                            <option value="<?php echo $du; ?>"><?php echo $du." Minute"; ?></option>
                                                            <?php
                                                                for($x=1; $x < 61; $x++){
                                                                    echo"<option value='$x'> $x minutes</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="chosen-select-single mg-b-20">
                                                    <label>Ads Location</label>
                                                    <select class="select2_demo_3 form-control" name="location">
                                                        <option><?php echo $ru['location']; ?></option>
                                                        <option>Beginning</option>
                                                        <option>Middle</option>
                                                        <option>End</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="row" style="margin-bottom: 2px;">
                                            
                                            <div class="col-lg-12">
                                                <label>Description</label>
                                                <div class="input-group date">
                                                      <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                                                      <textarea  name="desc" class="form-control"><?php echo $ru['description']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12"><br>
                                                <button type="submit" name="submit" class="btn btn-info"> Save Changes</button>
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
                                        <h1>Recent Adspot</h1>
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
                                                            Program
                                                        </th>
                                                        <th>
                                                            Duration
                                                        </th>
                                                        <th>
                                                            Ads Section
                                                        </th>
                                                    </tr>
                                            </thead>
                                            <tbody>  
                                                <?php 
                                                    $ag= dbConnect()->prepare("SELECT * FROM ads WHERE compID='$agency' ORDER BY id DESC LIMIT 10");
                                                    $ag->execute();
                                                    while($r=$ag->fetch()){
                                                ?> 
                                                    <tr>
                                                        <td>
                                                            <strong><?php echo $r['program']; ?></strong> 
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $r['ads_duration']." Minute";?></strong> 
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $r['location'];?></strong> 
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