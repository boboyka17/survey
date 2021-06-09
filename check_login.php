<?php
if (isset($_POST)) {
    session_start();
    include('connect.php');
    $user_id_card = $_POST["user_id_card"];
    $user_password = $_POST["user_password"];
    $sql = "SELECT * FROM `user` WHERE user_id_card='$user_id_card' AND user_password='$user_password'";
    $result = $conn->query($sql) or die($conn->error);
    $count = $result->num_rows;
    if ($count < 1) {
        header("location:login.php?error=1");
        exit;
    }
    $rows = $result->fetch_assoc();
    $_SESSION["name"] = $rows["user_fullname"];
    $_SESSION["id"] = $rows["user_id"];
    header("location:pre_survey.php");
}
