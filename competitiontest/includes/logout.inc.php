<?php
if (isset($_POST['submit']) and $_POST['submit'] == 'logout') {
    session_start();
    session_unset();
    session_destroy();
    header('Location: /index.php');
} else {
    echo 'Error. You did not access this form properly.';
}