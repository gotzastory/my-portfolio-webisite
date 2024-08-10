
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet"> <!-- ลิงก์ฟอนต์ Kanit -->
<title>สมัครสมาชิก</title>
<style>
    body {
        font-family: 'Kanit', sans-serif; /* ใช้ฟอนต์ Kanit */
        background-color: #f1f1f1;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .navbar-custom {
        font-family: "Kanit", sans-serif; /* Change to Kanit font */
        font-size: 18px; /* Font size for the navbar */
    }
    .navbar-brand {
        font-size: 24px; /* Larger font size for the brand */
    }
    .dropdown-item {
        font-size: 16px; /* Font size for dropdown items */
    }
    .container {
        width: 300px;
        padding: 16px;
        background-color: rgba(255, 255, 255, 0.8);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        margin-top: 80px; /* เพิ่มระยะห่างจาก navbar */
        font-family: 'Kanit', sans-serif; /* ใช้ฟอนต์ Kanit */
    }
    .container h2 {
        text-align: center;
        margin-bottom: 24px;
    }
    .form-control {
        margin-bottom: 16px;
    }
    .btn-primary,
    .btn-success {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
    }
    .theme-toggle {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s;
    }
    .theme-toggle:hover {
        background-color: #f1f1f1;
    }
    .theme-toggle i {
        font-size: 24px;
        color: #4CAF50;
    }
    .highlight {
        color:  #2f8d3a; /* เปลี่ยนเป็นสีที่ต้องการ */
    } 
</style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar-custom"> <!-- Add navbar-custom class -->
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Portfolio.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">About</button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="about-me.html">ข้อมูลส่วนตัว</a></li>
                        <li><a class="dropdown-item" href="about-edu.html">ประวัติการศึกษา</a></li>
                        <li><a class="dropdown-item" href="about-knowhow.html">ความรู้ ความสามารถ</a></li>
                        <li><a class="dropdown-item" href="about-activities.html">กิจกรรม</a></li>
                        <li><a class="dropdown-item" href="about-skill.html">ทักษะ</a></li>
                        <li><a class="dropdown-item" href="about-college.html">แผนก/วิชาการ</a></li>
                    </ul>
                </li>
            </ul>
            <div class="ms-auto">
        <a class="btn btn-outline-success" href="regis.php" role="button">สมัครสมาชิก</a>
            </div>
        </div>
    </div>
</nav>
<!-- navbar -->
    <!-- Regis -->
    <div class="container">
    <h2 class="text-center">สมัคร<span class="highlight">สมาชิก</span></h2>
        <form id="registerForm" method="POST" action="">
            <div class="form-group">
                <label for="registerName">ชื่อ:</label>
                <input type="text" class="form-control" id="registerName" name="nameregis" required>
            </div>
            <div class="form-group">
                <label for="registerSurname">นามสกุล:</label>
                <input type="text" class="form-control" id="registerSurname" name="surnameresgis" required>
            </div>
            <div class="form-group">
                <label for="registerAddress">ที่อยู่:</label>
                <textarea class="form-control" rows="2" id="registerAddress" name="adregis" required></textarea>
            </div>
            <div class="form-group">
                <label for="registerSex">เพศ:</label>
                <select class="form-control" id="registerSex" name="sex" required>
                    <option selected>เลือกเพศ</option>
                    <option value="1">ชาย</option>
                    <option value="2">หญิง</option>
                    <option value="3">LGBTQ+</option>
                    <option value="4">ไม่ระบุ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="registerClass">ชั้นปี:</label>
                <select class="form-control" id="registerClass" name="class" required>
                    <option selected>เลือกชั้นปี</option>
                    <option value="1">ปวช.1</option>
                    <option value="2">ปวช.2</option>
                    <option value="3">ปวช.3</option>
                    <option value="4">ปวส.1</option>
                    <option value="5">ปวส.2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="registerCollege">วิทยาลัย:</label>
                <input type="text" class="form-control" id="registerCollege" name="college" required>
            </div>
            <div class="row mb-3">
                <div class="d-grid gap-2 col-12 mx-auto">
                    <button type="submit" class="btn btn-success">สมัครสมาชิก</button>
                </div>
            </div>
        </form>
    </div>
    <button class="theme-toggle" onclick="toggleTheme()">
        <i class="bi bi-brightness-high"></i>
    </button>
    <script>
        function toggleTheme() {
            const body = document.body;
            const themeToggleButton = document.querySelector('.theme-toggle i');
            body.classList.toggle('dark-theme');
            body.classList.toggle('light-theme');

            if (body.classList.contains('dark-theme')) {
                themeToggleButton.classList.remove('bi-brightness-high');
                themeToggleButton.classList.add('bi-brightness-low');
                body.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
                document.querySelector('.container').style.backgroundColor = '#333';
                document.querySelector('.container').style.color = 'white';
            } else {
                themeToggleButton.classList.remove('bi-brightness-low');
                themeToggleButton.classList.add('bi-brightness-high');
                body.style.backgroundColor = '#f1f1f1';
                document.querySelector('.container').style.backgroundColor = 'white';
                document.querySelector('.container').style.color = 'black';
            }
        }
    </script>
    <!-- Regis -->
</body>
</html>
