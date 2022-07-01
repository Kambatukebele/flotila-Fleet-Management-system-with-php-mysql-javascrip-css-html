<?php
    include_once '../controller/controller_dashboard.php';
    
?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../model/includes/head_dashboard/admin_dashboard.php'; ?>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../model/public/admin/images/logo.png" alt="">
                    <h2>KRISTINA & <span class="danger">KAMS</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="dashboard.php">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a> 
                <a href="#" class="active">
                    <span class="material-symbols-sharp">person</span>
                    <h3>Drivers</h3>
                </a> 
                <a href="all-driver.php">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>All Drivers</h3>
                </a>
                <a href="list_active_driver.php">
                    <span class="material-symbols-sharp">insights</span>
                    <h3>All active driver</h3>
                </a> 
                <a href="#">
                    <span class="material-symbols-sharp">mail</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a> 
                <a href="#">
                    <span class="material-symbols-sharp">inventory</span>
                    <h3>All drivers</h3>
                </a> 
                <a href="payment.php">
                    <span class="material-symbols-sharp">report</span>
                    <h3>Payment Drivers</h3>
                </a> 
                <a href="#">
                    <span class="material-symbols-sharp">settings</span>
                    <h3>Settings</h3>
                </a> 
                <a href="#">
                    <span class="material-symbols-sharp">add</span>
                    <h3>Add Driver</h3>
                </a> 
                <a href="#">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a> 
            </div>
        </aside>

        <!-- ========== END OF ASIDE ========== -->

        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <?php
                    echo "Today is: ";
                    if(isset($actualDate)){
                        echo $actualDate;
                    }
                ?>
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Received</h3>
                            <h1>Kč 25,024</h1>
                        </div><div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- ========== END OF SALES ========== -->

                <div class="expenses">
                    <span class="material-symbols-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Send</h3>
                            <h1>Kč 14,124</h1>
                        </div><div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- ========== END OF EXPENSES ========== -->

                <div class="income">
                    <span class="material-symbols-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Commission</h3>
                            <h1>Kč 10,624</h1>
                        </div><div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- ========== END OF INCOME ========== -->
            </div>
                <!-- ========== END OF INSIGHTS ========== -->

            <div class="recent-orders">
                <h2>List of active drivers</h2>
                <!-- SELECT ALL DATA FROM `registration_new_driver` -->
            
                <table>
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Tel </th>
                            <th>Email</th>
                            <th>View payment</th>
                            <th>Pay</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                                   
                        // SELECT DATA
                        foreach($stmt->fetchAll() as $driver=>$row){
                            $idDriver = $row['id'];
                            $firstNameD = $row['first_name'];
                            $lastNameD = $row['last_name'];
                            $emailD = $row['email'];
                            $phoneNumberD = $row['phone_number'];
                            $cityD = $row['city'];
                            $typeOfD = $row['kind-of-registration'];
                            $startDrivingD = $row['starting_date'];
                            $transportationD = $row['transportation'];
                            $bankAccountD = $row['bank-account'];
                            $approvedD = $row['approved'];
                            $pickTheBagD = $row['pick_the_bag'];
                            $signedD = $row['signed'];
                            $registrationBoltD = $row['registered_to_bolt'];
                            $dateSubmit = $row['date_of_submission'];

                            if(!empty($firstNameD) && !empty($lastNameD) && !empty($emailD) && !empty($phoneNumberD) && !empty($cityD) && !empty($startDrivingD) && !empty($bankAccountD) && $approvedD =="YES" || $approvedD =="yes" && $pickTheBagD ==="YES" || $pickTheBagD ==="yes" && !empty($registrationBoltD ==="YES" || $registrationBoltD ==="yes")){
                                echo
                            '<tr>'.
                                '<td>'.$firstNameD.' '. $lastNameD.'</td>'.
                                '<td>'.$phoneNumberD.'</td>'.
                                '<td>'.$emailD.'</td>'.
                                '<td>'.'<a href="payment_details.php?detailsId='.$idDriver.'">'.'Details'.'</a>'.'</td>'.   
                                '<td>'.'<a href="card_payment_driver.php?payId='.$idDriver.'">'.'Pay Now!'.'</a>'.
                                '</td>'.                          
                                
                            '</tr>';
                            }                       
                        }
                    ?>
                       
                       
                    </tbody>
                </table>
                <a href="list_active_driver.php">Show All</a>
            </div>    
        </main>
        <!-- ========== END OF MAIN ========== -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-sharp active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?php if(isset($_SESSION['fullName'])) echo $_SESSION['fullName'];?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../model/public/admin/images/picture1.jpeg" alt="">
                    </div>
                </div>
            </div>
            <!-- ========== END OF TOP ========== -->
            <div class="recent-updates">
                <h2>Recent Registration</h2>
                <div class="updates">
                    <?php
                        $sql = "SELECT * FROM  `registration_new_driver` ORDER BY `id` DESC LIMIT 3";
                        $ret = $conn->prepare($sql);
                        $ret->execute();

                        $feedBack = $ret->fetchAll();
                        foreach($feedBack as $key=>$value){
                           
                            $ft = $value['first_name'];
                            $lt = $value['last_name'];
                            $tf = $value['kind-of-registration'];
                            $dateOfSubmission = $value['date_of_submission'];

                            if(isset($tf) && $tf === "new_courier"){
                            
                                echo
                                '<div class="update">'.
                                    '<div class="profile-photo">'.
                                        '<img src="../model/public/admin/images/pic2.jpg" alt="">'.
                                    '</div>'.
                                    '<div class="message">'.
                                        '<p>'.'<b>'.$ft.' '.$lt.'</b>'.' has just registered on'.'</p>'.'<small class="text-muted">'.$dateOfSubmission. '
                                    </div>'.'
                                </div>';
                            }
                        }
                    ?>
                </div>
            </div>
            <!-- ========== END OF RECENT UPDATES -->
            <div class="recent-updates">
                <h2>Changed Fleet Driver</h2>
                <div class="updates">
                    <?php

                        $query = "SELECT * FROM  `registration_new_driver` ORDER BY `id` DESC LIMIT 3";
                        $feedR = $conn->prepare($query);
                        $feedR->execute();

                        $resultFeedR = $feedR->fetchAll();
                        foreach($resultFeedR as $change=>$changed){
                        
                            $ftChanged = $changed['first_name'];
                            $ltChanged = $changed['last_name'];
                            $tfChanged = $changed['kind-of-registration'];
                            $dateOfSubmissionChanged = $changed['date_of_submission'];
                            if(isset($tfChanged) && $tfChanged === "changed_fleet"){
                            
                                echo
                                '<div class="update">'.
                                    '<div class="profile-photo">'.
                                        '<img src="../model/public/admin/images/pic2.jpg" alt="">'.
                                    '</div>'.
                                    '<div class="message">'.
                                        '<p>'.'<b>'.$ftChanged.' '.$ltChanged.'</b>'.'wants to change fleet'.'</p>'
                                    .'<small class="text-muted">'.$dateOfSubmissionChanged.'
                                    </div>'.'
                                </div>';
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="sales-analytics">
                <!-- <h2>Changed Fleet</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-sharp">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3894</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-symbols-sharp">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>OFFLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1234</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-symbols-sharp">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NEW CUSTOMERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>868</h3>
                    </div>
                </div> -->
               <a href="registration.php">
                    <div class="item add-product">
                        <div>
                            <span class="material-symbols-sharp">add</span>
                            <h3>Add Driver</h3>
                        </div>
                    </div>
               </a>
                
            </div>
        </div>
    </div>
    <script src="../model/public/admin/index.js"></script>
</body>
</html>