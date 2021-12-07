<?php
header('Content-Type: application/json');
function Redirect() {
    header('Location: ' . 'redirect.php');
    exit();
}
if(isset($_REQUEST['log'])) {
    $login = $_REQUEST['login'] ? $_REQUEST['login'] : null;
    $password = $_REQUEST['password'] ? $_REQUEST['password'] : null;
    $answer = 0;
    if (is_null($password) || is_null($login)) {
        $answer = 'incorrect';
    } elseif ($login = 'admin' && $password == 'admin') {
        $answer = 'hello admin';
        Redirect();
    } else {
        $answer = 'who are you?';
    }
    echo json_encode(['success' => true,
        'message' => sprintf($answer)]);

}

