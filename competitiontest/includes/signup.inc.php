<?php
if (isset($_POST['submit']) and $_POST['submit'] == "signup.php") {
    include_once 'dbh.inc.php';
    //assign variables to input values
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];




    // Error handlers
    // Check for empty fields
    if (empty($first) or empty($last) or empty($email) or empty($uid) or empty($pwd)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    if (! preg_match("/^[a-zA-Z]*$/", $first) or ! preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../signup.php?signup=invalid");
        exit();
    }
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?signup=invalid_email");
        exit();
    }

    $user_list = select_all_matching($connection, $dbLoginTable, 'user_username', $uid);
    if (count($user_list) > 0) {
        header("Location: ../signup.php?signup=usernametaken");
        exit();
    }
    // Insert the user into the database
    $sql = "INSERT INTO ".$dbLoginTable." (user_firstname, user_lastname, user_email, user_username, user_pwd)
                         VALUES (:first, :last, :email, :uid, :hash);";
    $prep = $connection->prepare($sql);
    $prep->bindValue(':first', $first);
    $prep->bindValue(':last', $last);
    $prep->bindValue(':email', $email);
    $prep->bindValue(':uid', $uid);

    ////////////////////////////////////////////////////////
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "competition_site";

    // Create connection
    $conn =mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_query($conn,"INSERT INTO `testing`(`test`, `uname`) VALUES (0,'$uid')");





    // Hashing the password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $prep->bindValue(':hash', $hashedPwd);
    $prep->execute();
    header("Location: ../login.php?signup=success");
    exit();
} else {
    header("Location: ../signup.php");
    exit();
}
