<?php 
include 'form_head.php'; 

$id=$_GET['id'];

$kp=  dbConnect()->prepare("SELECT * FROM project WHERE pID='$id'");
$kp->execute();
$r=$kp->fetch();
$nm=$r['name'];
$plot=$r['koboplot'];
$unit=$r['kobounit'];
if($plot > 0){
    $price= $plot;
}elseif($unit > 0){
    $price= $unit;
}

if(isset($_POST['submit'])){
    if(empty($_POST['count'])){
        $e="Fill in number of units"; 
        echo  " <script>alert('$e');</script>";
    }
    elseif(empty ($_POST['total'])){
        $e="Fill in total cost"; 
        echo  " <script>alert('$e');</script>";
    }else{
        $count = check_input($_POST["count"]);
        $total = check_input($_POST["total"]);
        $dt= date('Y-m-d');
        if($plot > 0){
            $kplot= $count;
        }elseif($unit > 0){
            $kunit= $count;
        }
        
        $que = dbConnect()->prepare("INSERT INTO subscription SET userID=:id, pID=:pid, amount=:amt, kobounit=:unit, koboplot=:kobo,  created=:created"); 
        $que->bindParam(':id', $uid);
        $que->bindParam(':pid', $id);
        $que->bindParam(':amt', $total);
        $que->bindParam(':kobo', $kplot);
        $que->bindParam(':unit', $kunit);
        $que->bindParam(':created', $dt);
        if($que->execute()){
            $e= " Successful!"; 
            echo  " <script>alert('$e'); </script>";
        }
        else{
            $e= $pro. " Failed!"; 
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
                                            <li><a href="#">Subscribe</a> </li>
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
                                            <li><span class="bread-blod">Subscribe</span>
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
                                                    <h2>Overview</h2>
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
                                                            <strong>My Investment(s)</strong>
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $sum; ?></strong> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Subscribe Investments</strong> 
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $trn; ?></strong>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="analytics-sparkle-line user-profile-sparkline">
                                            <div class="analytics-content">
                                                <h5>Subscribe</h5>
                                                <h2 class="counter"><?php echo number_format($trn); ?></h2>
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
            
            
            
            
            
            
            <div class="user-prfile-activity-area mg-b-40 mg-t-30">
                <div class="container-fluid">
                    
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline15-list shadow-reset mg-t-30">
                                <div class="sparkline15-hd">
                                    <div class="main-sparkline15-hd">
                                        <h1>Kobo Plot</h1>
                                        <div class="sparkline15-outline-icon">
                                            <span class="sparkline15-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline15-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline15-graph">
                                    <div class="row">
                                      <form method="POST">
                                        <div class="col-lg-8">
                                            <input type="hidden" name="price" id="sum" value="<?php echo $price ?>"/>
                                            <div class="col-lg-4">
                                                <div class="touchspin-inner">
                                                    <label>Product Name</label>
                                                    <input class="form-control" type="text" value="<?php echo $nm ?>" name="name" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="touchspin-inner">
                                                    <label>Count</label>
                                                    <input class="form-control" type="number" onkeyup="calcTotal()" min="0" name="count" id="count" required />
                                                    <!-- <input class="touchspin1" type="number" onkeyup="calcTotal()" min="0" name="count" id="count">-->
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="touchspin-inner">
                                                    <label>Total</label>
                                                    <input class="form-control" type="number" min="0" name="total" id="total">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" class="btn btn-info" name="submit" style="margin-top: 20px !important;"><i class="fa fa-save"></i></button>
                                            </div>
                                        </div>
                                      </form>
                                        <div class="col-lg-4">
                                            <div class="touchspin-inner">
                                                <h3 class="fa fa-shopping-bag"> Cart</h3>
                                                <table class="table small m-b-xs">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                             Item
                                                        </td>
                                                        <td>
                                                            no of units
                                                        </td>
                                                        <td>
                                                           Total
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $in=  dbConnect()->prepare("SELECT * FROM subscription WHERE userID='$uid' AND created=CURDATE() ");
                                                    $in->execute();
                                                    while($rw=$in->fetch()){
                                                        $p=$rw['pID'];
                                                        $k=  dbConnect()->prepare("SELECT * FROM project WHERE pID='$p'");
                                                        $k->execute();
                                                        $ro=$k->fetch();
                                                        $nam=$ro['name'];
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $nam; ?> </td>
                                                        <td> <?php echo $rw['koboplot']." ".$rw['kobounit']; ?></td>
                                                        <td> <?php echo number_format($rw['amount']); ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                                <a href="koboplot" class="btn btn-info">Continue Shopping</a>
                                                <a href="checkout" class="btn btn-info">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
   <?php include 'form_foot.php'; ?>