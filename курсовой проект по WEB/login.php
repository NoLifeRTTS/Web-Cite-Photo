<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '');
    $select_db = mysqli_select_db($conn, 'dbstore');

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_row($result);
        
        if ($count == 1 && password_verify($password, $row[3])) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $row[2];
        }
        

        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            echo "<HTML><HEAD>
            <META HTTP-EQUIV='Refresh' CONTENT=' 0; URL=account.php ' >
            </HEAD>";
        }
    }
?>