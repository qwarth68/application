<?php

// Routes client

$router->map('GET', '/', 'welkome');
$router->map('GET', '/welkome', 'welkome', 'welkome');
$router->map('GET', '/login', 'login', 'login');
$router->map('GET', '/account', 'account', 'account');
$router->map('GET', '/admin', 'admin', 'admin');
$router->map('GET', '/contact', 'contact', 'contact');
$router->map('GET', '/model-chooser', 'model-chooser', 'model-chooser');
$router->map('GET', '/model-viewer/[*:model]', 'model-viewer/model', 'model-viewer');

$router->map('POST', '/session-write', 'session-write');

require './controller/api-ctrl.php';
