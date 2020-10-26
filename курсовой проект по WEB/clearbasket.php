<?php
session_start();
if (isset( $_SESSION['username'])) {
    $username = $_SESSION['username'];
    $conn = mysqli_connect('localhost', 'root', '');
    $select_db = mysqli_select_db($conn, 'dbstore');
    $query = "DELETE FROM basket WHERE username = '$username' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
}
?>