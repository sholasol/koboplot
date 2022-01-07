<?php
//include_once "../db.php";
$pID = $_GET['id'];
$q=$con->query("SELECT * FROM project WHERE pID='$pID'");
$r=$q->fetch_array();
$p_image=$r['image'];

unlink("../project/".$p_image);

$qq=$con->query("DELETE FROM project WHERE pID='$pID'");
if($qq){
        $q2=$con->query("DELETE FROM subscription WHERE pID='$pID'");
    echo  " <script>alert('Project has been successfully deleted'); window.location='manageP.php'</script>";
}else{
    echo  " <script>alert('An error occur please try again'); window.location='manageP.php'</script>";
}
?>
