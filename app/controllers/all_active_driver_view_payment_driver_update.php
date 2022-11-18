<?php
    require_once 'controller/controller_all_active_driver_view_payment_driver_update.php';
    require "controller/controller_security.php"; 
    include "includes/dashboard/header_dashboard.php";
    include "includes/dashboard/sidebar_dashboard.php"; 
    include "includes/dashboard/nav_dashboard.php"; 
?>

        <!-- Sidebar -->
       
    <style>
        .left_side{
                background-color: #1cc88a;
                width: 200px;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 9px 15px;
                border-radius: 5px;
            }
         

            .left_side button{
               
                background-color: #1cc88a;
                border: none;
                color: white;
            }
    </style>
    

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        
                    </div>

                    <!-- Content Row -->
                    <br>
                    <!-- Page Heading -->
                    <h6>MODIFICATION PAYMENT</h6>
                    <?php
                        if(isset($success)){
                            echo '<p style="background-color:#1cc88a;color:white">' . $success . "</p>";
                        }
                    ?>
                   <br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="" method="POST">

                                
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Period Of Date</th>
                                                <th>Received</th>
                                                <th>Send to driver</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Period Of Date</th>
                                                <th>Received</th>
                                                <th>Send to driver</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="periodFrom" placeholder="Period of " value="<?php echo $stmt[0]['period_of_date']; ?>"></td>
                                                <td><input type="text" name="received" placeholder="Received from Bolt" value="<?php echo $stmt[0]['received']; ?>""></td>
                                                <td><input type="text" name="sendToDriver" placeholder="Send to Driver" value="<?php echo $stmt[0]['send_to_driver']; ?>""></td>
                                            </tr>
                                        
                                        </tbody>
                                        
                                    </table>


                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                <th>Commission</th>
                                                <th>Comment</th>
                                                <th>Status Payment</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              
                                                <th>Commission</th>
                                                <th>Comment</th>
                                                <th>Status Payment</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                    <td><input type="text" name="commission"  placeholder="Commission" value="<?php echo $stmt[0]['commission'] ?>""></td>
                                                    <td><input type="text" name="comment" placeholder="Comment" value="<?php echo $stmt[0]['comment'] ?>""></td>
                                                    <td>
                                                        <input type="text" name="status_payment" value="<?php echo $stmt[0]['status_payment'] ?>"">
                                                    </td>
                                                   
                                                </tr>
                                        
                                        </tbody>
                                        
                                    </table>

                                    <div class="left_side">
                                        <button type="submit" name="save_payment">Update Payment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                   

                    <!-- Content Row -->
                   

                </div>
                <!-- /.container-fluid -->
<?php
    include "includes/dashboard/footer_dashboard.php"; 
?>
