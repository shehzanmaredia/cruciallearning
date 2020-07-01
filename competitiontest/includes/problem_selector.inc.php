<?php
if (isset($_SESSION['user'])) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbh.inc.php';
    
    $sql = "SELECT * FROM " . $problemTable;
    
    $row = $connection->query($sql);
    $problem_list = $row->fetchAll();
    
    $_SESSION['problem_list'] = $problem_list;
}
?>