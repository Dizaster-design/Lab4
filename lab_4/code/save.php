<?php
require 'vendor/autoload.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $category = $_POST['categories'] ?? '';
    $title = $_POST['title'] ?? '';
    $email = $_POST['email'] ?? '';
    $description = $_POST['text'] ?? '';
    $data = [
        [$category, $title, $email, $description]
    ];
}

exit();