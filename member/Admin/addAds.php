<?php 
include 'head2.php'; 
include_once '../classes/connect.php';

$us= dbConnect()->prepare("SELECT count(tid) AS num FROM transact WHERE compID='$agency'");
$us->execute();
$ru=$us->fetch();
$num=$ru['num'];

$uss = $_GET['id'];

if(isset($_POST['submit'])){
        
    if(empty($_POST['duration'])){
        $e="Please specify file length!"; 
        echo  " <script>alert('$e'); </script>";
	}
      
    else{
        
       // $prd=check_input($_POST['name']);
        $dur = check_input($_POST["duration"]);
        //$loc = check_input($_POST["location"]);
        $joined=date('Y-m-d');
        $desc=check_input($_POST['desc']);
        
        //Transaction Code
        function random_num($size) {
            $length = $size;
            $key = '';
            $keys = range(0, 5);

                for ($i = 0; $i < $length; $i++) {
                        $key .= $keys[array_rand($keys)];
                }
                return  $key;
        }
        $code= random_num(5);
        
        
        /*
        $pd= dbConnect()->prepare("SELECT *FROM program WHERE proID='$prd'");
        $pd->execute();
        $d=$pd->fetch();
        
        $id = $d['proID'];
        $name = $d['program'];
        
        $que= dbConnect()->prepare("SELECT location, used FROM ads WHERE proID=:id");
        $que->bindParam(':id', $id);
        $que->execute();
        $row=$que->fetch();
        
        $dr=$row['used'];
        $use= $dr + $dur;
        */
        
        //Approval Document
        $imgFile = $_FILES['approval']['name'];
        $tmp_dir = $_FILES['approval']['tmp_name'];
        $imgSize = $_FILES['approval']['size'];
        
        //Processing the image
        {
        $upload_dir = '../support_doc/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'doc', 'docx', 'gif'); // valid extensions

        // rename uploading image
        $proImage = rand(1000,1000000).".".$imgExt;

        // allow valid image file formats
        if(in_array($imgExt, $valid_extensions)){			
                // Check file size '5MB'
                if($imgSize < 5000000){
                        move_uploaded_file($tmp_dir,$upload_dir.$proImage);
                }
                
        }
        
        }
        
        
        
        
        
        
        
        
        //$ins= dbConnect()->prepare("INSERT INTO transaction SET code=:code, compID=:comp, proID=:pro, userID=:usrs, program=:name, file=:file, description=:desc, ads_duration=:duration,  createdby=:createdby, created=:created");
        $ins= dbConnect()->prepare("INSERT INTO buyads SET code=:code, compID=:comp, userID=:usrs, approval=:file, remark=:desc,  createdby=:createdby, created=:created");
            $ins->bindParam(':comp', $agency);
            $ins->bindParam(':usrs', $uss);
            $ins->bindParam(':desc', $desc);
            //$ins->bindParam(':duration', $dur);
            //$ins->bindParam(':pro', $id);
            //$ins->bindParam(':name', $name);
            $ins->bindParam(':createdby', $agency);
            $ins->bindParam(':created', $joined);
            $ins->bindParam(':code', $code);
            $ins->bindParam(':file', $proImage);
            if($ins->execute()){
                
                
                        if(is_array($_FILES)){
                        
                            foreach($_FILES['doc']['name'] as $nm => $value)  

                              {
                               $file_name=explode(".", $_FILES['doc']['name'][$nm]);

                               $allowed_ext=array("jpg", "jpeg", "png", "gif", "doc", "docx", "mp3", "mp4", "mp4","avi","3gp","mov","mpeg", "pdf");

                                  if(in_array($file_name[1], $allowed_ext)){
                                      $new_name=md5(rand()). '.' .$file_name[1];
                                      $sourcePath = $_FILES['doc']['tmp_name'][$nm];

                                      $targetPath="../ads_file/".$new_name;

                                      if(move_uploaded_file($sourcePath, $targetPath)){
                                          
                                            $fl= dbConnect()->prepare("INSERT INTO afile SET code=:cod, compID=:cmp, userID=:usr, doc=:doc,length =:len, created=:crt");
                                            $fl->bindParam(':cmp', $agency);
                                            $fl->bindParam(':usr', $uss);
                                            $fl->bindParam(':doc', $targetPath);
                                            $fl->bindParam(':crt', $joined);
                                            $fl->bindParam(':cod', $code);
                                            $fl->bindParam(':len', $dur);
                                          if($fl->execute()){
                                              
                                              $e="Adspot has been sent for approval"; 
                                               echo  " <script>alert('$e'); window.location='../clientAds2'</script>";   
                                          }else{
                                              $e="Unable to process supporting document!"; 
                                               echo  " <script>alert('$e'); window.location='../clientAds2'</script>";
                                          }
                                      }

                                  }
                              }
                        
                        
                            } 
                
                
                
                    //$e="Adspot has been successfully added"; 
                    //echo  " <script>alert('$e');window.location='manageA' </script>";
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
                                            <li><span class="bread-blod">Buy Adspot </span>
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
                                                    <p class="profile-founder">Founder of <strong>Uttara It Park</strong>
                                                    </p>
                                                    <p class="profile-des">It is a long established fact that a reader will be distracted of by the readable content of a page when looking at its layout.The point of using Lorem Ipsum.</p>
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
                                        <h1>Create Adspot</h1>
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
                                            <div class="col-lg-6">
                                                <div class="date-picker-inner">
                                                    <div class="form-group data-custon-pick" id="data_1">
                                                        <label>Upload Ads File</label>
                                                        <input type="file" class="form-control" name="doc[]" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="date-picker-inner">
                                                    <div class="form-group data-custon-pick" id="data_1">
                                                        <label>File Length(sec)</label>
                                                        <select class="select2_demo_3 form-control" name="duration">
                                                            <option>Select</option>
                                                            <?php
                                                                for($x=1; $x < 300; $x++){
                                                                    echo"<option value='$x'> $x Seconds</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="row wrapper" style="margin-bottom: 2px;">
                                            <div class="col-lg-12">
                                                <div class="chosen-select-single mg-b-20">
                                                    <label>Approval document</label>
                                                    <input type="file" name="approval" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 2px;">
                                        <!-- <a class="add_fields"><i class="fa fa-plus-circle"></i> Add New Aproval</a>-->
                                            <div class="col-lg-12">
                                                <label>Comment</label>
                                                <div class="input-group date">
                                                      <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                                                      <textarea  name="desc" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12"><br>
                                                <button type="submit" name="submit" class="btn btn-info">Send for Verification</button>
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
                                                    $ag= dbConnect()->prepare("SELECT * FROM transaction WHERE compID='$agency' ORDER BY id DESC LIMIT 10");
                                                    $ag->execute();
                                                    while($r=$ag->fetch()){
                                                ?> 
                                                    <tr>
                                                        <td>
                                                            <strong><?php echo $r['program']; ?></strong> 
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $r['ads_duration']." Sec";?></strong> 
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $r['ads_section'];?></strong> 
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