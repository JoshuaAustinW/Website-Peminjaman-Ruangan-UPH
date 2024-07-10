<?php
session_start();
if (!isset($_SESSION['user_id']) && $_SESSION['authority'] != "admin") {

    if (isset($_COOKIE['remember_me'])) {

        $_SESSION['user_id'] = $_COOKIE['remember_me'];
        $_SESSION['username'] = $_COOKIE['username'];
        $_SESSION['email'] = $_COOKIE['email'];
    } else {

        header("Location: ../../LoginRegis/Login/Login.php");
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#reportSelector').change(function () {
                var report = $(this).val();
                if (report) {
                    $.ajax({
                        url: 'generate_report.php',
                        type: 'GET',
                        data: { report: report },
                        success: function (data) {
                            $('#reportContainer').html(data);
                        }
                    });
                } else {
                    $('#reportContainer').html('');
                }
            });
        });
    </script>
</head>

<body>
    <div id="MenuBox">
        <div id="MasterMenu">

            <a class="HyperlinkHome" href="../AdminHomePage/adminhomepage.php" target="">
                <div class="TextMaster">
                    <i class="fa-solid fa-house" id="iconhomemenu"></i>
                    <h3 class="MenuText">Home</h3>
                </div>
            </a>

            <a class="HyperlinkMyReserve" href="" target="">
                <div class="TextMaster">
                    <h3 class="MenuText">All Reservations</h3>
                </div>
            </a>

        </div>
    </div>

    <header>
        <div id="BoxTitle">
            <i class="fa-solid fa-bars" onclick="ShowMenu(this)" id="menubar"></i>
            <div id="Title">Web Peminjaman Ruangan</div>
            <a class="homebut" href="../AdminHomePage/adminhomepage.php"><i class="fa-solid fa-house"
                    id="HomeIcon"></i></a>
            <a class="userbut"><i class="fa-solid fa-user" onmouseenter="GantiIcon(this)"
                    onmouseleave="GantiIcon2(this)" id="UserIcon" onclick="ShowUserPopup()"></i></a>
        </div>
    </header>

    <div class="comboboxReserve">
        <select id="reportSelector" class="ComboBoxStatusFilter">
            <option value="">Select a Report</option>
            <option value="user_list">User List</option>
            <option value="user_activity">User Activity</option>
            <option value="user_roles">User Roles</option>
            <option value="room_list">Room List</option>
            <option value="room_utilization">Room Utilization</option>
            <option value="reservation_list">Reservation List</option>
            <option value="daily_reservations">Daily Reservations</option>
            <option value="weekly_reservations">Weekly Reservations</option>
            <option value="monthly_reservations">Monthly Reservations</option>
            <option value="user_reservation_history">User Reservation History</option>
        </select>
    </div>

    <div id="reportContainer">

    </div>

    <div class="UserPopup hidden" id="UserPopup">
        <div class="ButtonLogout" onclick="OpenPage('../../Logout.php')">Logout</div>
    </div>

</body>

</html>