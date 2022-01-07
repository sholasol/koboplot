<?php
include_once "../db.php";
session_start();

if (isset($_SESSION["id"])){
    $user_id = $_SESSION["id"];
    $userQuery = "SELECT * FROM users WHERE userID = '$user_id'";
    $result = mysqli_query($con, $userQuery);
    $user = mysqli_fetch_assoc($result);
    $name=$user['name'];
    $uid=$user['userID'];
    $email=$user['email'];
    
    //Total Sales
    $qq=$con->query("SELECT sum(amount) AS sum FROM subscription");
    $rr=$qq->fetch_array();
    $sum= number_format($rr['sum']);
    
    //Total Customer
    $qq2=$con->query("SELECT count(userID) AS count FROM customer");
    $rr2=$qq2->fetch_array();
    $cust =$rr2['count'];
    
    //Total Property
    $qq3=$con->query("SELECT count(pID) AS count FROM project");
    $rr3=$qq3->fetch_array();
    $proj =$rr3['count'];
    
}else{
    header('Location:../login.php');
}

if (isset($_GET['home'])){
    include_once "home.php";
}
elseif (isset($_GET['page'])){
    include_once "dashboard.php";
}
elseif (isset($_GET['message'])){
    include_once "message.php";
}
elseif (isset($_GET['profile'])){
    include_once "profile.php";
}
elseif (isset($_GET['create'])){
    include_once "create.php";
}
elseif (isset($_GET['createP'])){
    include_once "createP.php";
}
elseif (isset($_GET['manageP'])){
    include_once "manageP.php";
}
elseif (isset($_GET['manageL'])){
    include_once "manageL.php";
}
elseif (isset($_GET['editP'])){
    include_once "editP.php";
}
elseif (isset($_GET['client'])){
    include_once "client.php";
}
elseif (isset($_GET['feedback'])){
    include_once "feedback.php";
}
elseif (isset($_GET['deleteP'])){
    include_once "deleteP.php";
}




else{
    include_once "home.php";
}






?>