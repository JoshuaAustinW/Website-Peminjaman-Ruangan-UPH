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

    <div id="MenuBox">

        <div id="MasterMenu">

            <a class="HyperlinkHome" href="" target="">
                <div class="TextMaster"> <i class="fa-solid fa-house" id="iconhomemenu"></i> <h3 class="MenuText">Home</h3> </div>
            </a>

            <a class="HyperlinkMyReserve" href="../MyReservePage/MyReserve.html" target="">
                <div class="TextMaster"> <h3 class="MenuText">My Reservations</h3> </div>
            </a>

        </div>

    </div>

    <div id="BoxList">

        <a href="https://www.uph.edu/id/" target="_blank" id="uphedu"><img id="Logo" src="../res/img/UPH_LOGO_Color.png" alt="UPH Logo"></a>
        
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
            <a class="userbut" href=""><i class="fa-solid fa-user" onmouseenter="GantiIcon(this)" onmouseleave="GantiIcon2(this)" id="UserIcon"></i></a>
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
            <div class="RoomText"><h1 align="center" id="txt0">ROOM-5XX</h1></div>
            <div class="ImgContainer"><img id="img0" class="RoomImage" src="../res/img/CompLab.png" alt="classroom Img"></div>

            <div class="WhiteBoxInRoomSelection">
                <div class="ButtonPinjam" onclick="ButtonPinjam1()">Pinjam</div>
                <div class="ButtonDetails" onclick="ButtonDetails1()">Details</div>
            </div>
        </div>

        <div class="ButtonRoom">
            <div class="RoomText"><h1 align="center" id="txt1">ROOM-5XX</h1></div>
            <div class="ImgContainer"><img id="img1" class="RoomImage" src="../res/img/CompLab.png" alt="classroom Img"></div>

            <div class="WhiteBoxInRoomSelection">
                <div class="ButtonPinjam" onclick="ButtonPinjam2()">Pinjam</div>
                <div class="ButtonDetails" onclick="ButtonDetails2()">Details</div>
            </div>
        </div>

        <div class="ButtonRoom">
            <div class="RoomText"><h1 align="center" id="txt2">ROOM-5XX</h1></div>
            <div class="ImgContainer"><img id="img2" class="RoomImage" src="../res/img/CompLab.png" alt="classroom Img"></div>

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
                <div class="RoomText"><h1 align="center" id="txtPopup">ROOM-5XX</h1></div>
                <div class="ImgContainerForm"><img id="img2" class="RoomImageForm" src="../res/img/CompLab.png" alt="classroom Img"></div>
            </div>

            <div class="inputPinjam">
                <h1 class="FormTitle">Form Peminjaman Ruangan</h1>
                <form>
                    <label class="labelInput" for="StartTime">Start Time: </label><input type="time" class="inputTime" name="StartTime" id="StartTime">
                    <br><br>
                    <label class="labelInput" for="EndTime">End Time: </label><input type="time" class="inputTime" name="EndTime" id="EndTime">
                    <br><br>    
                    <label class="labelInput" for="inputDate">Date: </label><input type="date" class="inputDate" name="inputDate" id="inputDate">
                    <br><br>
                    <label class="labelInput" for="Description">Description: </label>
                    <br>
                    <textarea name="Description" id="Description" class="Description" rows="4"></textarea>
                    <br><br>
                    <input type="submit" class="submitButton" value="Submit">
                </form>
            </div>

            <i class="fa-solid fa-xmark" id="xbutton" onclick="ClosePopupPinjam()"></i>

        </div>

        <div class="FormDetails" id="FormDetails">
            <div class="ButtonRoomForm">
                <div class="RoomText"><h1 align="center" id="txtPopupDetails">ROOM-5XX</h1></div>
                <div class="ImgContainerForm"><img id="img2" class="RoomImageForm" src="../res/img/CompLab.png" alt="classroom Img"></div>
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

<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "peminjamanruangan"; 
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }
    
    
    $sql = "SELECT no, tipe, kapasitas, lokasi FROM ruangan";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Define an empty array to store venue objects
        $semua_ruangan = array();
    
        // Fetch data and construct objects
        while ($row = $result->fetch_assoc()) {
            $ruangan = new stdClass();
            $ruangan->number = $row["no"];
            $ruangan->type = $row["tipe"];
            $ruangan->capacity = $row["kapasitas"];
            $ruangan->location = $row["lokasi"];
    
            // Push the object into the array
            $semua_ruangan[] = $ruangan;
        }
        
        $semua_ruangan_json = json_encode($semua_ruangan);

        echo "<script>var semuaRuangan = $semua_ruangan_json;</script>";

    }
    
    $conn->close();
    
?>



</body>
</html>