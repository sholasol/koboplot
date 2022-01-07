<?php
include 'inc/d.php';

if(isset($_POST['submit'])){
    if(empty($_POST['location']) && empty($_POST['cat'])){
        $e="Please select a location or type of property you are searching for!"; 
        echo  " <script>alert('$e');window.location='index'</script>";
	}
        else{
    
        $loca = check_input($_POST["location"]);
        $typ = check_input($_POST["cat"]); 
        
        echo  " <script> window.location='listing/$loca/$typ' </script>";
        }
        
        
}
function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
