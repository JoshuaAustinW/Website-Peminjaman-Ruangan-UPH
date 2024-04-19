//Halo
function ShowMenu() {
    let popUpElement = document.getElementById('MenuBox');
            if (popUpElement.style.display === 'none' || popUpElement.style.display === '') {
                popUpElement.style.display = 'block';
            } else {
                popUpElement.style.display = 'none';
            }
}

let GantiIcon = function(a) {
    a.classList.remove("fa-solid");
    // Add the new icon class
    a.classList.add("fa-regular");
}

let GantiIcon2 = function(a) {
    a.classList.remove("fa-regular");
    // Add the new icon class
    a.classList.add("fa-solid");
}


function ClosePopupPinjam(){
    let popupmenu = document.getElementById('FormPinjam');
    let popupbg = document.getElementById('PopupBG');
    popupmenu.style.display = 'none';
    popupbg.style.display = 'none';
}

function OpenPopupPinjam(){
    let popupmenu = document.getElementById('FormPinjam');
    let popupbg = document.getElementById('PopupBG');
    popupmenu.style.display = 'flex';
    popupbg.style.display = 'block';
}

function ButtonPinjam1(){
    OpenPopupPinjam();
}