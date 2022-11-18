<?php
    require_once 'controller/controller_all_active_driver_view_payment_driver.php';
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
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>

                    <!-- Content Row -->
                    <br>
                    <!-- Page Heading -->
                    <h6>DETAILS PAYMENT FOR <?php  echo strtoupper($data[0]['first_name']) . " " . strtoupper($data[0]['last_name']); ?> </h6>
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
                                            <th>Period Of Date</th>
                                            <th>Received</th>
                                            <th>Send</th>
                                            <th>Commission</th>
                                            <th>Comment</th>
                                            <td>Status</td>
                                            <td>More</td>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Period Of Date</th>
                                            <th>Received</th>
                                            <th>Send</th>
                                            <th>Commission</th>
                                            <th>Comment</th>
                                            <td>Status</td>
                                            <td>More</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php
                                  
                                        // SELECT DATA
                                         foreach($paymentStmtResult as $details)
                                         {
                                            $id = htmlspecialchars($details['id']);
                                           $detailsId = htmlspecialchars($details['paymentID']);
                                            $periodDetails =  htmlspecialchars($details['period_of_date']);
                                           $received =  htmlspecialchars($details['received']);
                                           $send =  htmlspecialchars($details['send_to_driver']);
                                            $commission =  htmlspecialchars($details['commission']);
                                            $statusPay =  htmlspecialchars($details['status_payment']);
                                            $comment =  htmlspecialchars($details['comment']);                                    
                                           
                                            echo
                                                '<tr>' .
                                                    '<td>' . $periodDetails .'</td>'.
                                                    '<td>' . $received . '</td>'.
                                                    '<td>' .$send. '</td>'.
                                                    '<td>' . $commission . '</td>'.
                                                    '<td>' . $comment . '</td>'.
                                                    '<td>' . $statusPay . '</td>'.
                                                    '<td>' .
                                                        '<a href="all_active_driver_view_payment_driver_update?update_payment_detailsId='.$id.'" class="btn btn-success btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-check"></i>
                                                            </span>
                                                            <span class="text">Update</span>
                                                        </a>'.
                                                    '</td>'.
                                                '</tr>'; 
                                         }  
                                    ?>
                                        
                                    </tbody>
                                    
                                </table>
                                <div class="pagination" style="display:flex; justify-content:center; background-color: rgba(128, 128, 128, 0.26);">
                                    <?php
                                        for($i=1; $i<=$totalPages; $i++){
                                            printf("<a style='padding:5px;' href='all_active_driver_view_payment_driver?view_paymentId=$view_paymentId&page=%u'>%u</a>", $i, $i);
                                        }
                                    ?>
                                </div>
                                <!-- <a href="#" class="btn btn-light btn-icon-split">
                                        <span class="icon text-gray-600">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Load More 3 More Drivers</span>
                                    </a> -->
                            </div>
                        </div>
                    </div>

                   

                    <!-- Content Row -->
                   

                </div>
                <!-- /.container-fluid -->
<?php
    include "includes/dashboard/footer_dashboard.php"; 
?>
