<?php 
include 'head.php';
//include 'stat.php';
?>  

<!-- START CONTENT -->
      <section id="content">

        <!--start container-->
        <div class="container">

          <div id="mail-app" class="section">
            <div class="row">
              <div class="col s12">
                <nav class="blue">
                  <div class="nav-wrapper">
                    <div class="left col s12 m5 l5">
                      <ul>
                        <li><a href="#!" class="email-menu"><i class="mdi-navigation-menu"></i></a>
                        </li>
                        <li><a href="#!" class="email-type">Primary</a>
                        </li>
                        <li class="right"><a href="#!"><i class="mdi-action-search"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="col s12 m7 l7 hide-on-med-and-down">
                      <ul class="right">
                        <li><a class=" modal-trigger" href="#modal1"><i class="mdi-content-send"></i></a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </nav>
              </div>
              <div class="col s12">
                <div id="email-list" class="col s10 m4 l4 card-panel z-depth-1">
                  <ul class="collection">
                      <?php
                      $ms=$con->query("SELECT * FROM message WHERE receiver='$uid' ");
                      $nu=$ms->num_rows;
                      while($row=$ms->fetch_array()){
                          $id=$row['id'];
                          $sender=$row['sender'];
                          $msg=$row['message'];
                          $dt=$row['created'];
                          $sbj=$row['subject'];
                          
                          $snd=$con->query("SELECT * FROM users WHERE userID='$sender'");
                          $ro=$snd->fetch_array();
                          $name1= $ro['name'];
                          
                          $snd2=$con->query("SELECT * FROM customer WHERE userID='$sender'");
                          $rw=$snd2->fetch_array();
                          $name2= $rw['fname']." ".$rw['lname'];
                          $n= substr($name2, 0, 1);
                      ?>
                    <li class="collection-item avatar email-unread">
                      <span class="circle green accent-4"><?php echo $n;?></span>
                      <a href="message.php?g=<?php echo $id; ?>"> <span class="email-title"><?php echo $name1." ".$name2 ?></span></a>
                      <a href="message.php?g=<?php echo $id; ?>"> <p class="truncate grey-text ultra-small"><?php echo $sbj; ?></p></a>
                      <a href="message.php?g=<?php echo $id; ?>" class="secondary-content email-time"><span class="blue-text ultra-small"><?php echo $dt; ?></span></a>
                    </li>
                      <?php } ?>
                    <?php 
                    if($nu < 1){
                        echo "
                            <li class='collection-item avatar email-unread'>
                                <span class='circle yellow accent-4'>0</span>
                                <span class='email-title'>No Message</span>
                                <p class='truncate grey-text ultra-small'>You have no message at this time.</p>
                              </li>
                          " ;
                      }
                    ?>
                  </ul>
                </div>
                <div id="email-details" class="col s12 m7 l7 card-panel">
                  <p class="email-subject truncate">Message Content <span class="email-tag grey lighten-3">inbox</span></p>
                  <hr class="grey-text text-lighten-2">
                  <?php
                    if(isset($_GET['g'])){
                        $mgs=$_GET['g'];
                        
                        $mg=$con->query("SELECT * FROM message WHERE id ='$mgs'");
                        $n=$mg->num_rows;
                        $r=$mg->fetch_array();
                        
                        $ix=$r['id'];
                        $sender=$r['sender'];
                        $msg2=$r['message'];
                        $dt2=$r['created'];

                        $snd=$con->query("SELECT * FROM users WHERE userID='$sender'");
                        $ro=$snd->fetch_array();
                        $name3= $ro['name'];

                        $snd2=$con->query("SELECT * FROM customer WHERE userID='$sender'");
                        $rw=$snd2->fetch_array();
                        $name4= $rw['fname']." ".$rw['lname'];
                    
                        echo "<div class='email-content-wrap'>
                          <div class='row'>
                            <div class='col s10 m10 l10'>";
                              if($n > 0){
                                 echo "<ul class='collection'>
                                    <li class='collection-item avatar'>
                                      <img src='../own/images/avatar.jpg' alt='' class='circle'>
                                      <span class='email-title'>$name3.$name4</span>
                                      <p class='truncate grey-text ultra-small'>To me, $email</p>
                                      <p class='grey-text ultra-small'>$dt2</p>
                                    </li>
                                  </ul>

                            </div>

                            <div class='col s2 m2 l2 email-actions'>
                              <a href=''><span><i class='mdi-content-reply'></i></span></a>
                              <a href=''><span><i class='mdi-action-delete'></i></span></a>
                            </div>
                          </div>
                          <div class='email-content'>
                            <p>$msg2.</p>
                          </div>
                        </div>
                        <hr>
                        <div class='email-reply'>
                          <div class='row'>
                            <div class='col s4 m4 14 center-align'>
                              <a href=''><i class='mdi-action-delete'></i></a>
                              <p class='ultra-small'>Delete</p>
                            </div>
                            <div class='col s4 m4 14 center-align'>
                              <a href=''><i class='mdi-content-reply'></i></a>
                              <p class='ultra-small'>Reply</p>
                            </div>
                            <div class='col s4 m4 14 center-align'>
                              <a href=''><i class='mdi-content-forward'></i></a>
                              <p class='ultra-small'>Forward</p>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                      ";}  
                     }
                     ?>
            </div>

            <!-- Compose Email Trigger -->
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
              <a class="btn-floating btn-large green modal-trigger" href="#modal1">
                <i class="large mdi-communication-quick-contacts-mail "></i>
              </a>
            </div>



            <!-- Compose Email Structure -->
            <div id="modal1" class="modal">
              <div class="modal-content">
                <nav class="red">
                  <div class="nav-wrapper">
                    <div class="left col s12 m5 l5">
                      <ul>
                        <li><a  class="email-menu"><i class="modal-action modal-close  mdi-hardware-keyboard-backspace"></i></a>
                        </li>
                        <li><a  class="email-type">Compose</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div>
              <div class="model-email-content">
                <div class="row">
                    <form class="col s12" method="post" action="msg.php">
                    <div class="row">
                      <div class="input-field col s12">
                            <select name="to">
                              <option value="" disabled selected>Select a user</option>
                              <?php 
                              $usr=$con->query("SELECT * FROM users, customer WHERE users.email !='$email' AND customer.email !='$email'");
                              while($r=$usr->fetch_array()){
                                 $u_id=$r['userID']; 
                                 $em=$r['email'];
                                 $nm=$r['fname']." ".$r['lname']." ".$r['name'];
                                 echo"<option value='$u_id'>$nm ($em)</option>";
                              }
                              ?>
                              
                            </select>
                        <label for="to_email">To</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="subject" name="subj" type="text" class="validate">
                        <label for="subject" >Subject</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="compose" name="msg" class="materialize-textarea" length="500"></textarea>
                        <label for="compose">Compose email</label>
                      </div>
                    </div>
                      <input type="submit" name="send" class="btn btn-primary" value="Send"/>
                  </form>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>
    <!--end container-->

    </section>
    <!-- END CONTENT -->
    
<!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            &nbsp;
        </div>
       
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2018 
                <span class="right"> Owned Together </span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="../own/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="../own/js/materialize.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../own/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="../own/js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="../own/js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="../own/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/sparkline/sparkline-script.js"></script>
      

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../own/js/plugins.js"></script>
</body>


</html>
