
// DISPLAY HAMBURGER MENU ON MOBILE AND TABLET
const wrapper = document.querySelector(".wrapper");
const hiddenMenuAll = document.querySelector(".hidden_menu_all");
const hiddenNav = document.querySelector(".hidden_navigation");
const hamburgerMenu = document.querySelector(".fa-bars");
const closeBtn = document.querySelector(".fa-xmark");


       //SHOWING HAMBURGER MENU
        hamburgerMenu.addEventListener
        ( "click", ()=>
            {
                hiddenMenuAll.style.display = "none";
                hiddenNav.style.display = "block";
            }
        )

             // CLOSING HAMBURGER MENU
        closeBtn.addEventListener("click", ()=>{
            
            hiddenNav.style.display = "none";
            hiddenMenuAll.style.display = "flex";
            
        })







