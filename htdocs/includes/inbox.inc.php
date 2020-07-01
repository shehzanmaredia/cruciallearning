<?php
session_start();

if (isset($_SESSION['user'])) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbh.inc.php';
    $_SESSION['message_list'] = select_all_matching($connection, $dbMessageTable, 'message_receiver_id', $_SESSION['user']['user_id']);
    header("Location: /messages/inbox.php");
} else {
    echo 'You are not logged in';
}