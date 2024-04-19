//Halo saya joshua
let filteredRuangan;
var roomIndex = 0;
function filter() {
    let selectedBuilding = document.getElementById('SelectBuilding').value;
    if (selectedBuilding == "All") {
        filteredRuangan = semuaRuangan;
    } else {

        filteredRuangan = semuaRuangan.filter(room => room.location == selectedBuilding);
    }
    displayRooms();
}

function displayRooms() {
    for (var i = 0; i < Math.min(filteredRuangan.length - roomIndex, 3); i++) {
        document.getElementById('txt' + i).innerText = 'ROOM-' + filteredRuangan[roomIndex + i].number;
    }
}

window.onload = function() {
    filter();
    document.getElementById('SelectBuilding').onchange = function() {
        roomIndex=0;
        filter();
        console.log(semuaRuangan);
        console.log(filteredRuangan);
    };
};

function forwardArrow() {
    roomIndex += 3;
    if (roomIndex >= filteredRuangan.length) {
        roomIndex = Math.max(filteredRuangan.length - 3, 0);
    }
    filter();
}

function backArrow() {
    roomIndex -= 3;
    if (roomIndex < 0) {
        roomIndex = 0;
    }
    filter();
}

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
    document.getElementById('txtPopup').innerHTML = document.getElementById('txt0').innerHTML;
    OpenPopupPinjam();
}

function ButtonPinjam2(){
    document.getElementById('txtPopup').innerHTML = document.getElementById('txt1').innerHTML;
    OpenPopupPinjam();
}

function ButtonPinjam3(){
    document.getElementById('txtPopup').innerHTML = document.getElementById('txt2').innerHTML;
    OpenPopupPinjam();
}