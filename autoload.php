<?php

spl_autoload_register(function ($className) {
    $className = str_replace('\\', '/', $className);
    $fileName = $className . '.php';
    if (file_exists($fileName)) {
        require_once $fileName;
    }
});
