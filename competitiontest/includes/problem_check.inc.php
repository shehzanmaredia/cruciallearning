<?php
session_start();

if (isset($_POST['submit']) and $_POST['submit'] == "submit_problem" and isset($_POST['answer']) and isset($_POST['problem_id'])) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbh.inc.php';
    $_SESSION['problem'] = $problem = select_all_matching($connection, $problemTable, 'problem_id', $_POST['problem_id'])[0];
    if ($problem['problem_answer'] == $_POST['answer']) {
        $_SESSION['correct'] = TRUE;
    } else {
        $_SESSION['correct'] = FALSE;
    }
    $_SESSION['solutions_list'] = select_all_matching($connection, $solutionsTable, 'associated_problem_id', $_POST['problem_id']);
    header("Location: /view_solution.php");
}