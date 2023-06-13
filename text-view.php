<?php

use App\DataController;
use App\TextView;

require_once 'config.php';

$controller = new DataController();
$data = $controller->getData();

$view = new TextView($data);
$view->render();