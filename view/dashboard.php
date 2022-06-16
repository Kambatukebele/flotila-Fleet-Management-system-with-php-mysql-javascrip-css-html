<?php include_once '../controller/controller_dashboard.php'; ?>
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
                <a href="#">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>Registered Driver List</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">insights</span>
                    <h3>Changed Fleet List</h3>
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
                <a href="#">
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
                            <h3>Totaal sales</h3>
                            <h1>$25,024</h1>
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
                            <h3>Totaal sales</h3>
                            <h1>$14,124</h1>
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
                            <h3>Totaal Income</h3>
                            <h1>$10,624</h1>
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
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
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
                        foreach($result as $key => $value){
                            $_SESSION['id_registeredDriver'] = $value['id'];
                            $_SESSION['first_name'] = $value['first_name'];
                            $_SESSION['last_name'] = $value['last_name'];
                            $_SESSION['registered_date'] = $value['registered_date'];

                            // $_SESSION['id_registeredDriver'] = $value['id'];
                            // $_SESSION['id_registeredDriver'] = $value['id'];
                            // $_SESSION['id_registeredDriver'] = $value['id'];

                            // $_SESSION['first_name'] = $value['first_name']."<br>";

                           echo
                            '<div class="update">'.
                                '<div class="profile-photo">'.
                                    '<img src="../model/public/admin/images/pic2.jpg" alt="">'.
                                '</div>'.
                                '<div class="message">'.
                                    '<p>'.'<b>'.$_SESSION["first_name"].' '.$_SESSION["last_name"].'</b>'.' has just registered'.'</p>';
                                    echo '<small class="text-muted">'.$_SESSION['registered_date']. ' min ago'.'
                                </div>'.'
                            </div>';
                            
                        }  
                    
                    
                    ?>
                  
                    <!-- <div class="update">
                        <div class="profile-photo">
                            <img src="../model/public/admin/images/picture1.jpeg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Kamba Tukebele</b> receive her order of phone</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div> -->
                    <!-- <div class="update">
                        <div class="profile-photo">
                            <img src="../model/public/admin/images/picture2.jpeg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Kristina Kabatova</b> receive her order of phone</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- ========== END OF RECENT UPDATES -->
            <div class="recent-updates">
                <h2>Changed Fleet Driver</h2>
                <div class="updates">
                    <?php
                        foreach($resultChange as $keys => $changedFlotila){
                            $_SESSION['id_registeredDriver'] = $changedFlotila['id'];
                            $_SESSION['first_name'] = $changedFlotila['first_name'];
                            $_SESSION['last_name'] = $changedFlotila['last_name'];
                            $_SESSION['registered_date'] = $changedFlotila['registered_date'];

                           echo
                            '<div class="update">'.
                                '<div class="profile-photo">'.
                                    '<img src="../model/public/admin/images/pic1.jpg" alt="">'.
                                '</div>'.
                                '<div class="message">'.
                                    '<p>'.'<b>'.$_SESSION["first_name"].' '.$_SESSION["last_name"].'</b>'.' has just registered'.'</p>';
                                    echo '<small class="text-muted">'.$_SESSION['registered_date']. ' min ago'.'
                                </div>'.'
                            </div>';
                            
                        }  
                    
                    
                    ?>
                  
                    <!-- <div class="update">
                        <div class="profile-photo">
                            <img src="../model/public/admin/images/picture1.jpeg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Kamba Tukebele</b> receive her order of phone</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div> -->
                    <!-- <div class="update">
                        <div class="profile-photo">
                            <img src="../model/public/admin/images/picture2.jpeg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Kristina Kabatova</b> receive her order of phone</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div> -->
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
                <div class="item add-product">
                    <div>
                        <span class="material-symbols-sharp">add</span>
                        <h3>Add Driver</h3>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="../model/public/admin/index.js"></script>
</body>
</html>