<?php
include 'classes/connect.php';


if(isset($_POST['submit'])){
    $em=check_input($_POST['email']);
    $pass = check_input($_POST["pass"]);
    $cpass = check_input($_POST["cpass"]);
    
    if(empty($_POST['fname'])){
        $e="Please fill in first name!"; 
        echo  " <script>alert('$e');  window.location='login'</script>";
	}
        
    elseif(empty($_POST['lname'])){
        $e="Please fill in last name!"; 
        echo  " <script>alert('$e'); window.location='login'</script>";
	}
      
    elseif(empty($_POST['phone'])){
        $e="Please fill in the phone number!"; 
        echo  " <script>alert('$e'); window.location='login'</script>";
	}
    
    elseif(empty($_POST['pass'])){
        $e="Please fill in Password!"; 
        echo  " <script>alert('$e'); window.location='login'</script>";
	}    
     
    elseif(empty($_POST['cpass'])){
        $e="Please confirm Password!"; 
        echo  " <script>alert('$e');window.location='login' </script>";
	}     
        
    elseif(empty($_POST['email'])){
	 $e="Please enter an email!"; 
         echo  " <script>alert('$e'); window.location='login'</script>"; 
    }
    
    
    elseif ((!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $em))){
          $e="Invalid email entered!"; 
           echo  " <script>alert('$e'); window.location='login'</script>";  
       }
       
    
    if($pass != $cpass){
	 $e="Password mismatch!"; 
         echo  " <script>alert('$e'); window.location='login'</script>";  
	}
    else{
        $email = check_input($_POST["email"]);
        $pwd = check_input($_POST["pass"]);
        $fname=check_input($_POST['fname']);
        $lname=check_input($_POST['lname']);
        $phone=check_input($_POST['phone']);
        //$add=check_input($_POST['address']);
        $role= "Client";
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
            
            $ins= dbConnect()->prepare("INSERT INTO users SET name=:fname, lname=:lname, email=:email, password=:pass, phone=:phone, created=:joined, role=:role");
            $ins->bindParam(':email', $email);
            $ins->bindParam(':fname', $fname);
            $ins->bindParam(':lname', $lname);
            $ins->bindParam(':pass', $hash);
            $ins->bindParam(':phone', $phone);
            $ins->bindParam(':joined', $joined);
            $ins->bindParam(':role', $role);
            //$ins->bindParam(':createdby', $uid);
            //$ins->bindParam(':address', $add);
            
            if($ins->execute()){
                $e="User has been successfully created"; 
                echo  " <script>alert('$e'); window.location='login'</script>";
            }
            else{
                $e="Processing error"; 
                echo  " <script>alert('$e'); window.location='login'</script>";
            }
        }else{
            $e="This email already exists"; 
            echo  " <script>alert('$e'); window.location='login'</script>";
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
