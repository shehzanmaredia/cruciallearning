<?php
session_start();

if (isset($_POST['submit']) and $_POST['submit'] == 'header.php') {
    include 'dbh.inc.php';
    //assign variables to $_POST variable
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Error handlers
    // check if inputs are empty
    if (empty($uid) or empty($pwd)) {
        header("Location: /login.php?login=empty");
        exit();
    }

    $list = select_all_matching($connection, $dbLoginTable, array('user_username'=>$uid, 'user_email'=>$uid), DB_find::MATCH_OR); //this stores a list of users with that username
    if (count($list) == 0) { //check if user exists
        header("Location: /login.php?login=no_user_exists");
        exit();
    }
    $row = $list[0];

    $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
    if (!$hashedPwdCheck) { //check for valid password
        header("Location: /login.php?login=error");
        exit();
    }
    // log in the user
    $_SESSION['user'] = $row;
    $_SESSION['uname']=$uid;

    header("Location: /problems.php?login=success");
    exit();
} else {
    header("Location: /index.php?login=error_not_from_login_button");
    exit();
}
