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
        <form action="reset.php" method="get">
            <img class="mb-4" src="user.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">ลืมรหัสผ่าน</h1>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == '1') {
            ?>
                    <div class="alert alert-danger" role="alert">
                        ไม่พบเลขบัตรประชาชนผู้ใช้
                    </div>
            <?php
                }
            }
            ?>
            <div class="form-floating">
                <input type="text" name="user_id_card" class="form-control" id="floatingInput" placeholder="เลขบัตรประชาชน">
                <label for="floatingInput">เลขบัตรประชาชน</label>
            </div>
            <div class="mb-3">

            </div>

            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">ถัดไป</button>
            <div class="mt-3">
                <a href="login.php" class="link-secondary">ย้อนกลับ</a>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>



</body>

</html>