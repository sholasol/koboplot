<?php 
include 'head.php';
    if(isset($_POST['send'])){
        
        if(empty($_POST['to'])){
        $e="Please select recepient!"; 
        echo  " <script>alert('$e'); window.location='message.php' </script>";
	}
        elseif(empty($_POST['subj'])){
        $e="Empty Subject!"; 
        echo  " <script>alert('$e'); window.location='message.php'</script>";
	}
        elseif(empty($_POST['msg'])){
        $e="Message body cannot be blank!"; 
        echo  " <script>alert('$e');window.location='message.php' </script>";
	}
        else{
            $to= check_input($_POST['to']);
            $sbj= check_input($_POST['subj']);
            $mesg= check_input($_POST['msg']);
            
           $q=$con->query("INSERT INTO message SET sender='$uid', message='$mesg', subject='$sbj', receiver='$to', created=now(), status=0"); 
           if($q){
               $e="Your message has been sent";
               echo  " <script>alert('$e'); window.location='message.php' </script>";
           } else{
               $e="Processing error";
               echo  " <script>alert('$e'); window.location='message.php' </script>";
           }
        }
    }
    
    
    ?>

