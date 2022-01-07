<?php include 'head.php'; ?>
<?php

if(isset($_POST['proj'])){
     
    if(empty($_POST['image'])){
     echo  " <script>alert('Please select an image);</script>";   
    }
     
     $pro = check_input($_POST["name"]);
     $price = check_input($_POST["price"]);
     $loc = check_input($_POST["location"]);
     $detail = check_input($_POST["detail"]);
     $date = check_input($_POST["date"]);
     
    $imgFile = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];
    
    {
        $upload_dir = '../project/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

        // rename uploading image
        $proImage = rand(1000,1000000).".".$imgExt;

        // allow valid image file formats
        if(in_array($imgExt, $valid_extensions)){			
                // Check file size '5MB'
                if($imgSize < 5000000){
                        move_uploaded_file($tmp_dir,$upload_dir.$proImage);
                }
                else{
                    echo  " <script>alert('Sorry, your file is too large.');</script>";
                }
        }
        else{

              echo  " <script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";		
        }
        }
     
     $query=$con->query("INSERT INTO project SET name='$pro', price='$price', location= '$loc', start ='$date', detail='$detail' , image='$proImage' , created=now()");

     if($query){
         echo  " <script>alert('Project has been successfully created'); window.location='index.php?createP&img=$proImage'</script>";
         //echo  " <script>alert('Project has been successfully created'); window.location='index.php?summary'</script>";
    }else{
        echo  " <script>alert('An error occur. Try again');</script>";
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
$img = '';
$no=0;
if(isset($_GET['img'])){

  $img = $_GET['img'];
  $q=$con->query("SELECT * FROM project WHERE image='$img'");
  $no=$q->num_rows;
  $r=$q->fetch_array();
  $p_image=$r['image'];
  $pname=$r['name'];
  $price= number_format($r['price']);
  $detail=$r['detail'];
}
?>

<div class="section"><br><br><br>
            <!-- Form with icon prefixes -->
            <div class="row">
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <h4 class="header2">Create Project</h4>
                  <div class="row">
                      <form class="col s12" enctype="multipart/form-data" method="post" action="">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-store  prefix"></i>
                          <input id="name3" type="text" name="name" required>
                          <label for="first_name">Project Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-editor-attach-money  prefix"></i>
                          <input id="email3" type="number" name="price">
                          <label for="email">Price</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-maps-pin-drop  prefix"></i>
                          <input id="password3" type="text" name="location" required>
                          <label for="password" >Location</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-event   prefix"></i>
                          <input id="password3" type="date" name="date">
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <textarea id="message3" class="materialize-textarea" name="detail"></textarea>
                          <label for="message">Project Detail</label>
                        </div>
                        <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-file-cloud-upload   prefix"></i>
                          <input id="password3" type="file" name="image">
                        </div>
                      </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="proj">Save
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
              <!-- Form with validation -->
              <div class="col s12 m12 l6">
                <div class="card-panel">
                 <?php 
                 if($no > 0){
                  echo"<h4 class='header2'>$pname</h4>";
                    echo" <div class='row'>
                    <div id='bordered-table'>
                        <div class='row'>
                          <div class='col s12 m12 l3'>
                              <p>
                                <img src='../project/$p_image' width='600px' height='450px'>
                              </p>
                          </div>
                        </div>
                      </div>
                      <p>Project Cost: $price</p>
                      <p>Description: $detail</p>
                    </div>";
                  }else{
                      echo"<h4 class='header2'>Project Detail</h4>";
                  }
                ?>
                </div>
              </div>
            </div>
          </div>
<?php 

include 'foot.php';
?>