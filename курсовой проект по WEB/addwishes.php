<?php
session_start();
if (isset( $_SESSION['username'])) {
    $username = $_SESSION['username'];
    $lid = $_POST['id'];
    $conn = mysqli_connect('localhost', 'mysql', 'mysql');
    $select_db = mysqli_select_db($conn, 'dbstore');
    $query = "SELECT productname, link, description, price, basketid FROM store WHERE likeid = '$lid' ";
    //$query = "INSERT INTO wishes (username, link, description, price) VALUES ('$username','$link','$description','$price')"; 
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if($result) {
      $row = mysqli_fetch_row($result);
      $query = "INSERT INTO wishes (productname, username, link, description, price, unicid, basketid) VALUES ('$row[0]', '$username','$row[1]','$row[2]','$row[3]', '$lid.$username', '$row[4]') ";
      $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  }
}
?>