<?php 
include 'head.php';
$pID = $_GET['id'];
$q=$con->query("SELECT * FROM project WHERE pID='$pID'");
$no=$q->num_rows;
$r=$q->fetch_array();
$p_image=$r['image'];
$pname=$r['name'];
$location=$r['location'];
$price= $r['price'];
$price2= number_format($r['price']);
$detail=$r['detail'];
$date=$r['start'];
?>


<div class="section"><br><br><br>
            <!-- Form with icon prefixes -->
            <div class="row">
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <h4 class="header2">Invest in this Project</h4>
                  <div class="row">
                      <form class="col s12"  method="post" action="">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-store  prefix"></i>
                          <input id="name3" type="text" name="name" value="<?php echo $pname ?>" required>
                          <label for="first_name">Project Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <i class="mdi-editor-attach-money  prefix"></i>
                          <input id="email3" type="number" name="price" value="<?php echo $price ?>">
                          <label for="email">Project Cost</label>
                        </div>
                         <div class="input-field col s6">
                          <i class="mdi-editor-attach-money  prefix"></i>
                          <input id="email3" type="number" name="amt" placeholder="">
                          <label for="email">Amount to Invest</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-pin-drop  prefix"></i>
                          <input id="password3" type="text" name="location" value="<?php echo $location ?>" required>
                          <label for="password" >Location</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <textarea id="message3" class="materialize-textarea" name="detail" ><?php echo $detail ?></textarea>
                          <label for="message">Project Detail</label>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="proj">Proceed
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
              <!-- Form with validation -->
              <div class="col s12 m12 l6">
                <div class="card-panel">
                 <?php 
                 if($no > 0){
                  echo"<h4 class='header2'>$pname</h4>";
                    echo" <div class='row'>
                    <div id='bordered-table'>
                        <div class='row'>
                          <div class='col s12 m12 l3'>
                              <p>
                                <img src='../project/$p_image' width='600px' height='450px'>
                              </p>
                          </div>
                        </div>
                      </div>
                      <p>Project Cost: $price2</p>
                      <p>Description: $detail</p>
                    </div>";
                  }else{
                      echo"<h4 class='header2'>Project Detail</h4>";
                  }
                ?>
                </div>
              </div>
            </div>
          </div>
<?php 

include 'foot.php';

if(isset($_POST['proj'])){
    
     $pro = check_input($_POST["name"]);
     $price = check_input($_POST["price"]);
     $inv = check_input($_POST["amt"]);
     //$loc = check_input($_POST["location"]);
     //$detail = check_input($_POST["detail"]);
     //$date = check_input($_POST["date"]);
     
     $que=$con->query("INSERT INTO subscription SET userID='$uid', pID='$pID', amount='$inv', created=now() ");
     
     //Investment information
     $in=$con->query("SELECT amount_invested, no_investment FROM customer WHERE userID='$uid'");
     $ro=$in->fetch_array();
     $amt = $ro['amount_invested'];
     $noInv = $ro['no_investment'];
     $tot_inv = $amt + $inv;
     $no_inv = $noInv + 1;
     
     $query=$con->query("UPDATE customer SET amount_invested='$tot_inv', no_investment ='$no_inv' WHERE userID='$uid' ");

     if($que && $query){
         echo  " <script>alert('Your investment in $pro is successful'); window.location='sub.php'</script>";
         //echo  " <script>alert('Project has been successfully created'); window.location='index.php?summary'</script>";
    }else{
        echo  " <script>alert('An error occur. Try again'); window.location='investment.php?&id=$pID'</script>";
    }
     
}

/*
function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

*/

?>
