function ShowMenu() {
  let popUpElement = document.getElementById("MenuBox");
  if (
    popUpElement.style.display === "none" ||
    popUpElement.style.display === ""
  ) {
    popUpElement.style.display = "block";
  } else {
    popUpElement.style.display = "none";
  }
}

let GantiIcon = function (a) {
  a.classList.remove("fa-solid");
  a.classList.add("fa-regular");
};

let GantiIcon2 = function (a) {
  a.classList.remove("fa-regular");
  a.classList.add("fa-solid");
};

function EditStatus(a) {
  var saveButt = document.getElementById("SaveButton" + a);
  var loader = document.getElementById("loader" + a);
  var form = document.getElementById("reservationForm" + a);

  loader.style.display = "flex";
  saveButt.style.display = "none";

  form.action = "EditStatusDB.php";
  form.submit();
}

function OpenPage(a) {
  window.location.href = a;
}

function ShowUserPopup() {
  var popup = document.getElementById("UserPopup");
  if (popup.classList.contains("hidden")) {
    popup.classList.remove("hidden");
  } else {
    popup.classList.add("hidden");
  }
}

function FilterReservations() {
  var comboboxValue = document.getElementById("comboboxReserve");
  var list = document.getElementById("reserveList");

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "FetchFromDB.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      if (response.status === "success") {
        list.innerHTML = response.message;
      } else {
        list.innerHTML = response.message;
      }
    }
  };

  var params = "status=" + encodeURIComponent(comboboxValue.value);

  xhr.send(params);
}
