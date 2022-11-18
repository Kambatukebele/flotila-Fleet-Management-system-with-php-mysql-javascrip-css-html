<?php
    require_once 'controller/controller_all_active_driver_details.php';
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
                        <h6 style="background-color:#e74a3b; color:white; padding:5px">
                           ACTIVE DRIVERS / DETAILS /
                        </h6>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 style="background-color:#1cc88a ;color:white; padding:7px">
                            <?php
                                if(isset($_SESSION['success_update'] )):
                                    echo ucfirst($result[0]['first_name']) . " " . $_SESSION['success_update'] ;
                                    // session_unset();
                                   //session_destroy(); 
                                endif; 
                            ?>
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
                                                 FULL NAME:</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo strtoupper($result[0]['first_name']) . " " . strtoupper($result[0]['last_name']); ?></div>
                                           
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
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
                                                EMAIL:</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $result[0]['email']; ?></div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div> -->
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
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">PHONE:
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> <?php echo $result[0]['phone_number']; ?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div> -->
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
                                                CITY: </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $result[0]['city']; ?></div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            TRANSPORTATION:</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $result[0]['transportation']; ?></div>
                                    
                                    </div>
                                    <!-- <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div> -->
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
                                            CONTRACT:</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo date($result[0]['contract_signed']) ?></div>
                                    </div>
                                    <!-- <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div> -->
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
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">DEPOSIT:
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> <?php echo $result[0]['deposit'];  ?></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div> -->
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
                                            RETURN DEPOSIT: </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $result[0]['return_deposit']; ?></div>
                                    </div>
                                    <!-- <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!-- Content Row -->
                    
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">COMPLETE INFORMATION</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

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
                                            <tr>
                                                <th>Bank Account</th>
                                                <th>Booked Date</th>
                                                
                                                <th>More</th>
                                            </tr>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Bank Account</th>
                                            <th>Booked Date</th>
                                            
                                            
                                            <th>More</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            foreach($result as $driver)
                                            {
                                               echo 
                                               '<tr>'.
                                                    '<td>' . $driver['bank_account']. '</td>'.
                                                    '<td>'. $driver['booked_date'] . '</td>'.
                                                   
                                                    '<td>'.
                                                       
                                                        '<a href="all_active_driver_details_update?updateId='.$driver['id'].'" class="btn btn-success btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-check"></i>
                                                            </span>
                                                            <span class="text">Update</span>
                                                        </a>'. " ". " ".
                                                        '<a onClick=\' javascript:return confirm("Are you sure to delete this?"); \' href="all_active_driver_details_delete?deleteId='. $driver['id'].'" class="btn btn-danger btn-icon-split">
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
                              
                            </div>
                        </div>
                    </div>
                    

                   

                    <!-- Content Row -->
                   

                </div>
                <!-- /.container-fluid -->
<?php
    include "includes/dashboard/footer_dashboard.php"; 
?>
