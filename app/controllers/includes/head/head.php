<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =========== GOOGLE FONT ========== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- =========== LINKING CSS ========== -->
    <link rel="stylesheet" href="/assets/flotila/css/reset.css">
    <link rel="stylesheet" href="/assets/flotila/css/style.css">
    <link rel="stylesheet" href="/assets/flotila/css/registration.css">
    <link rel="stylesheet" href="/assets/flotila/css/bonus.css">
    <link rel="stylesheet" href="/assets/flotila/css/contact.css">
    <link rel="stylesheet" href="/assets/flotila/css/instructions_material.css">  

    <!-- ========== FONT AWESOME ========== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- =========== TITLE ========== -->
    <title>Flotila-Bolt</title>
</head>
<body>

    <!-- ========== HEADER NAVIGATION ========== -->
    <header>
        <div class="wrapper">
            <div class="wrapper_logo">
                <a href="/"><img src="/assets/flotila/images/transparentlogo.png" alt="logo"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Úvod</a></li>
                    <li><a href="/contact">Kontakt</a></li>
                    <li><button><a href="/registration">Zaregistruj se</a></button></li>
                    <li><button><a href="/change_fleet">Změna flotily</a></button></li>
                    <li>
                        <label for="language"></label>
                        <select name="language" id="language">
                            <option value="English">EN</option>
                            <option value="Czech">CZ</option>                            
                        </select>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

     <!-- ========== HIDDEN HEADER NAVIGATION ========== -->
    <header class="hidden_menu">
        <div class="hidden_menu_all">
            <div class="hidden_logo">
                <img src="/assets/images/flotila/transparentlogo.png" alt="logo">
            </div>

            <div class="hidden_navigation_hamburger">
                <i class="fa-solid fa-bars fa-xl"></i>
            </div>
        </div>

        <div class="hidden_navigation">
            <nav>
                <ul>
                    <li><a href="/">Úvod</a></a></li>
                    <li><a href="/contact">Kontakt</a></li>
                    <li><a href="/registration">Zaregistruj se</a></li>
                    <li><a href="/change_fleet">Změna flotily</a></li>
                    <li>
                        <label for="language"></label>
                        <select name="language" id="language">
                            <option value="English">EN</option>
                            <option value="Czech">CZ</option>
                            
                        </select>
                    </li>
                </ul>
            </nav>
            <div class="hidden_nagivation_close">
                <i class="fa-solid fa-xmark fa-2xl"></i>
            </div>
        </div>
    </header>
