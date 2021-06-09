<?php
include('connect.php');
function check_id($user_id_card, $conn)
{
    $sql = "SELECT * FROM `user` WHERE user_id_card='$user_id_card'";
    $result = $conn->query($sql) or die($conn->error);
    $count = $result->num_rows;
    if ($count > 0) {
        return false;
    } else {
        return true;
    }
}
if (isset($_POST)) {
    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";
    $user_faculty = $_POST["user_faculty"];
    $user_branch = $_POST["user_branch"];
    $user_position = $_POST["user_position"];
    $user_site_position = $_POST["user_site_position"];
    $user_fullname = $_POST["user_fullname"];
    $user_id_card = $_POST["user_id_card"];
    if (check_id($user_id_card, $conn)) {
        $sql = sprintf(
            "INSERT INTO user (user_faculty,user_branch,user_position,user_site_position,user_fullname,user_id_card,user_password)
                        VALUES ('%s','%s','%s','%s','%s','%s','%s')",
            $user_faculty,
            $user_branch,
            $user_position,
            $user_site_position,
            $user_fullname,
            $user_id_card,
            $user_id_card
        );
        // echo $sql;
        if (!$conn->query($sql)) die($conn->error);
        header("location:home.php?success=1");
    } else {
        header("location:home.php?error=1");
        exit;
    }
}
