<?php
    require_once 'controller/controller_all_active_driver_payment_pay_driver_now.php';
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
                        <h6 style="background-color:#e74a3b; color:white; padding:5px">
                           PAYMENT / <?php
                            echo strtoupper($data[0]['first_name']); ?>
                        </h6>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Bank Account</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data[0]['bank_account'];   ?></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Email
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $data[0]['email'];   ?></div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Phone Number</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data[0]['phone_number'];   ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <br>
                    <!-- Page Heading -->
                    <h6>PAYMENT </h6>
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
                                                <td><input type="text" name="periodFrom" placeholder="Period of "></td>
                                                <td><input type="text" name="received" placeholder="Received from Bolt"></td>
                                                <td><input type="text" name="sendToDriver" placeholder="Send to Driver"></td>
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
                                                    <td><input type="text" name="commission"  placeholder="Commission"></td>
                                                    <td><input type="text" name="comment" placeholder="Comment"></td>
                                                    <td>
                                                    <select name="status_payment" id="">
                                                        <option value="none" selected disabled>Choose</option>
                                                        <option value="paid">PAID</option>
                                                        <option value="not_working">NOT WORKING</option>
                                                        <option value="quit">QUIT</option>
                                                    </select>
                                                    </td>
                                                   
                                                </tr>
                                        
                                        </tbody>
                                        
                                    </table>

                                    <div class="left_side">
                                        <button type="submit" name="save_payment">Save Payment</button>
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
