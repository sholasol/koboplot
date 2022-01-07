<?php include 'head.php'; ?>
<?php

if(isset($_POST['action'])){
     $p=$_POST['pass'];
    $p2=$_POST['cpass'];
    
    if(empty($_POST['fname'])){
     $e="Please input the first name.";
     echo  " <script>alert('$e'); </script>";   
    }
    elseif(empty($_POST['lname'])){
     $e="Please input the last name.";
     echo  " <script>alert('$e'); </script>";   
    }
    elseif(empty($_POST['email'])){
     $e="Please input an email.";
     echo  " <script>alert('$e'); </script>";   
    }
    elseif(empty($_POST['pass'])){
     $e="Please input the password.";
     echo  " <script>alert('$e'); </script>";   
    }
    elseif(empty($_POST['cpass'])){
     $e="Please confirm the password.";
     echo  " <script>alert('$e'); </script>";   
    }
    
    elseif($p != $p2){
        $e="Password mismatch";
        echo  " <script>alert('$e'); </script>";
    }
    else{
     $fn = check_input($_POST["fname"]);
     $ln = check_input($_POST["lname"]);
     $em = check_input($_POST["email"]);
     $ps = check_input($_POST["pass"]);
     
     $qe=$con->query("select * from users where email='$em' "); //admin login query
     $num_rows=$qe->num_rows;
     if($num_rows > 0){
            $e="A user with this email already exists. Try again.";
            echo  " <script>alert('$e'); </script>";
     }else{
       //Password Encryption
    $pas=$ps;
    $options = [
        'cost' => 12,
    ];
    $hash= password_hash($pas, PASSWORD_BCRYPT, $options);
     
     $query=$con->query("INSERT INTO users SET name='$fn', lname='$ln', email= '$em', password ='$hash', role='User' ,  created=now()");

     if($query){
         $e="The user has been successfully created.";
         echo  " <script>alert('$e'); window.location='mUser.php'</script>";
         //echo  " <script>alert('Project has been successfully created'); window.location='index.php?summary'</script>";
    }else{
        $e="An error occur. Try again.";
        echo  " <script>alert('$e'); </script>";
    }  
     }
     
    
    } 
     
     
}



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
                          <input id="first_name" type="text" name="fname" required />
                        <label for="first_name">First Name</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="last_name" type="text" name="lname" required>
                        <label for="last_name">Last Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email5" type="email" name="email" required>
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="password6" type="password" name="pass" required>
                        <label for="password">Password</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="password7" type="password" name="cpass" required>
                        <label for="password">Confirm Password</label>
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