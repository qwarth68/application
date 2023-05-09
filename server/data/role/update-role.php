<?php

session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit(1);
}

$_rid = htmlentities($_POST['rid']);
$new_rname = htmlentities($_POST['new_rname']);

require_once('model/Role.php');

$role = new Role($_rid, $new_rname);

try {
    $role = $role->updateRole();
    echo json_encode($role);
} catch (PDOException $e) {
    exit(1);
} catch (Exception $e) {
    exit(1);
}
