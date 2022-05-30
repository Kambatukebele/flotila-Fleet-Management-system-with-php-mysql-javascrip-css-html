<!DOCTYPE html>
<html lang="en">
    <?php include '../model/includes/head/head.php'; ?>
<body>

    <!-- ========== HEADER NAVIGATION ========== -->
    <?php include '../model/includes/navigation/header.php' ?>  
    <!-- ========== END OF HIDDEN HEADER NAVIGATION ========== -->

    <!-- ========== MAIN HEARDER HIRO ========== -->

    <main>
        <div class="main_all">
            <div class="main_text_heading">
                <div class="main_text_title">
                    <h1>Přidejte se k nám do týmu!</h1>
                </div>
                <div class="main_text_sub_title">
                    <h4>Jako kurýr budete mít flexibilní práci, brigádu nebo přivýdělek. Jezdíte pouze kdy chcete a jak dlouho chcete. Stačí si jen zapnout aplikaci v chytrém telefonu a vyděláváte! Registrovat se můžete v Praze, Plzni, Brně, Olomouci, Ostravě, Českých Budějovicích a Hradci Králové.     
                    </h4>
                </div>
                <div class="main_button">
                    <a href="registration.php"><button class="btn_green">Zaregistruj se</button></a>
                    <a href="contact.php"><button class="btn_white">Kontaktuj nás</button></a>
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
            <h2>Výhody rozvážení s BoltFood</h2>
            
        </div>
    </section>

    <!-- ========== HOWS IT WORKS CONTENTS ========== -->

    <section class="how_it_work_content">
        <div class="how_it_work_content_all">
            <div class="content">
                <h3>Flexibilní pracovní doba</h3>
                <br>
                <h6>Kdy a jak dlouho pracujete záleží jenom na vás. V aplikaci se jedním kliknutím připojíte a můžete rozvážet. Kdykoliv chcete zkončit, z aplikace se zase jedním kliknutím odhlásíte. Žádné plánování směn.</h6>
            </div>
            <div class="content_dif">
                <h3>Výdělek každý týden</h3>
                <br>
                <h6>Na svůj výdělej nečekáte celý měsíc. Vyplácíme každé úterý na Váš bankovní účet.</h6>
            </div>
            <div class="content">
                <h3>Co potřebujete?</h3>
                <br>
                <h6>Pouze chytrý telefon s internetem a dopravní prostředek. Rozvážet je možné s vlastním vozidlem, motorkou, na kole nebo koloběžce. <br> S mobilní aplikací Bolt Courier se můžete kdykoliv pustit do práce a přijímat zakázky. Termobox na jídlo si vyzvednete při registraci.</h6>
            </div>
            <div class="content_dif">
                <h3>Kde můžete rovážet?</h3>
                <br>
                <h6>Registrovat se je možné v těchto městech: Praha, Plzeň, Brno, Olomouc, Ostrava, České Budějovice a Hradec Králové.</h6>
            </div>
        </div>        
    </section>

    <!-- ========== PROCESS  ========== -->
    <section class="process">
        
        <h2>Jaký je postup?</h2>
        <div class="process_all">
            <div class="process_content">
                <h1>1</h1>
                <br>
                <h6>Vyplňte a pošlete nám svou registraci</h6>
            </div>
            <div class="process_content">
                <h1>2</h1>
                <br>
                <h6>My se s Vámi obratem spojíme a doladíme detaily.</h6>
            </div>
            <div class="process_content">
                <h1>3</h1>
                <br>
                <h6>Vyzvedněte si Termobox a stáhněte si aplikaci Bolt Courier</h6>
            </div>
            <div class="process_content">
                <h1>4</h1>
                <br>
                <h6>Začněte rozvážet a vydělávat</h6>
            </div>
        </div>

    </section>

    <!-- ========== REGISTER NOW -->

    <section class="work_now">
       <div class="work_now_all">
            <div class="work_now_button">
                <a href="registration.php"><button>Zaregistruj se</button></a>
            </div>
       </div>
    </section>

    <!-- ========== BONUS  ========== -->
    <section class="bonus">
        <div class="bonus_all">
            <h2>Náborový bonus 2.000 Kč </h2>
            <h6>Pro všechny nově registrované kurýry v ČESKÝCH BUDĚJOVICÍCH a HRADCI KRÁLOVÉ</h6>
            <a href="bonus.php"><button>Více</button></a>
        </div>
    </section>

    <!-- ========== APPLICATION  ========== -->
    <section class="application">
        <div class="application_box">
            <div class="application_box_left">
                <div class="application_all">
                    <h2>Aplikace ke stažení</h2>
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
    <?php include '../model/includes/footer/footer.php'; ?>
   
</body>
</html>