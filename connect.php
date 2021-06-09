<?php
$conn = new mysqli('localhost', 'root', '', 'survey');
if ($conn->connect_errno) {
    die($conn->connect_error);
}
