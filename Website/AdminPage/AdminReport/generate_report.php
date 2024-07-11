<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "peminjaman";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$report = $_GET['report'];

switch ($report) {
    case 'user_list':
        $sql = "SELECT id, username, email, authority FROM Users";
        break;
    case 'user_activity':
        $sql = "SELECT u.id, u.username, COUNT(f.id) AS reservation_count 
                FROM Users u
                LEFT JOIN Forms f ON u.id = f.user_id
                GROUP BY u.id, u.username";
        break;
    case 'room_list':
        $sql = "SELECT no, tipe, kapasitas, lokasi 
                FROM Ruangan";
        break;
    case 'room_utilization':
        $sql = "SELECT r.no, r.tipe, COUNT(f.id) AS reservation_count 
                FROM Ruangan r
                LEFT JOIN Forms f ON r.no = f.ruangan
                GROUP BY r.no, r.tipe";
        break;
    case 'reservation_list':
        $sql = "SELECT f.id, f.user_id, f.ruangan, f.date, f.start, f.end, f.status, f.description 
                FROM Forms f";
        break;
    case 'daily_reservations':
        $sql = "SELECT date, COUNT(*) AS reservation_count 
                FROM Forms 
                GROUP BY date";
        break;
    case 'weekly_reservations':
        $sql = "SELECT YEAR(date) AS year, WEEK(date) AS week, COUNT(*) AS reservation_count 
                FROM Forms 
                GROUP BY YEAR(date), WEEK(date)";
        break;
    case 'monthly_reservations':
        $sql = "SELECT YEAR(date) AS year, MONTH(date) AS month, COUNT(*) AS reservation_count 
                FROM Forms 
                GROUP BY YEAR(date), MONTH(date)";
        break;
    default:
        $sql = "";
}

if ($sql) {
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1' class='table-report'>";
        echo "<tr>";
        while ($fieldinfo = $result->fetch_field()) {
            echo "<th>{$fieldinfo->name}</th>";
        }
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $data) {
                echo "<td>{$data}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
} else {
    echo "Invalid report selected.";
}

$conn->close();
?>