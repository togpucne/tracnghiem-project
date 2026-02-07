<?php
error_reporting(0);
session_start();
include_once "views/header.php";
include_once "views/nav.php";
include_once "views/left.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'trangchu':
            include_once "views/trangchu.php";
            break;
        case 'gioithieu':
            include_once "views/gioithieu.php";
            break;
        case 'dethi':
            include_once "views/dethi.php";
            break;
        case 'lambai':
            include_once "views/lambai.php";
            break;
        case 'dangky':
            include_once "views/dangky.php";
            break;
        case 'dangnhap':
            include_once "views/dangnhap.php";
            break;
        default:
            include_once "views/trangchu.php";
            break;
    }
} else {
    include_once "views/trangchu.php";
}
include_once "views/footer.php";
