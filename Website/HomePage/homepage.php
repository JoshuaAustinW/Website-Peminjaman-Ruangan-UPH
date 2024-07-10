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
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Ruangan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Style.css">

    <script src="https://kit.fontawesome.com/0020352476.js" crossorigin="anonymous"></script>
</head>

<body>

    <script src="fungsi.js"></script>

    <div id="MenuBox">e

        <div id="MasterMenu">

            <a class="HyperlinkHome" href="" target="">
                <div class="TextMaster"> <i class="fa-solid fa-house" id="iconhomemenu"></i>
                    <h3 class="MenuText">Home</h3>
                </div>
            </a>

            <a class="HyperlinkMyReserve" href="../MyReservePage/MyReserve.php" target="">
                <div class="TextMaster">
                    <h3 class="MenuText">My Reservations</h3>
                </div>
            </a>

        </div>

    </div>

    <div id="BoxList">

        <a href="https://www.uph.edu/id/" target="_blank" id="uphedu"><img id="Logo" src="../res/img/UPH_LOGO_Color.png"
                alt="UPH Logo"></a>

        <select id="SelectBuilding">
            <option value="All">All</option>
            <option value="Lippo">Lippo Campus</option>
            <option value="AryaDuta">Aryaduta Campus</option>
        </select>

    </div>

    <Header>

        <div id="BoxTitle">
            <i class="fa-solid fa-bars" onclick="ShowMenu(this)" id="menubar"></i>
            <div id="Title">Web Peminjaman Ruangan</div>
            <a class="homebut" href=""><i class="fa-solid fa-house" id="HomeIcon"></i></a>
            <a class="userbut"><i class="fa-solid fa-user" onmouseenter="GantiIcon(this)"
                    onmouseleave="GantiIcon2(this)" id="UserIcon" onclick="ShowUserPopup()"></i></a>
        </div>

    </Header>

    <div id="BGimgcontainer"><img id="imgcampus" src="../res/img/campus-medan.jpeg" alt="UPH_campus.jpeg"></div>

    <div id="BoxSearch">

        <div class="TitleList">
            <h1 class="RoomList" align="center">Room List</h1>
        </div>

    </div>

    <div class="SelectRoom">

        <div class="BackArrow"><i class="fa-solid fa-arrow-left Arrow" onclick="backArrow()"></i></div>

        <div class="ButtonRoom">
            <div class="RoomText">
                <h1 align="center" id="txt0">ROOM-5XX</h1>
            </div>
            <div class="ImgContainer"><img id="img0" class="RoomImage" src="../res/img/CompLab.png" alt="classroom Img">
            </div>

            <div class="WhiteBoxInRoomSelection">
                <div class="ButtonPinjam" onclick="ButtonPinjam1()">Pinjam</div>
                <div class="ButtonDetails" onclick="ButtonDetails1()">Details</div>
            </div>
        </div>

        <div class="ButtonRoom">
            <div class="RoomText">
                <h1 align="center" id="txt1">ROOM-5XX</h1>
            </div>
            <div class="ImgContainer"><img id="img1" class="RoomImage" src="../res/img/CompLab.png" alt="classroom Img">
            </div>

            <div class="WhiteBoxInRoomSelection">
                <div class="ButtonPinjam" onclick="ButtonPinjam2()">Pinjam</div>
                <div class="ButtonDetails" onclick="ButtonDetails2()">Details</div>
            </div>
        </div>

        <div class="ButtonRoom">
            <div class="RoomText">
                <h1 align="center" id="txt2">ROOM-5XX</h1>
            </div>
            <div class="ImgContainer"><img id="img2" class="RoomImage" src="../res/img/CompLab.png" alt="classroom Img">
            </div>

            <div class="WhiteBoxInRoomSelection">
                <div class="ButtonPinjam" onclick="ButtonPinjam3()">Pinjam</div>
                <div class="ButtonDetails" onclick="ButtonDetails3()">Details</div>
            </div>
        </div>

        <div class="ForwardArrow"><i class="fa-solid fa-arrow-right Arrow" onclick="forwardArrow()"></i></div>

    </div>



    <div class="PopupPinjam" id="PopupBG"></div>

    <div class="FormPinjam" id="FormPinjam">
        <div class="ButtonRoomForm">
            <div class="RoomText">
                <h1 align="center" id="txtPopup">ROOM-5XX</h1>
            </div>
            <div class="ImgContainerForm"><img id="img2" class="RoomImageForm" src="../res/img/CompLab.png"
                    alt="classroom Img"></div>
        </div>

        <div class="inputPinjam">
            <h1 class="FormTitle">Form Peminjaman Ruangan</h1>
            <form method="POST">
                <label class="labelInput" for="Room">Room Number: </label><input style="width: 15%;" type="text"
                    class="inputRoom" name="Room" id="Room" readonly>
                <br><br>
                <label class="labelInput" for="inputDate">Date: </label><input type="date" class="inputDate"
                    name="inputDate" id="inputDate" required>
                <br><br>
                <label class="labelInput" for="StartTime">Start Time: </label><input type="time" class="inputTime"
                    name="StartTime" id="StartTime" required disabled>
                <br><br>
                <label class="labelInput" for="EndTime">End Time: </label><input type="time" class="inputTime"
                    name="EndTime" id="EndTime" required disabled>
                <br><br>
                <label class="labelInput" for="Description">Description: </label>
                <br>
                <textarea name="Description" id="Description" class="Description" rows="4"></textarea>
                <br><br>
                <input type="submit" class="submitButton" value="Submit" onclick="">
            </form>
        </div>

        <i class="fa-solid fa-xmark" id="xbutton" onclick="ClosePopupPinjam()"></i>

    </div>

    <div class="FormDetails" id="FormDetails">
        <div class="ButtonRoomForm">
            <div class="RoomText">
                <h1 align="center" id="txtPopupDetails">ROOM-5XX</h1>
            </div>
            <div class="ImgContainerForm"><img id="img2" class="RoomImageForm" src="../res/img/CompLab.png"
                    alt="classroom Img"></div>
        </div>

        <div class="inputPinjam">
            <h1 class="FormTitle">Detail Ruangan</h1>
            <br>
            <label class="labelInput" id="Nomor">Nomor Ruangan: </label>
            <br><br>
            <label class="labelInput" id="Tipe">Tipe Ruangan: </label>
            <br><br>
            <label class="labelInput" id="Kapasitas">Kapasitas Ruangan: </label>
            <br><br>
            <label class="labelInput" id="Lokasi">Lokasi Ruangan: </label>
        </div>

        <i class="fa-solid fa-xmark" id="xbutton" onclick="ClosePopupPinjam()"></i>

    </div>


    <div class="UserPopup hidden" id="UserPopup">
        <div class="ButtonLogout" onclick="OpenPage('../Logout.php')">Logout</div>
    </div>

    <?php

    require '../db.php';
    require 'classruangan.php';

    function isOverlap($room, $date, $startTime, $endTime, $conn)
    {
        $sql_time = "SELECT * FROM forms WHERE ruangan = ? AND date = ? AND 
            ((start < ? AND end > ?) OR 
             (start < ? AND end > ?) OR 
             (start >= ? AND end <= ?))";
        $stmt = $conn->prepare($sql_time);
        $stmt->bind_param("ssssssss", $room, $date, $endTime, $startTime, $endTime, $endTime, $startTime, $endTime);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }
    
    $sql = "SELECT no, tipe, kapasitas, lokasi FROM ruangan";
    $result = $conn->query($sql);

    $semua_ruangan = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ruangan = new Ruangan($row['no'], $row['tipe'], $row['kapasitas'], $row['lokasi']);
            array_push($semua_ruangan, $ruangan);
        }
    }

    $semua_ruangan_json = json_encode($semua_ruangan);

    echo '<script>
            class Ruangan {
                constructor(no, tipe, kapasitas, lokasi) {
                    this.no = no;
                    this.tipe = tipe;
                    this.kapasitas = kapasitas;
                    this.lokasi = lokasi;
                }
            }

            let rawRuanganData = ' . $semua_ruangan_json . ';
            let semuaRuangan = [];
            for (let i = 0; i < rawRuanganData.length; i++) {
                let ruanganData = rawRuanganData[i];
                let ruangan = new Ruangan(ruanganData.no, ruanganData.tipe, ruanganData.kapasitas, ruanganData.lokasi);
                semuaRuangan.push(ruangan);
            }

            console.log(semuaRuangan);
          </script>';
    // Close the database connection
    $conn->close();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $startTime = $_POST['StartTime'];
        $endTime = $_POST['EndTime'];
        $date = $_POST['inputDate'];
        $description = $_POST['Description'];
        $ruangan = $_POST['Room'];
        $status = "pending";

        $mySQL_startTime = $date . " " . $startTime;
        $mySQL_endTime = $date . " " . $endTime;

        require '../db.php';

        $user_id = $_SESSION['user_id'];
        if (isOverlap($ruangan, $date, $mySQL_startTime, $mySQL_endTime, $conn)) {
            echo "<script>alert('The selected time range overlaps with an existing reservation.');</script>";
        } else {
            $stmt = $conn->prepare("INSERT INTO forms (user_id, ruangan, date, start, end, status, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("issssss", $user_id, $ruangan, $date, $mySQL_startTime, $mySQL_endTime, $status, $description);

            if ($stmt->execute() === TRUE) {
                echo "<script>alert('Form submitted successfully');</script>";
            } else {
                echo "<script>alert('Failed to submit form');</script>";
            }

            $stmt->close();
        }
        $conn->close();
    }
    ?>

</body>

</html>