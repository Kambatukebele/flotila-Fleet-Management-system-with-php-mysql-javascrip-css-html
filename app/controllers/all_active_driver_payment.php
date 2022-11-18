<?php
    require 'controller/controller_all_active_driver_payment.php';
    require "controller/controller_security.php"; 
    include "includes/dashboard/header_dashboard.php";
    include "includes/dashboard/sidebar_dashboard.php"; 
    include "includes/dashboard/nav_dashboard.php"; 
?>


<script>
  
</script>





                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 style="background-color:#e74a3b; color:white; padding:5px">
                        PAYMENT DRIVER / 
                        </h6>
                        <!-- $_SESSION['payment_succeed'] = ucfirst($_SESSION[0]['first_name']) . " " . $_SESSION[0]['last_name'] -->
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 style="background-color:#1cc88a ;color:white; padding:7px">
                            <?php
                                if(isset($_SESSION['payment_succeed'])):
                                    echo $_SESSION['payment_succeed'] ;
                                    // session_unset();
                                    // session_destroy(); 
                                endif; 
                            ?>
                        </h6>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                       <input type="text" id="search" placeholder="Select a Driver">
                    </div>
                    <br>
                    <br>

                    <!-- Content Row -->
                    
                    <!-- Page Heading -->
                    <!-- <h6></h6> -->
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
                                            <th>Email</th>   
                                            <th>Phone Number</th>                                        
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Names</th>   
                                            <th>Email</th>   
                                            <th>Phone Number</th>                                        
                                            <th>More</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="output">
                                                                                
                                    </tbody>
                                    
                                </table>
                                <div class="pagination" style="display:flex; justify-content:center; background-color: rgba(128, 128, 128, 0.26);">
            
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

<script>
    $(document).ready(function()
    {
        $("#search").keypress(function()
        {
            $.ajax
            (
                {
                    type:'POST',
                    url:'all_active_driver_payment_show',
                    data:
                    {
                        name:$("#search").val(),
                    },
                    success:function(data)
                    {
                        $("#output").html(data);
                    }
                });
        });
    });

</script>