<?php include 'head.php'; ?>
<?php
$id= $_GET['id'];
$p=$con->query("SELECT * FROM users WHERE userID='$id'");
$ro=$p->fetch_array();

if(isset($_POST['action'])){
    if(empty($_POST['fname'])){
     echo  " <script>alert('Please input the first name);</script>";   
    }
    elseif(empty($_POST['lname'])){
     echo  " <script>alert('Please input the last name);</script>";   
    }
    elseif(empty($_POST['email'])){
     echo  " <script>alert('Please input an email);</script>";   
    }
    else{
     $fn = check_input($_POST["fname"]);
     $ln = check_input($_POST["lname"]);
     $em = check_input($_POST["email"]);
     
     $query=$con->query("UPDATE users SET name='$fn', lname='$ln', email= '$em' WHERE userID='$id' ");

     if($query){
         echo  " <script>alert('The user has been successfully updated'); window.location='mUser.php'</script>";
         //echo  " <script>alert('Project has been successfully created'); window.location='index.php?summary'</script>";
    }else{
        echo  " <script>alert('An error occur. Try again'); window.location='eUser.php?id=$id'</script>";
    }
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

<div class="section"><br><br><br>
            <!-- Form with icon prefixes -->
            <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Create User</h4>
                <div class="row">
                    <form class="col s12" method="post">
                    <div class="row">
                      <div class="input-field col s6">
                          <input id="first_name" type="text" name="fname" value="<?php echo $ro['name'] ?>" required />
                        <label for="first_name">First Name</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="last_name" type="text" name="lname" value="<?php echo $ro['lname'] ?>" required>
                        <label for="last_name">Last Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email5" type="email" name="email" value="<?php echo $ro['email'] ?>" required>
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div>
<?php 

include 'foot.php';
?>