<?php
include_once 'connect.php';
session_start();
if(isset($_POST['login'])){
    
   
    $em=$_POST['email'];
    if(empty($_POST['email'])){
	$e="Email is required"; 
        echo  " <script>alert('$e'); window.location='../login'</script>";
    }
    
    elseif ((!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $em))){
        $e="You have entered an invalid email"; 
        echo  " <script>alert('$e'); window.location='../login'</script>"; 
       }
 
    $pwd = check_input($_POST["password"]);
    if(empty($_POST['password'])){
	$e="Your password is required"; 
        echo  " <script>alert('$e'); window.location='../login'</script>"; 
	}
    else{
        $email = check_input($_POST["email"]);
        $pwd = check_input($_POST["password"]);
        
        $que= dbConnect()->prepare("SELECT * FROM users WHERE email=:email");
        $que->bindParam(':email', $email);
        $que->execute();
        if($row=$que->fetch()){
            $role= $row['role'];
            $phash=$row['password'];
            $password = password_verify($pwd, $phash);
            
            if($password){
                $_SESSION["email"] = $row['email']; // setting session
                $_SESSION["id"] = $row['userID'];
                
                
                if($role=='Admin'){
                        echo  " <script>location.href='../member/Admin/home'</script>"; //Admin Homepage
                }
                if($role=='User'){
                    echo  " <script>location.href='../member/User/home'</script>";  // take user to the home page  
                } 
                if($role=='Client'){
                    echo  " <script>location.href='../member/client/home'</script>";  // take user to the home page  
                } 
                
                
            }else{
                $e="Oops..Incorrect user detail"; 
                echo  " <script>alert('$e'); window.location='../login'</script>";
            }
        }
        else{
             $e="This email does not exists"; 
            echo  " <script>alert('$e'); window.location='../login'</script>";
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