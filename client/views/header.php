<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/gioithieu.css">
    <link rel="stylesheet" href="public/css/dangnhap-dangky.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="topnav-container p-1">
            <nav class="navbar  navbar-expand-lg">
                <span class="navbar-brand">
                    <?php
                    echo '
                            <a class="topnav-brand " href="index.php?act=trangchu">
                                <h1>PT QUIZ</h1>
                            </a>
                        ';
                    ?>
                </span>
                <button class="navbar-toggler pull-xs-right d-lg-none" type="button" data-toggle="collapse"
                    data-target="#navbar-collapse">
                    ☰

                </button>
                <div class="d-lg-block navbar-collapse justify-content-end collapse" id="navbar-collapse">

                    <ul class="nav">

                        <?php
                        echo '<li class="nav-item">
                            <a class="nav-link" href="index.php?act=gioithieu">Giới thiệu</a>
                        </li>';
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Chương trình học</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Đề thi online</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Flashcards
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>


                        <?php
                        echo '<li class="nav-item">
                            <a class="nav-link " href="index.php?act=dangky">
                                Đăng ký tài khoản
                            </a>
                        </li>';
                        ?>

                        <li class="nav-item">

                        </li>
                        <?php
                        echo '<li class="nav-item">
                            <a href="index.php?act=dangnhap" class="btn btn-round btn-block btn-primary ">Đăng nhập</a>
                        </li>';
                        ?>

                    </ul>
                </div>
            </nav>
        </div>
        <div class="main">