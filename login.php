<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>เข้าสู่ระบบ</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="check_login.php" class="needs-validation" method="post" novalidate>
            <img class="mb-4" src="user.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">เข้าสู่ระบบ</h1>
            <?php
            if (isset($_GET["success"])) {
                if ($_GET["success"] == '1') {
            ?>
                    <div class="alert alert-success" role="alert">
                        เปลี่ยนรหัสผ่านสำเร็จ
                    </div>
            <?php
                }
            }
            ?>
            <div class="form-floating">
                <input type="text" name="user_id_card" class="form-control" id="floatingInput" placeholder="เลขบัตรประชาชน" required>
                <label for="floatingInput">เลขบัตรประชาชน</label>
                <div class="invalid-feedback">กรุณากรอกข้อมูลให้ถูกต้อง</div>
            </div>
            <div class="form-floating">
                <input type="password" name="user_password" class="form-control" id="floatingPassword" placeholder="รหัสผ่าน" required>
                <label for="floatingPassword">รหัสผ่าน</label>
                <div class="invalid-feedback">กรุณากรอกข้อมูลให้ถูกต้อง</div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <a href="home.php" class="link-secondary">กลับสู่หน้าหลัก</a>
                    </div>
                    <div class=" col">
                        <a href="forget.php">ลืมรหัสผ่าน</a>
                    </div>
                </div>
            </div>

            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">เข้าสู่ระบบ</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>



</body>
<script src="validation.js"></script>

</html>