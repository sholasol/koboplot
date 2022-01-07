<?php
include_once 'db.php';
session_start();
if(isset($_POST['login'])){
    $em=$_POST['email'];
    if(empty($_POST['email'])){
	 header("Location:../index?err=" . urlencode("Please fill in your email!")); 
    }
    
    elseif ((!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $em))){
        header("Location:../index?err=" . urlencode("You have entered invalid email!"));  
       }
 
    $pwd = check_input($_POST["password"]);
    if(empty($_POST['password'])){
	header("Location:../index?err=" . urlencode("Password is required!"));  
	}
    else{
        $email = check_input($_POST["email"]);
        $pwd = check_input($_POST["password"]);
        
        $que= dbConnect()->prepare("SELECT count(userID) AS no, name, lname, email, password, role FROM users WHERE email=:email");
        $que->bindParam(':email', $email);
        $que->execute();
        $row=$que->fetch();
        $no=$row['no'];
        if($no > 0){
            $role= $row['role'];
            $phash=$row['password'];
            $password = password_verify($pwd, $phash);
            
            if($password){
                $_SESSION["email"] = $row['email']; // setting session
                $_SESSION["id"] = $row['userID'];
                
                if($role=='Admin'){
                        echo  " <script>location.href='member/Admin/home'</script>";
                   }
                
                if($role=='User'){
                        echo  " <script>location.href='member/User/home'</script>";
                   }
            }
        }
        else{
             
            
            
            
        $que2= dbConnect()->prepare("SELECT count(userID) AS no, name, lname, email, password FROM customer WHERE email=:emal");
        $que2->bindParam(':emal', $email);
        $que2->execute();
        $rw=$que2->fetch();
        $no2=$rw['no'];
        if($no2 > 0){
                $role2= $rw['role'];
                $phash2=$rw['password'];
                $password2 = password_verify($pwd, $phash2);

                if($password2){
                    $_SESSION["email"] = $rw['email']; // setting session
                    $_SESSION["id"] = $rw['userID'];

                    echo  " <script>window.location='member/client/home' </script>";  // take user to the home page  
                }
            }
            else{
                $e="Incorrect user authentication! Try again"; 
                echo  " <script>alert('$e');window.location='../login' </script>";
            }
            
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