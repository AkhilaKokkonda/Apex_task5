# 🎓 Student Attendance Management System  
### 📌 APEX TASK 5 - Capstone Project & Deployment | ApexPlanet Internship


## 🚀 Project Overview


```
The **Student Attendance Management System** is a web-based application designed to simplify attendance tracking in educational institutions.  
It enables teachers to securely log in, manage students, mark daily attendance, and view attendance records efficiently.

This project was developed as part of **Task 5 (Capstone Project & Deployment)** under the **ApexPlanet Internship Program**, focusing on end-to-end project design, development, and deployment.

```

## 🎯 Objectives

```
- Develop a **secure teacher login system** for authentication.  
- Enable teachers to **add and manage student details**.  
- Provide an easy-to-use interface to **mark and view attendance records**.  
- Store data securely using a **MySQL database**.  
- Build a professional-grade capstone project ready for deployment.

```


## 🧩 Features

```  
✅ Add New Students to the System  
✅ Mark Attendance (Present / Absent)  
✅ View Attendance by Date  
✅ Simple and Responsive User Interface (HTML + CSS)  
✅ Database Integration with MySQL  


```

## 🛠️ Tech Stack


```
| Technology | Description |
|-------------|-------------|
| 💻 **Frontend** | HTML, CSS |
| ⚙️ **Backend** | PHP |
| 🗄️ **Database** | MySQL |
| 🔧 **Server** | XAMPP (Apache + MySQL) |

```

## 🧠 Database Setup

```
Run the following SQL script in **phpMyAdmin** to create and populate your database:

```sql
CREATE DATABASE IF NOT EXISTS attendance_db;
USE attendance_db;

-- Students Table
CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL
);

-- Attendance Table
CREATE TABLE attendance (
  id INT AUTO_INCREMENT PRIMARY KEY,
  student_id INT NOT NULL,
  date DATE NOT NULL,
  status ENUM('Present','Absent') NOT NULL,
  FOREIGN KEY (student_id) REFERENCES students(id)
);


-- Sample Students
INSERT INTO students (name) VALUES 
('Sofia'),
('Ravi'),
('Sita'),
('Rahul'),
('Priya'),
('Karan'),
('Divya'),
('Ankit'),
('Arjun');

```
# 📂 Folder Structure

```
APEX_TASK5/
│
├── add_student.php
├── db.php
├── index.php
├── mark_attendance.php
├── view_attendance.php
├── style.css
└── README.md

```

# ⚙️ Installation & Setup


```
1️⃣ Install XAMPP
 and start Apache and MySQL.
2️⃣ Copy the folder APEX_TASK5 into C:\xampp\htdocs\.
3️⃣ Open phpMyAdmin
.
4️⃣ Create a new database named attendance_db and import the SQL above.
5️⃣ Run the project in your browser:
👉 http://localhost/APEX_TASK5/index.php

```
