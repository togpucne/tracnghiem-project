<?php
error_reporting(0);
session_start();

$act = $_GET['act'] ?? 'trangchu';

switch ($act) {

    case 'dangky':
        $title = "Đăng ký - PT QUIZ";
        $page_css = "dangnhap-dangky.css";
        $view = "views/dangky.php";
        break;

    case 'dangnhap':
        $title = "Đăng nhập - PT QUIZ";
        $page_css = "dangnhap-dangky.css";
        $view = "views/dangnhap.php";
        break;

    case 'gioithieu':
        $title = "Giới thiệu - PT QUIZ";
        $page_css = "gioithieu-dangky.css";
        $view = "views/gioithieu.php";
        break;

    case 'dethi':
        $title = "Đề thi - PT QUIZ";
        $page_css = "dethi.css";
        $view = "views/dethi.php";
        break;

    case 'lambai':
        $title = "Làm bài - PT QUIZ";
        $page_css = "lambai.css";
        $view = "views/lambai.php";
        break;

    default:
        $title = "Trang chủ - PT QUIZ";
        $page_css = "trangchu.css";
        $view = "views/trangchu.php";
}

include "views/header.php";
include $view;
include "views/footer.php";
