<!DOCTYPE html>
<html>

<head>
    <title>Room Reservation Reports</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Room Reservation Reports</h1>
    <select id="reportSelector">
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

    <div id="reportContainer">
        <!-- Report will be loaded here -->
    </div>

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
</body>

</html>