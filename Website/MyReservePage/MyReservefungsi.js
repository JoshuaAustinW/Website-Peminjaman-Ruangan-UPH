

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
    a.classList.add("fa-regular");
}

let GantiIcon2 = function(a) {
    a.classList.remove("fa-regular");
    a.classList.add("fa-solid");
}

function ShowUserPopup() {
    var popup = document.getElementById("UserPopup");
    if (popup.classList.contains("hidden")) {
      popup.classList.remove("hidden");
    } else {
      popup.classList.add("hidden");
    }
  }