
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Peminjaman Ruangan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="Style.css" />

    <script
      src="https://kit.fontawesome.com/0020352476.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <script src="MyReservefungsi.js"></script>

    <div id="MenuBox">
      <div id="MasterMenu">

        <a class="HyperlinkHome" href="../HomePage/index.php" target="">
          <div class="TextMaster">
            <i class="fa-solid fa-house" id="iconhomemenu"></i>
            <h3 class="MenuText">Home</h3>
          </div>
        </a>

        <a class="HyperlinkMyReserve" href="" target="">
          <div class="TextMaster"> <h3 class="MenuText">My Reservations</h3> </div>
        </a>

      </div>
    </div>

    <header>
      <div id="BoxTitle">
        <i class="fa-solid fa-bars" onclick="ShowMenu(this)" id="menubar"></i>
        <div id="Title">Web Peminjaman Ruangan</div>
        <a class="homebut" href="../HomePage/index.php"><i class="fa-solid fa-house" id="HomeIcon"></i></a>
        <a class="userbut" href=""><i
          class="fa-solid fa-user"
          onmouseenter="GantiIcon(this)"
          onmouseleave="GantiIcon2(this)"
          id="UserIcon"
        ></i></a>
      </div>
    </header>

    <div id="reserveList">
      <div id="BlankSpace"></div>




<!--
          <div class="maincontent">
              <div class="ImageContainer">
                <div class="RoomName">LP-501</div>
                <div class="RoomImage"><img src="../res/img/CompLab.png" alt="" /></div>
              </div>
            
              <div class="details">
                <span class="startTime">Start Time :</span>
                <span class="date">Date :</span>
                <span class="endTime">End Time :</span>
                <span class="status">Status :</span>
              </div>
          
              <button class="cancel">CANCEL</button>
          </div>
-->







          <?php

          
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "peminjamanruangan";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $database);

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

         
          $sql = "SELECT * FROM forms WHERE status IN ('pending', 'approved')";
          $result = $conn->query($sql);
          

          
          if ($result->num_rows > 0) {
              // Output data of each row
              while($row = $result->fetch_assoc()) {
                 
                  
                  echo "<div class='maincontent'>
                            <div class='ImageContainer'>
                              <div class='RoomName'>LP-".$row["ruangan"]."</div>
                              <div class='RoomImage'><img src='../res/img/CompLab.png' alt='' /></div>
                            </div>
                          
                            <div class='details'>
                              <span class='startTime'>Start Time : ".substr($row["start"], 11)."</span>
                              <span class='date'>Date : ".$row["date"]."</span>
                              <span class='endTime'>End Time : ".substr($row["end"], 11)."</span>
                              <span class='status'>Status : ".$row["status"]." </span>
                            </div>
                        
                            
                            <button type='submit' class='cancel' name='cancel_reservation' id='cancelButton' onclick=''>CANCEL</button>
                            
                           
                        </div>                        
                        ";
              }
          } else {
              echo "0 results";
          }

          // Close connection //<!-- <button class='cancel'>CANCEL</button>    deleteData(". $row['id'] .")
          $conn->close();
          ?>

    </div>
    
  </body>
</html>
