<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Attendance</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>📅 Attendance Records</h1>
    <table>
        <tr>
            <th>Date</th>
            <th>Student</th>
            <th>Status</th>
        </tr>
        <?php
        $result = $conn->query("SELECT a.date, s.name, a.status FROM attendance a 
                                JOIN students s ON a.student_id = s.id 
                                ORDER BY a.date DESC");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['date']}</td>
                        <td>{$row['name']}</td>
                        <td class='" . strtolower($row['status']) . "'>{$row['status']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No attendance records found</td></tr>";
        }
        ?>
    </table>
    <a href="index.php" class="link">⬅ Back to Mark Attendance</a>
</div>
</body>
</html>
