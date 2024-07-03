<?php
session_start();
header("X-UA-Compatible: IE=edge,chrome=1");
$carpetaRaiz = "/tainobay/";
$path = 'https://' . $_SERVER['SERVER_NAME'] . $carpetaRaiz;
$page = basename($_SERVER['SCRIPT_NAME']);
//Detectar idioma
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
    setcookie("lang", $lang, time() + (3600 * 24 * 30));
} else if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'es';
}

switch ($lang) {
    case 'en':
        $idioma = 'en';
        break;
    case 'es':
        $idioma = 'es';
        break;
    default;
        header("Location: {$path}en/");
        break;
}

include_once("include/lang/{$idioma}-traduccion.php");
