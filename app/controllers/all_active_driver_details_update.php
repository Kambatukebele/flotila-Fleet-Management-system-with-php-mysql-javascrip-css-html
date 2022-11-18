<?php
    require_once 'controller/controller_all_active_driver_details_update.php';
    require "controller/controller_security.php"; 
    include "includes/dashboard/header_dashboard.php";
    include "includes/dashboard/sidebar_dashboard.php"; 
    include "includes/dashboard/nav_dashboard.php"; 
?>
   


        <!-- ddelete all from top  -->


        <style>
            .btn{
                background-color: #1cc88a;
            }
         

            .btn input{
               
                background-color: #1cc88a;
                border: none;
                color: white;
            }
            
        </style>

        


        <!-- from here up delete -->

         <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 style="background-color:#e74a3b; color:white; padding:5px">
                           ACTIVE DRIVERS / DETAILS / UPDATE
                        </h6>
                    </div>
                   

                    <!-- Content Row -->
                    <div class="row">
                        
                    </div>

                    <!-- Content Row -->
                    <br>
                    <!-- Page Heading -->
                    <h6>YOU ARE NOW MODIFYING <?php echo strtoupper($stmt[0]['first_name']); ?> </h6>
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
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="first_name" value="<?php echo $stmt[0]['first_name'];?>" id=""></td>
                                                <td> <input type="text" name="last_name" value="<?php echo $stmt[0]['last_name']; ?>"></td>
                                                <td> <input type="email" name="email" value="<?php echo $stmt[0]['email']; ?>" id=""></td>
                                            </tr>
                                        
                                        </tbody>
                                        
                                    </table>


                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                <th>Phone Number</th>
                                                <th>Bank Account</th>
                                                <th>Booked Date</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              
                                                <th>Phone Number</th>
                                                <th>Bank Account</th>
                                                <th>Booked Date</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                    <td> <input type="text" name="phone_number" value="<?php echo $stmt[0]['phone_number']; ?>"></td>
                                                    <td><input type="text" name="bank_account" value="<?php echo $stmt[0]['bank_account'];  ?>" id=""></td>
                                                    <td><input type="date" name="booked_date" value="<?php echo $stmt[0]['booked_date']; ?>"></td>
                                                   
                                                </tr>
                                        
                                        </tbody>
                                        
                                    </table>

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                <th>Deposit</th>
                                                <th>Return Deposit</th>
                                                <th>Kind Of Registration</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              
                                                <th>Deposit</th>
                                                <th>Return Deposit</th>
                                                <th>Kind Of Registration</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                    <td><input type="text" name="deposit" value="<?php echo $stmt[0]['deposit'];?>" id=""></td>
                                                    <td><input type="text" name="return_deposit" value="<?php echo $stmt[0]['return_deposit'];?>"></td>
                                                    <td> <input type="text" name="kind_of_registration" value="<?php echo $stmt[0]['kind_of_registration']; ?>" id=""></td>
                                                   
                                                </tr>
                                        
                                        </tbody>
                                        
                                    </table>

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                <th>Transportation</th>
                                                <th>Contract</th>
                                                <th>City</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              
                                                <th>Transportation</th>
                                                <th>Contract</th>
                                                <th>City</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                    <td><input type="text" name="transportation" value="<?php echo $stmt[0]['transportation']; ?>"></td>
                                                    <td><input type="text" name="contract_signed" value="<?php echo $stmt[0]['contract_signed']; ?>"></td>
                                                    <td> <input type="text" name="city" value="<?php echo $stmt[0]['city']; ?>"></td>
                                                   
                                                </tr>
                                        
                                        </tbody>
                                        
                                    </table>

                                    <div class="btn">
                                        <input type="submit" value="Update Driver" name="submit">
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
