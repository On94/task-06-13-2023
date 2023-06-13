<?php

use App\DataController;
use App\IndexView;

require_once 'config.php';

$controller = new DataController();

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Invalid CSRF token');
    }

    $input = $_POST['data'] ?? null;
    $controller->saveData($input);
}

$view = new IndexView($_SESSION['csrf_token']);
$view->render();