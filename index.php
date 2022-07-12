<!DOCTYPE html>
<html lang="en">
    <?php 
    //include '../controller/controller_choose_lg.php';
        require_once '../model/includes/head/head.php';
     ?>
<body>

    <!-- ========== HEADER NAVIGATION ========== -->
    <?php require_once '../model/includes/navigation/header.php' ?>  
    <!-- ========== END OF HIDDEN HEADER NAVIGATION ========== -->

    <!-- ========== MAIN HEARDER HIRO ========== -->

    <main>
        <div class="main_all">
            <div class="main_text_heading">
                <div class="main_text_title">
                    <!-- Přidejte se k nám do týmu! -->
                    <h1><?php echo $lang['home-page-title'] ?></h1>
                </div>
                <div class="main_text_sub_title">
                    <h4><?php echo $lang['home-page-description']; ?></h4>
                </div>
                <div class="main_button">
                    <a href="registration.php"><button class="btn_green"><?php echo $lang['home-page-button-1'] ?></button></a>
                    <a href="contact.php"><button class="btn_white"><?php echo $lang['home-page-button-2'] ?></button></a>
                </div>
            </div>
    
            <div class="main_image">
                <img src="../model/public/images/driver.jpg" alt="driver_image">
            </div>
        </div>
    </main>
    <!-- ==========  END OF MAIN HEARDER HIRO ========== -->
   

    <!-- ========== HOWS IT WORKS ========== -->
    <section class="how_it_works">
        <div class="how_it_works_all">
            <h2><?php echo $lang['home-page-second-large-box-title']; ?></h2>
            
        </div>
    </section>

    <!-- ========== HOWS IT WORKS CONTENTS ========== -->

    <section class="how_it_work_content">
        <div class="how_it_work_content_all">
            <div class="content">
                <h3><?php echo $lang['home-page-first-box-in-large-box-title']; ?></h3>
                <br>
                <h6><?php echo $lang['home-page-first-box-in-large-box-description']; ?></h6>
            </div>
            <div class="content_dif">
                <h3><?php echo $lang['home-page-second-box-in-large-box-title']; ?></h3>
                <br>
                <h6><?php echo $lang['home-page-second-box-in-large-box-description'];?></h6>
            </div>
            <div class="content">
                <h3><?php echo $lang['home-page-third-box-in-large-box-title']; ?></h3>
                <br>
                <h6><?php echo $lang['home-page-third-box-in-large-box-description'];?></h6>
            </div>
            <div class="content_dif">
                <h3><?php echo $lang['home-page-fourth-box-in-large-box-title'];?></h3>
                <br>
                <h6><?php echo $lang['home-page-fourth-box-in-large-box-description'];?></h6>
            </div>
        </div>        
    </section>

    <!-- ========== PROCESS  ========== -->
    <section class="process">
        
        <h2><?php echo $lang['home-page-third-large-box-title'];?></h2>
        <div class="process_all">
            <div class="process_content">
                <h1>1</h1>
                <br>
                <h6><?php echo $lang['home-page-first-third-box-in-large-box-title'];?></h6>
            </div>
            <div class="process_content">
                <h1>2</h1>
                <br>
                <h6><?php echo $lang['home-page-second-third-box-in-large-box-title'];?></h6>
            </div>
            <div class="process_content">
                <h1>3</h1>
                <br>
                <h6><?php echo $lang['home-page-third-third-box-in-large-box-title'];?></h6>
            </div>
            <div class="process_content">
                <h1>4</h1>
                <br>
                <h6><?php echo $lang['home-page-fourth-third-box-in-large-box-title'];?></h6>
            </div>
        </div>

    </section>

    <!-- ========== REGISTER NOW -->

    <section class="work_now">
       <div class="work_now_all">
            <div class="work_now_button">
                <a href="registration.php"><button><?php echo $lang['home-page-button-1'] ?></button></a>
            </div>
       </div>
    </section>

    <!-- ========== BONUS  ========== -->
    <section class="bonus">
        <div class="bonus_all">
            <h2><?php echo $lang['home-page-fourth-large-box-title'];?> 2.000 Kč </h2>
            <h6><?php echo $lang['home-page-fourth-large-box-description'];?></h6>
            <a href="bonus.php"><button><?php echo $lang['home-page-fourth-large-box-button']; ?></button></a>
        </div>
    </section>

    <!-- ========== APPLICATION  ========== -->
    <section class="application">
        <div class="application_box">
            <div class="application_box_left">
                <div class="application_all">
                    <h2><?php echo $lang['home-page-fith-large-box-title'];?></h2>
                </div>
                <div class="application_dowload">
                    <div class="application_android">
                        <a href="https://play.google.com/store/apps/details?id=com.bolt.deliverycourier"><img src="../model/public/images/android.jpeg" alt=""></a>
                    </div>
                    <div class="application_apple">
                        <a href="https://apps.apple.com/cz/app/bolt-courier/id1470629849?l=cs"><img src="../model/public/images/apple.jpeg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="application_img">
                <img src="../model/public/images/boltimg.jpeg" alt="">
            </div>
        </div>
    </section>
    <!-- ========== FOOTER ========== -->
    <?php require_once '../model/includes/footer/footer.php'; ?>
   
</body>
</html>