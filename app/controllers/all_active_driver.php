<?php
    require_once "controller/controller_all_active_driver.php";
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
                           ACTIVE DRIVERS /
                        </h6>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 style="background-color:#1cc88a; color:white; padding:5px">
                           <?php
                                if(isset($_SESSION['message_delete'])):

                                    echo $_SESSION['message_delete']; 
                                    //session_unset();
                                    
                                endif; 
                           ?>
                        </h6>
                    </div>



                    <!-- Content Row -->
                    <div class="row">
                    </div>

                    <!-- Content Row -->
                    
                    <!-- Page Heading -->
                    <h6>ACTIVE DRIVERS TABLE</h6>
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
                                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Names</th>
                                          
                                            <th>Contract Signed?</th>     
                                            <th>Email</th>   
                                            <th>City</th>                                        
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Names</th>
                                            
                                            <th>Contract Signed?</th>     
                                            <th>Email</th>   
                                            <th>City</th>                                        
                                            <th>More</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php
                                  
                                        // SELECT DATA
                                        foreach($drivers as $driver=>$row)
                                        {
                                            $idDriver = htmlspecialchars($row['id']);
                                            $firstNameD = htmlspecialchars($row['first_name']);
                                            $lastNameD = htmlspecialchars($row['last_name']);
                                            $emailD = htmlspecialchars($row['email']);
                                            $contractD = htmlentities($row['contract_signed']);
                                            $cityD = htmlspecialchars($row['city']);
                                            echo
                                                '<tr>' .
                                                    '<td>' . $firstNameD .' '. $lastNameD . '</td>'.
                                                   
                                                    '<td>' .$contractD . '</td>'.
                                                    '<td>' .$emailD . '</td>'.
                                                    '<td>' .$cityD . '</td>'.
                                                    '<td>' .
                                                        '<a href="all_active_driver_details?view_detailId='.$idDriver.'" class="btn btn-primary btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-check"></i>
                                                            </span>
                                                            <span class="text">Details</span>
                                                        </a>'. " ".
                                                        
                                                        
                                                    '</td>'.
                                                '</tr>';
                                        }  
                                    ?>
                                        
                                    </tbody>
                                    
                                </table>
                                <div class="pagination" style="display:flex; justify-content:center; background-color: rgba(128, 128, 128, 0.26);">
                                    <?php
                                        for($i=1; $i<=$totalPages; $i++){
                                            printf("<a style='padding:5px;' href='all_active_driver.php?page=%u'>%u</a>", $i, $i);
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                   

                    <!-- Content Row -->
                   

                </div>
                <!-- /.container-fluid -->

          



<?php
     include "includes/dashboard/footer_dashboard.php";
?>