<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        
        if (isset($_COOKIE['remember_me'])) {
            
            $_SESSION['user_id'] = $_COOKIE['remember_me'];
            $_SESSION['username'] = $_COOKIE['username'];
            $_SESSION['email'] = $_COOKIE['email'];
        } else {
            
            header("Location: ../LoginRegis/Login/Login.php");
            exit();
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Peminjaman Ruangan</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="Style.css" />

  <script src="https://kit.fontawesome.com/0020352476.js" crossorigin="anonymous"></script>
</head>

<body>
  <script src="MyReservefungsi.js"></script>

  <div id="MenuBox">
    <div id="MasterMenu">

      <a class="HyperlinkHome" href="../HomePage/homepage.php" target="">
        <div class="TextMaster">
          <i class="fa-solid fa-house" id="iconhomemenu"></i>
          <h3 class="MenuText">Home</h3>
        </div>
      </a>

      <a class="HyperlinkMyReserve" href="" target="">
        <div class="TextMaster">
          <h3 class="MenuText">My Reservations</h3>
        </div>
      </a>

    </div>
  </div>

  <header>
    <div id="BoxTitle">
      <i class="fa-solid fa-bars" onclick="ShowMenu(this)" id="menubar"></i>
      <div id="Title">Web Peminjaman Ruangan</div>
      <a class="homebut" href="../HomePage/index.php"><i class="fa-solid fa-house" id="HomeIcon"></i></a>
      <a class="userbut"><i class="fa-solid fa-user" onmouseenter="GantiIcon(this)"
          onmouseleave="GantiIcon2(this)" id="UserIcon" onclick="ShowUserPopup()"></i></a>
    </div>
  </header>

  <div id="reserveList">
    <div id="BlankSpace"></div>

    <?php


    require '../db.php';


    $sql = "SELECT * FROM forms WHERE status IN ('pending', 'approved') AND user_id = ?";
    $stmt = $conn->prepare($sql);

    $user_id = $_SESSION['user_id'];

    if ($stmt === false) {
      die("Error preparing the statement: " . $conn->error);
    }
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result === false) {
    die("Error executing the statement: " . $stmt->error);
    }
    
    $numberofForm = 0; //jumlah form yang ada
    $roomname = array(); //array untuk menyimpan nama ruangan dalam form 
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $nomorRuangan = (string)$row['ruangan'];
        if($nomorRuangan[0] == 1){
          $Gedung = 'AD';
        } else $Gedung = 'LP';
        
        $numberofForm = $numberofForm + 1; //tambah 1 setiap kali ada form yang diambil
        echo "
                    <div class='maincontent'>
                      <div class='ImageContainer'>
                        <div class='RoomName'>$Gedung-" . $row["ruangan"] . "</div>
                        <div class='RoomImage'><img src='../res/img/CompLab.png' alt='' /></div>
                      </div>
                      <div class='details'>
                        <span class='startTime'>Start Time : " . substr($row["start"], 11) . "</span>
                        <span class='date'>Date : " . $row["date"] . "</span>
                        <span class='endTime'>End Time : " . substr($row["end"], 11) . "</span>
                        <span class='status'>Status : " . $row["status"] . " </span>
                      </div>
                      <form method='post' action=''>
                        <input type='hidden' name='reservation_id' value='" . $row['id'] . "'>
                        <button type='submit' class='cancel' name='cancel_reservation'>CANCEL</button>
                      </form>
                    </div>";
        array_push($roomname, $row["ruangan"]); //masukkan nama ruangan ke dalam array
      }
    } else {
      
    }

    $stmt->close();
    $conn->close();

    /*

    $roomNamesString = ""; //string untuk menampilkan nama dan lokasi ruangan
    for ($i = 0; $i < $numberofForm; $i++) { //looping untuk menampilkan nama dan lokasi ruangan
      if ($roomname[$i][0] == "1") { //jika ruangan dimulai dengan angka 1, maka ruangan tersebut berada di Arya Duta
      $roomNamesString .= "Arya Duta " . $roomname[$i] . "\\n"; //tambahkan nama ruangan ke dalam string
      } else { //jika ruangan dimulai bukan angka 1, maka ruangan tersebut berada di Lippo
      $roomNamesString .= "Lippo " . $roomname[$i] . "\\n"; //tambahkan nama ruangan ke dalam string
      }
    }
    echo "<script>alert('" . $roomNamesString . "');</script>"; //tampilkan nama dan lokasi ruangan dalam alert
    
    */
    
    ?>

  </div>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancel_reservation'])) {
    $reservation_id = $_POST['reservation_id'];

    require '../db.php';

    $sql = "DELETE FROM forms WHERE id = $reservation_id";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Reservation canceled successfully'); window.location.href = window.location.href;</script>";
      exit;
    } else {
      echo "<script>alert('Error canceling reservation: " . $conn->error . "');</script>";
    }
    $conn->close();
  }
  ?>

  <div class="UserPopup hidden" id="UserPopup">
        <div class="ButtonLogout" onclick="OpenPage('../Logout.php')">Logout</div>
        <div style="font-family: 'Work Sans', sans-serif; width: 100%; text-align:left; font-weight: bold; margin-top: 5%; font-size: 20px;">
            <?php echo 'Welcome, ' . $_SESSION['username'] . '!'; ?>
            <br>
            Status: User
        </div>
    </div>

</body>

</html>