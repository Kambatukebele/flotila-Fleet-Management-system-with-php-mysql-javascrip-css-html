<?php
    require 'controller/controller_dashboard.php';
    require "controller/controller_security.php"; 
    include "includes/dashboard/header_dashboard.php";
    include "includes/dashboard/sidebar_dashboard.php"; 
    include "includes/dashboard/nav_dashboard.php"; 
?>

        <!-- Sidebar -->
       

    

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>Welcome Back  <?php

                            if(isset($_SESSION['fullname_admin_one']))
                            {

                                echo $_SESSION['fullname_admin_one'];

                            }elseif(isset($_SESSION['fullname_admin_two'])){
                                
                                 echo $_SESSION['fullname_admin_two'];
                            }
                        ?>
                        </h4>
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 style="background-color:#1cc88a ;color:white; padding:7px">
                        <?php
                            if(isset($_SESSION['message_delete_new'])):
                                echo $_SESSION['message_delete_new']; 
                                session_unset(); 
                            endif; 

                            if(isset($_SESSION['message_validate'])):
                                echo $_SESSION['message_validate']; 
                                session_unset(); 
                            endif; 
                        ?>
                        </h6>
                    </div>

                    <!--  -->

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Received</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Kč <?php echo $receivedValue; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Send</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Kč <?php echo $sendValue; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Commission
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Kč <?php echo $commissionValue; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
                                                DATE</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $actualDate; ?></div>
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
                    <h6>NEW REGISTRATION AND CHANGED FLEET DRIVERS TABLE</h6>
                   <br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Names</th>
                                            <th>City</th>
                                            <th>Sent Registration?</th>
                                            <th>Booked date</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Names</th>
                                            <th>City</th>
                                            <th>Sent Registration?</th>
                                            <th>Booked date</th>
                                            <th>More</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php
                                  
                                        // SELECT DATA
                                        foreach($stmt->fetchAll() as $driver=>$row)
                                        {
                                            $idDriver = htmlspecialchars($row['id']);
                                            $firstNameD = htmlspecialchars($row['first_name']);
                                            $lastNameD = htmlspecialchars($row['last_name']);
                                            $cityD = htmlspecialchars($row['city']);
                                            $sent_registrationD = htmlspecialchars($row['sent_registration']);
                                            $booked_dateD = htmlspecialchars($row['booked_date']);                                   
                                            
                                            echo
                                                '<tr>' .
                                                    '<td>' . $firstNameD .' '. $lastNameD . '</td>'.
                                                    '<td>' . $cityD . '</td>'.
                                                    '<td>' .$sent_registrationD . '</td>'.
                                                    '<td>' . $booked_dateD . '</td>'.
                                                    '<td>' .
                                                        '<a href="all_new_driver?detailsId='.$idDriver.'" class="btn btn-success btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-check"></i>
                                                            </span>
                                                            <span class="text">More</span>
                                                        </a>'. " ".
                                                        '<a onClick=\' javascript:return confirm("Are you sure to delete this?"); \' href="all_new_driver_delete?deleteId=' . $idDriver.'" class="btn btn-danger btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-check"></i>
                                                            </span>
                                                            <span class="text">Delete</span>
                                                        </a>'.
                                                    '</td>'.
                                                '</tr>';
                                        }  
                                    ?>
                                        
                                    </tbody>
                                    
                                </table>
                                <!-- <a href="#" class="btn btn-light btn-icon-split">
                                        <span class="icon text-gray-600">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Load More 3 More Drivers</span>
                                    </a>
                            </div> -->
                        </div>
                    </div>

                   

                    <!-- Content Row -->
                   

                </div>
                <!-- /.container-fluid -->
<?php
    include "includes/dashboard/footer_dashboard.php"; 
?>
