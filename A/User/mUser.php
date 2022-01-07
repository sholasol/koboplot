<?php 
include 'head.php';
include 'stat.php';

//Delete User record
if(isset($_GET['delete'])){
    $usr =$_GET['delete'];
    $que=$con->query("DELETE FROM users WHERE userID='$usr'");
    if($que){
        echo  " <script>alert('The user has been successfully deleted);</script>"; 
         } else {
             echo  " <script>alert('Processing error. Try again);</script>"; 
         }
}
?>

                    <!--work collections start-->
                    <div id="work-collections">
                        <div class="row">
                         <table id="data-table-simple" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Joined</th>
                                    <th width="7%"></th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Joined</th>
                                    <th></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php 
                                $p=$con->query("SELECT * FROM users WHERE role='User'");
                                while($ro=$p->fetch_array()){
                                    $id= $ro['userID'];
                                    $date= $ro['created'];
                                    
                                ?>
                                <tr>
                                    <td>
                                        <p class="collections-title">
                                            <a href="#?id=<?php echo $id; ?>"> <?php echo $ro['name']." ".$ro['lname']; ?></a><br>
                                        </p>
                                    </td>
                                    <td><?php echo $ro['email']; ?></td>
                                    <td><?php echo $ro['created']; ?></td>
                                    <td>
                                        <span class="pull-right">
                                            <a class="mdi-action-visibility" title="View User's Detail" href="eUser.php?id=<?php echo $id; ?>"></a>
                                            <a class="mdi-action-delete" title="Delete this user" href="mUser.php?delete=<?php echo $id; ?>" onclick="return confirm('Delete this User?')" style="color: red;"></a>
                                        </span>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                          </table>     
                        </div>
                    </div>
                    <!--work collections end-->

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
    <script src="../own/js/plugins/chartjs/chartjs-sample-chart.js" type="text/javascript"></script>
    <!-- sparkline -->
    <script type="text/javascript" src="../own/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/sparkline/sparkline-script.js"></script>
      

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../own/js/plugins.js"></script>
    
    <!-- Data Tables-->
    <script type="text/javascript" src="../own/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- Toast Notification -->
</body>


</html>
