<?php 
include 'head.php';

$us= dbConnect()->prepare("SELECT count(pID) AS num FROM project WHERE koboplot > 0");
$us->execute();
$ru=$us->fetch();
$num=$ru['num'];

if(isset($_POST['submit'])){
    
    if(empty($_POST['name'])){
     echo  " <script>alert('Please enter project name);</script>";   
    }
    elseif(empty($_POST['price'])){
     echo  " <script>alert('Please enter project cost);</script>";   
    }
    
    elseif(empty($_POST['location'])){
     echo  " <script>alert('Please enter project location);</script>";   
    }
    elseif(empty($_POST['markup'])){
     echo  " <script>alert('Please enter mark value or percentage markup value);</script>";   
    }
    elseif(empty($_POST['area'])){
     echo  " <script>alert('Please enter project area);</script>";   
    }
    elseif(empty($_POST['cost'])){
     echo  " <script>alert('Please enter cost of each koboplot);</script>";   
    }
    
   else{
        
    
    $pro = check_input($_POST["name"]);
     $price = check_input($_POST["price"]);
     $loc = check_input($_POST["location"]);
     $addr = check_input($_POST["address"]);
     $kplot = check_input($_POST["cost"]);
     $markup = check_input($_POST["markup"]);
     $percent = check_input($_POST["percent"]);
     $area = check_input($_POST["area"]);
     $created= date('Y-m-d');
     $status ="Opened";
     
    //Support Document
        $imgFile = $_FILES['image']['name'];
        $tmp_dir = $_FILES['image']['tmp_name'];
        $imgSize = $_FILES['image']['size'];
        
        //Processing the image
        {
        $upload_dir = '../upload/'; // upload directory

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
        
        $que = dbConnect()->prepare("INSERT INTO project SET name=:name, price=:price, markup=:markup, percent_markup=:percent, koboplot=:kobo, area=:area, address=:add, location=:loc, image=:image , status=:status, created=:created"); 
        $que->bindParam(':name', $pro);
        $que->bindParam(':area', $area);
        $que->bindParam(':add', $addr);
        $que->bindParam(':price', $price);
        $que->bindParam(':markup', $markup);
        $que->bindParam(':percent', $percent);
        $que->bindParam(':kobo', $kplot);
        $que->bindParam(':loc', $loc);
        $que->bindParam(':image', $proImage);
        $que->bindParam(':created', $created);
        $que->bindParam(':status', $status);
        if($que->execute()){
            $e= $pro. " Has been Successfully created.!"; 
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
                                            <li><span class="bread-blod">Projects</span>
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
                                            <li><span class="bread-blod">Kobo Plots</span>
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
                                                    <h2>Kobo Plots</h2>
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
                                                <h5>Koboplots</h5>
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
                                        <h1>Kobo Plots</h1>
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
                                                    <th data-field="sn">S/N</th>
                                                    <th data-field="project" >Project</th>
                                                    <th data-field="cost" >Cost (=N=)</th>
                                                    <th data-field="markup" >Mark Up (=N=)</th>
                                                    <th data-field="area" >Area (SqM)</th>
                                                    <th data-field="koboplot">Kobo Plot</th>
                                                    <th data-field="status" >Status</th>
                                                    <th data-field="investors">Investors</th>
                                                    <th data-field="date" >Date</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $p= dbConnect()->prepare("SELECT * FROM project WHERE koboplot >0 ORDER BY pID DESC");
                                                $p->execute();
                                                $counter = 0;
                                                while($r=$p->fetch()){
                                                    $id= $r['pID'];
                                                    $price = $r['price'];
                                                    $status = $r['status'];

                                                    $cus= dbConnect()->prepare("SELECT count(userID) AS count, sum(amount) AS sum FROM subscription WHERE pID='$id'");
                                                    $cus->execute();
                                                    $ro=$cus->fetch();
                                                    $sum=$ro['sum'];
                                                    $count=$ro['count'];
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php  echo ++$counter; ?></td>
                                                    <td><?php  echo $r['name']; ?></td>
                                                    <td><?php echo"=N= "; echo number_format($r['price']); ?></td>
                                                    <td><?php echo"=N= "; echo number_format($r['markup']); ?></td>
                                                    <td><?php  echo $r['area']; ?></td>
                                                    <td class="datatable-ct"><?php echo"=N= "; echo number_format($r['koboplot']); ?><!--<span class="pie">1/6</span>-->
                                                    </td>
                                                    <td><?php  echo $r['status']; ?></td>
                                                    <td><?php  echo number_format($count); ?></td>
                                                    <td><?php  echo $r['created']; ?></td>
                                                    <td>
                                                        <div class="col-lg-12">
                                                            <select class="form-control pull-right b-none" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                                                <option>Action</option>
                                                                <option value="pview/<?php // echo $p; ?>">View</option>
                                                                <option value="Eprog/<?php // echo $p; ?>">Add Attraction</option>
                                                                <option value="adspot/<?php // echo $p; ?>">Deactivate</option>
                                                                <option value="adspot/<?php // echo $p; ?>">Open Window</option>
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
                    <h4 class="modal-title">Create Project</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                
                <div class="modal-body">
                    <div style="float: left !important;">
                           <div class="row" style="margin-bottom: 20px;">
                                <div class="col-lg-12">
                                    <div class="input-group date">
                                          <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                          <input type="text" name="name" class="form-control" placeholder="project Name" required>
                                    </div>
                                </div>
                           </div>
                           <div class="row" style="margin-bottom: 20px;">
                                <div class="col-lg-12">
                                    <div class="input-group date">
                                          <span class="input-group-addon">=N=</span>
                                          <input type="number" name="price" id="price" class="form-control" placeholder="Project Cost" required>
                                    </div>
                                </div>
                           </div>
                           <div class="row" style="margin-bottom: 20px;">
                               <div class="col-lg-6">
                                    <div class="input-group date">
                                        <input type="number" name="markup" id="markup" class="form-control" onkeyup="calculatePerc()" placeholder="Cost Markup" required>
                                          <span class="input-group-addon">=N=</span>
                                    </div>
                                </div>
                               <div class="col-lg-6">
                                    <div class="input-group date">
                                          <input type="number" name="percent" class="form-control" onkeyup="calculatePrice()" placeholder="Percentage Markup" required>
                                          <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 20px;">
                               <div class="col-lg-6">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-area-chart"></i></span>
                                        <input type="number" name="area" id="area" onkeyup="calcKoboplot()" class="form-control" placeholder="Total Area" required>
                                    </div>
                                </div>
                               <div class="col-lg-6">
                                    <div class="input-group date">
                                        <span class="input-group-addon">=N=</span>
                                        <input type="number" name="cost" id="cost" class="form-control" step="0.1" placeholder="Price of Kobo Plot" required>
                                    </div>
                                </div>
                            </div>
                        <div class="row" style="margin-bottom: 20px;">
                                <div class="col-lg-12">
                                    <div class="input-group date">
                                          <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                          <input type="text" name="location" class="form-control" placeholder="location" required>
                                    </div>
                                </div>
                            </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-lg-12">
                                    <div class="input-group date">
                                          <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
                                          <textarea name="address" class="form-control" placeholder="Address" required></textarea>
                                    </div>
                                </div>
                        </div>
                       <div class="row" style="margin-bottom: 20px;">
                                <div class="col-lg-12">
                                    <div class="input-group date">
                                          <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                          <input type="file" name="image" class="form-control"  required>
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default">Cancel</button>
                    <button type="submit" name="submit" class="btn cl">Save Project</button>
                </div>
               
            </div>
            <form>
        </div>
    </div>
   <?php include 'foot.php'; ?>