<?php 
include 'head.php';
   if(isset($_POST['pws'])){
    
    
    $psw=$_POST['pas']; //User Input Old Password 
    $p=$_POST['pass']; //New pasword
    $p2=$_POST['cpass']; //Confirm new password
    
    if(empty($_POST['pas'])){
        
        $e="Please input the old password!"; 
        echo  " <script>alert('$e');window.location='password.php' </script>";  
    }
    elseif(empty($_POST['pass'])){
        $e="Please input your new password.";
        echo  " <script>alert('$e');window.location='password.php' </script>";   
    }
    elseif(empty($_POST['cpass'])){
        $e="Please input confirm password.";
        echo  " <script>alert('$e');window.location='password.php' </script>";    
    }
    elseif($p !=$p2){
        $e="Password mismatch.";
        echo  " <script>alert('$e');window.location='password.php' </script>";  
    }
    
    else{
     $pas = check_input($_POST["pas"]); //Old Password
     $pss = check_input($_POST["pass"]);
     $pw = check_input($_POST["cpass"]);
     
    $p=$con->query("SELECT password FROM customer WHERE userID='$uid'");
    $ro=$p->fetch_array();
    $phash=$ro['password'];
    $password = password_verify($pas, $phash); 
     
    if($password){
         
     //Password Encryption
    $pas=$pss;
    $options = [
        'cost' => 12,
    ];
    $hash= password_hash($pss, PASSWORD_BCRYPT, $options);
     
     $query=$con->query("UPDATE customer SET  password= '$hash' WHERE userID='$uid' ");

     if($query){
         $e="Your password has been successfully updated. Sign in Again.";
         echo  " <script>alert('$e');window.location='../logout.php' </script>"; 
         //echo  " <script>alert('Your password has been successfully updated. Sign in Again'); window.location='../logout.php'</script>";
    }else{
        $e="An error occur. Try again.";
        echo  " <script>alert('$e');window.location='password.php' </script>"; 
    }
    }
    else{
       $e="Incorrect Old password. Please try again.";
       echo  " <script>alert('$e');window.location='password.php' </script>";  
    }
    } 
     
     
}
    
    
    ?>

