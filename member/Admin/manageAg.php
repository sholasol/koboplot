<?php 
include 'head.php';

$us= dbConnect()->prepare("SELECT count(userID) AS num FROM users WHERE role='Agent'");
$us->execute();
$ru=$us->fetch();
$num=$ru['num'];

if(isset($_POST['submit'])){
    $em=check_input($_POST['email']);
    $pass = check_input($_POST["pass"]);
    $cpass = check_input($_POST["cpass"]);
    
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
    
    elseif(empty($_POST['pass'])){
        $e="Please fill in Password!"; 
        echo  " <script>alert('$e'); </script>";
	}    
     
    elseif(empty($_POST['cpass'])){
        $e="Please confirm Password!"; 
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
       
    
    if($pass != $cpass){
	 $e="Password mismatch!"; 
         echo  " <script>alert('$e'); </script>";  
	}
    else{
        $email = check_input($_POST["email"]);
        $pwd = check_input($_POST["pass"]);
        $fname=check_input($_POST['fname']);
        $lname=check_input($_POST['lname']);
        $phone=check_input($_POST['phone']);
        $add=check_input($_POST['address']);
        $role= "Agent";
        $joined=date('Y-m-d');
        //Corporate Account
        
        $que= dbConnect()->prepare("SELECT count(userID) AS no FROM users WHERE email=:email");
        $que->bindParam(':email', $email);
        $que->execute();
        $row=$que->fetch();
        
        $no=$row['no'];
        if($no < 1){
            //Password Encryption
            $pas=$pwd;
            $options = [
                'cost' => 12,
            ];
            $hash= password_hash($pas, PASSWORD_BCRYPT, $options);
            
            $ins= dbConnect()->prepare("INSERT INTO users SET name=:fname, lname=:lname, email=:email, password=:pass, phone=:phone, created=:joined, role=:role, address=:address, createdby=:createdby");
            $ins->bindParam(':email', $email);
            $ins->bindParam(':fname', $fname);
            $ins->bindParam(':lname', $lname);
            $ins->bindParam(':pass', $hash);
            $ins->bindParam(':phone', $phone);
            $ins->bindParam(':joined', $joined);
            $ins->bindParam(':role', $role);
            $ins->bindParam(':createdby', $uid);
            $ins->bindParam(':address', $add);
            
            if($ins->execute()){
                $e="User has been successfully created"; 
                echo  " <script>alert('$e'); window.location='manageAg'</script>";
            }
            else{
                $e="Processing error"; 
                echo  " <script>alert('$e'); </script>";
            }
        }else{
            $e="This email already exists"; 
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
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Agents</span>
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
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Agents</span>
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
                                                    <h2>Agents</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="user-profile-social-list">
<!--                                            <table class="table small m-b-xs">
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
                                            </table>-->
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="analytics-sparkle-line user-profile-sparkline">
                                            <div class="analytics-content">
                                                <h5>Agents</h5>
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
            
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area" style="margin-top: 10px !important;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Agents</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <a data-toggle='modal' data-target='#PrimaryModalhdbgc2'><i class="fa fa-plus-circle btn cl"> Create New</i></a>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" ></th>
                                                    <th data-field="state" >#</th>
                                                    <th data-field="sn">User Name</th>
                                                    <th data-field="project" >email</th>
                                                    <th data-field="cost" >Phone</th>
                                                    <th data-field="markup" >Address</th>
                                                    <th data-field="date" >Created</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $p= dbConnect()->prepare("SELECT * FROM users WHERE role='Agent' ORDER BY userID DESC");
                                                $p->execute();
                                                $counter = 0;
                                                while($r=$p->fetch()){
                                                    $id= $r['userID'];
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php  echo ++$counter; ?></td>
                                                    <td><?php  echo $r['name']." ".$r['lname']; ?></td>
                                                    <td><?php  echo $r['email']; ?></td>
                                                    <td><?php  echo $r['phone']; ?></td>
                                                    <td><?php  echo $r['address']; ?></td>
                                                    <td><label class="label label-info"><?php  echo $r['created']; ?></label></td>
                                                    <td>
                                                        <div class="col-lg-12">
                                                            <select class="form-control pull-right b-none" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                                                <option>Action</option>
                                                                <option value="#view/<?php // echo $p; ?>">View</option>
                                                                <option value="delete/<?php // echo $p; ?>">Delete User</option>
                                                            </select>
                                                          </div>
                                                    </td>
                                                </tr>
                                                <?php  } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data table area End-->
        </div>
    </div>
    
    <div id="PrimaryModalhdbgc2" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <form method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header header-color-modal bg-color-1">
                    <h4 class="modal-title">Create Agent</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                
                <div class="modal-body">
                    <div style="float: left !important;">
                           <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                <div class="input-group date">
                                                      <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                                                      <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                           </div>
                               <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-lg-12">
                                        <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                                              <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-lg-12">
                                        <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                              <input type="email" name="email" class="form-control" placeholder="Email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="format: username@email.xx or username@email.xxx" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-lg-12">
                                        <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                              <input type="password" name="pass" class="form-control" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-lg-12">
                                        <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                              <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                 </div>
                                <div class="row" style="margin-bottom: 10px;">
                                   <div class="col-lg-12">
                                       <div class="input-group date">
                                             <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                             <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                       </div>
                                   </div>
                               </div>
                               <div class="row" style="margin-bottom: 10px;">
                                   <div class="col-lg-12">
                                       <div class="input-group date">
                                             <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                             <textarea name="address" class="form-control" placeholder="Address"></textarea>
                                       </div>
                                   </div>
                               </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default">Cancel</button>
                    <button type="submit" name="submit" class="btn cl">Save Agent</button>
                </div>
               
            </div>
            <form>
        </div>
    </div>
   <?php include 'foot.php'; ?>