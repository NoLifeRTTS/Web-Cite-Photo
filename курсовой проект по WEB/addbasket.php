<?php
session_start();
if (isset( $_SESSION['username'])) {
    $username = $_SESSION['username'];
    $bid = $_POST['id'];
    $conn = mysqli_connect('localhost', 'mysql', 'mysql');
    $select_db = mysqli_select_db($conn, 'dbstore');
    $query = "SELECT productname, description, price, basketid FROM store WHERE basketid = '$bid' ";
    //$query = "INSERT INTO wishes (username, link, description, price) VALUES ('$username','$link','$description','$price')"; 
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if($result) {
      $row = mysqli_fetch_row($result);
      $query = "INSERT INTO basket (username, productname, description, price, unicid) VALUES ('$username', '$row[0]','$row[1]','$row[2]', '$username.$row[3]') ";
      $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  }
}
?>