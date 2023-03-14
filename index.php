<?php

$action = $_GET['action'];

switch ($action) {
    default:
        require __DIR__ . '/cover.php';
        break;
}

