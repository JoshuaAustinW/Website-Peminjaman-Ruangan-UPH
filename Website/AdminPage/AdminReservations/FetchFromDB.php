<?php
    require '../../db.php';
    session_start();
    $ReservationItems = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $status = $_POST['status'];
    
        if($status != 'all'){
            $sql = "SELECT * FROM forms WHERE status = '$status'";
            $result = $conn->query($sql);

        }else{
            $sql = "SELECT * FROM forms";
            $result = $conn->query($sql);
        }


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $nomorRuangan = (string)$row['ruangan'];
                if($nomorRuangan[0] == 1){
                $Gedung = 'AD';
                } else $Gedung = 'LP';

                $ReservationItems.="
                    <div class='maincontent'>
                      <div class='ImageContainer'>
                        <div class='RoomName'>$Gedung-" . $row["ruangan"] . "</div>
                        <div class='RoomImage'><img src='../../res/img/CompLab.png' alt='' /></div>
                      </div>
                      <div class='details'>
                        <span class='startTime'>Start Time : " . substr($row["start"], 11) . "</span>
                        <span class='date'>Date : " . $row["date"] . "</span>
                        <span class='endTime'>End Time : " . substr($row["end"], 11) . "</span>
                        <span class='status'>Status : " . $row["status"] . " </span>
                      </div>
                      <form id='reservationForm" . $row['id'] . "' method='post' action=''>
                        <input type='hidden' name='reservation_id' id='reservation_id" . $row['id'] . "' value='" . $row['id'] . "'>

                        <label for='StatusSelection" . $row['id'] . "' class='label-set-status'>Edit Status</label>
                        <select class='comboboxStatus' name='StatusSelection' id='StatusSelection" . $row['id'] . "'>
                            <option value='pending'>Pending</option>
                            <option value='declined'>Declined</option>
                            <option value='approved'>Approved</option>
                        </select>
                        <input type='button' class='buttonSaveStatus' id='SaveButton".$row['id']."' value='Save' onclick='EditStatus(" . $row['id'] . ")'>
                        <div class='loader' id='loader" . $row['id'] . "'></div>
                      </form>

                        <script>
                            document.getElementById('StatusSelection" . $row['id'] . "').value = '".$row["status"]."';
                        </script>
                    </div>";
            }
            $response["status"] = "success";
            $response["message"] = $ReservationItems;
        } else{
            $NoRes = 'No Reservations';
            $response["message"] = $NoRes; //(Optional) No Notes Message <element>
        }

        $conn->close();
        echo json_encode($response);
    }