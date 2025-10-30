<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Mark Attendance</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Mark Attendance</h2>

  <form method="POST">
    <label>Date:</label>
    <input type="date" name="date" required>

    <?php
    $students = mysqli_query($conn, "SELECT * FROM students");
    if (mysqli_num_rows($students) > 0) {
      echo "<table border='1'><tr><th>Name</th><th>Roll No</th><th>Status</th></tr>";
      while ($row = mysqli_fetch_assoc($students)) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['roll_no']}</td>
                <td>
                  <select name='status[{$row['id']}]'>
                    <option value='Present'>Present</option>
                    <option value='Absent'>Absent</option>
                  </select>
                </td>
              </tr>";
      }
      echo "</table>";
      echo "<br><input type='submit' name='submit' value='Save Attendance'>";
    } else {
      echo "<div class='message'>No students found!</div>";
    }
    ?>
  </form>

  <div class="center">
    <a href="index.php">⬅️ Back to Home</a>
  </div>

  <?php
  if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    foreach ($_POST['status'] as $student_id => $status) {
      mysqli_query($conn, "INSERT INTO attendance (student_id, date, status) VALUES ('$student_id', '$date', '$status')");
    }
    echo "<div class='message'>✅ Attendance saved successfully!</div>";
  }
  ?>
</body>
</html>

