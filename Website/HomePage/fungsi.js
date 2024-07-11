let filteredRuangan;
var roomIndex = 0;

function filter() {
  let selectedBuilding = document.getElementById("SelectBuilding").value;
  if (selectedBuilding == "All") {
    filteredRuangan = semuaRuangan;
  } else {
    filteredRuangan = semuaRuangan.filter(
      (room) => room.lokasi == selectedBuilding
    );
  }
  displayRooms();
}

function displayRooms() {
  for (var i = 0; i < Math.min(filteredRuangan.length - roomIndex, 3); i++) {
    document.getElementById("txt" + i).innerText =
      "ROOM-" + filteredRuangan[roomIndex + i].no;
  }
}

window.onload = function () {
  filter();
  document.getElementById("SelectBuilding").onchange = function () {
    roomIndex = 0;
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

function ClosePopupPinjam() {
  let popupmenu = document.getElementById("FormPinjam");
  let popupmenu2 = document.getElementById("FormDetails");
  let popupbg = document.getElementById("PopupBG");
  popupmenu.style.display = "none";
  popupmenu2.style.display = "none";
  popupbg.style.display = "none";
  
  let StartTime = document.getElementById("StartTime");
  let EndTime = document.getElementById("EndTime");
  StartTime.value = "";
  EndTime.value = "";
  StartTime.disabled = true;
  EndTime.disabled = true;
}

function OpenPopupPinjam() {
  let popupmenu = document.getElementById("FormPinjam");
  let popupbg = document.getElementById("PopupBG");
  popupmenu.style.display = "flex";
  popupbg.style.display = "block";
}

function OpenPopupDetails() {
  let popupmenu = document.getElementById("FormDetails");
  let popupbg = document.getElementById("PopupBG");
  popupmenu.style.display = "flex";
  popupbg.style.display = "block";
}

function ButtonPinjam1() {
  let nomorruangan = document.getElementById("txt0").innerHTML;
  document.getElementById("txtPopup").innerHTML =
    document.getElementById("txt0").innerHTML;
  document
    .getElementById("Room")
    .setAttribute("value", nomorruangan.substr(-3));
  OpenPopupPinjam();
}

function ButtonPinjam2() {
  let nomorruangan = document.getElementById("txt1").innerHTML;
  document.getElementById("txtPopup").innerHTML =
    document.getElementById("txt1").innerHTML;
  document
    .getElementById("Room")
    .setAttribute("value", nomorruangan.substr(-3));
  OpenPopupPinjam();
}

function ButtonPinjam3() {
  let nomorruangan = document.getElementById("txt2").innerHTML;
  document.getElementById("txtPopup").innerHTML =
    document.getElementById("txt2").innerHTML;
  document
    .getElementById("Room")
    .setAttribute("value", nomorruangan.substr(-3));
  OpenPopupPinjam();
}

function ButtonDetails1() {
  let nomorruangan = document.getElementById("txt0").innerHTML;
  let IndexRuanganTerpilih = filteredRuangan.findIndex(
    (room) => room.no === nomorruangan.replace("ROOM-", "")
  );
  let tiperuangan = filteredRuangan[IndexRuanganTerpilih].tipe;
  let kapasitasruangan = filteredRuangan[IndexRuanganTerpilih].kapasitas;
  let lokasiruangan = filteredRuangan[IndexRuanganTerpilih].lokasi;

  document.getElementById("txtPopupDetails").innerHTML = nomorruangan;
  document.getElementById("Nomor").innerHTML =
    "Nomor Ruangan: " + nomorruangan.replace("ROOM-", "");
  document.getElementById("Tipe").innerHTML = "Tipe Ruangan: " + tiperuangan;
  document.getElementById("Kapasitas").innerHTML =
    "Kapasitas Ruangan: " + kapasitasruangan;
  document.getElementById("Lokasi").innerHTML =
    "Lokasi Ruangan: " + lokasiruangan;
  OpenPopupDetails();
}

function ButtonDetails2() {
  let nomorruangan = document.getElementById("txt1").innerHTML;
  let IndexRuanganTerpilih = filteredRuangan.findIndex(
    (room) => room.no === nomorruangan.replace("ROOM-", "")
  );
  let tiperuangan = filteredRuangan[IndexRuanganTerpilih].tipe;
  let kapasitasruangan = filteredRuangan[IndexRuanganTerpilih].kapasitas;
  let lokasiruangan = filteredRuangan[IndexRuanganTerpilih].lokasi;

  document.getElementById("txtPopupDetails").innerHTML = nomorruangan;
  document.getElementById("Nomor").innerHTML =
    "Nomor Ruangan: " + nomorruangan.replace("ROOM-", "");
  document.getElementById("Tipe").innerHTML = "Tipe Ruangan: " + tiperuangan;
  document.getElementById("Kapasitas").innerHTML =
    "Kapasitas Ruangan: " + kapasitasruangan;
  document.getElementById("Lokasi").innerHTML =
    "Lokasi Ruangan: " + lokasiruangan;
  OpenPopupDetails();
}

function ButtonDetails3() {
  let nomorruangan = document.getElementById("txt2").innerHTML;
  let IndexRuanganTerpilih = filteredRuangan.findIndex(
    (room) => room.no === nomorruangan.replace("ROOM-", "")
  );
  let tiperuangan = filteredRuangan[IndexRuanganTerpilih].tipe;
  let kapasitasruangan = filteredRuangan[IndexRuanganTerpilih].kapasitas;
  let lokasiruangan = filteredRuangan[IndexRuanganTerpilih].lokasi;

  document.getElementById("txtPopupDetails").innerHTML = nomorruangan;
  document.getElementById("Nomor").innerHTML =
    "Nomor Ruangan: " + nomorruangan.replace("ROOM-", "");
  document.getElementById("Tipe").innerHTML = "Tipe Ruangan: " + tiperuangan;
  document.getElementById("Kapasitas").innerHTML =
    "Kapasitas Ruangan: " + kapasitasruangan;
  document.getElementById("Lokasi").innerHTML =
    "Lokasi Ruangan: " + lokasiruangan;
  OpenPopupDetails();
}

function SubmitForm() {}

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

document.addEventListener("DOMContentLoaded", function () {
  // Set the minimum date for the date input field
  const dateInput = document.getElementById("inputDate");
  const today = new Date();
  const minDate = new Date(today);
  minDate.setDate(minDate.getDate() + 2);
  const minDateString = minDate.toISOString().split("T")[0];
  dateInput.setAttribute("min", minDateString);

  // Validate end time is not before start time
  const form = document.querySelector("form");
  form.addEventListener("submit", function (event) {
    const startTime = document.getElementById("StartTime").value;
    const endTime = document.getElementById("EndTime").value;
    if (startTime >= endTime) {
      event.preventDefault();
      alert("End time must be after start time.");
    }
  });

  document.getElementById("StartTime").disabled = true;
  document.getElementById("EndTime").disabled = true;

  // Add event listener to inputDate
  document.getElementById("inputDate").addEventListener("change", function () {
    // Enable StartTime and EndTime when inputDate has a value
    if (this.value) {
      document.getElementById("StartTime").disabled = false;
      document.getElementById("EndTime").disabled = false;
    } else {
      // Disable StartTime and EndTime if inputDate is cleared
      document.getElementById("StartTime").disabled = true;
      document.getElementById("EndTime").disabled = true;
    }
  });
});
