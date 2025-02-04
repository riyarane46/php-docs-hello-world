<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional, for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #007BFF;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .main-content {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 10px;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .button {
            display: block;
            background-color: #007BFF;
            color: white;
            padding: 10px;
            margin: 10px 0;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .footer {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Welcome to the Student Portal</h1>
    </div>

    <div class="main-content">
        <!-- Course Enrollment Section -->
        <div class="section">
            <h2>Enroll in a Course</h2>
            <p>Select and enroll in available courses</p>
            <a href="enroll.php" class="button">Enroll Now</a>
        </div>

        <!-- Attendance Section -->
        <div class="section">
            <h2>Mark Attendance</h2>
            <p>Mark your attendance for your courses</p>
            <a href="attendance.php" class="button">Mark Attendance</a>
        </div>

        <!-- Schedule Section -->
        <div class="section">
            <h2>View Schedule</h2>
            <p>Check your course schedule</p>
            <a href="schedule.php" class="button">View Schedule</a>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Student Portal. All rights reserved.</p>
    </div>

</body>
</html>

