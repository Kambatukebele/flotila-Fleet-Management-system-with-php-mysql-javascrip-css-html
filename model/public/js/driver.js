const driverList = document.querySelector(".driver_list");
const extraInfo = document.querySelector(".extra_info");
const closeBtn = document.querySelector(".material-symbols-sharp");
const updateBtn = document.querySelector(".upd");

// ON CLICK EVENT LISTENER ON UPDATE BTN

updateBtn.addEventListener("click", ()=>{
    driverList.style.display = "none";
    extraInfo.style.display = "flex";
})

//CLOSE BTN ICON

closeBtn.addEventListener("click", ()=>{
    extraInfo.style.display = "none";
    driverList.style.display = "flex";
})