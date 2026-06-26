<?php

session_start();

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$langCode = $_SESSION['lang'] ?? 'vi';

$langFile = __DIR__ . "/../lang/$langCode.php";

if (!file_exists($langFile)) {
    $langFile = __DIR__ . "/../lang/vi.php";
}

$lang = require $langFile;