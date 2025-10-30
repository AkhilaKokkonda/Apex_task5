<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Add New Student</h2>

  <form method="POST">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Roll Number:</label>
    <input type="text" name="roll" required>

    <label>Class:</label>
    <input type="text" name="class" required>

    <input type="submit" name="save" value="Save Student">
  </form>

  <div class="center">
    <a href="index.php">⬅️ Back to Home</a>
  </div>

  <?php
  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];

    $sql = "INSERT INTO students (name, roll_no, class) VALUES ('$name', '$roll', '$class')";
    if (mysqli_query($conn, $sql)) {
      echo "<div class='message'>✅ Student added successfully!</div>";
    } else {
      echo "<div class='message'>❌ Error adding student.</div>";
    }
  }
  ?>
</body>
</html>
