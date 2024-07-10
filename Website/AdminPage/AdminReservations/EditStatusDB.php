<?php
    require '../../db.php';
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $reservation_id = $_POST['reservation_id'];
        $StatusSelection = $_POST['StatusSelection'];
        
        $stmt = $conn->prepare("UPDATE forms SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $StatusSelection, $reservation_id);

        if ($stmt->execute()) {
            header("Location: AdminReservations.php");
            $stmt->close();
            $conn->close();
        } else {
            $stmt->close();
            $conn->close();
            echo "
            
            <script>

            alert('Failed to change status');
            
            </script>";

            header("Location: AdminReservations.php");
        }
    }