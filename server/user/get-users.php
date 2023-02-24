<?php

session_start();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With');

if ($_SESSION['role'] != 'admin') {
    printf("role");
    exit(1);
}

require_once('model/User.php');

$user = new User("", "", "", "", "");

try {
    $users = $user->getUsers();
    echo json_encode($users);
} catch (Exception $e) {
    echo $e->getMessage();
}
