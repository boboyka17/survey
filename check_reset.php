<?php
if (isset($_GET["id"])) {
    if (isset($_POST)) {
        include('connect.php');
        $id = $_GET["id"];
        $pwd_1 = $_POST["user_pass_1"];
        $pwd_2 = $_POST["user_pass_2"];
        if ($pwd_1 != $pwd_2) {
            header("location:reset.php?error=1&user_id_card=$id");
            exit;
        }
        $sql = sprintf("UPDATE `user` SET user_password='$pwd_2' WHERE user_id_card='$id'");
        if (!$conn->query($sql)) die($conn->error);
        header("location:login.php?success=1");
    }
}
