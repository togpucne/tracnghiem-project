<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "PT QUIZ" ?></title>

    <link rel="stylesheet" href="public/css/style.css">

    <?php if (!empty($page_css)) : ?>
        <link rel="stylesheet" href="public/css/<?= $page_css ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="topnav-container shadow-sm">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">

                <div class="container">

                    <!-- Logo -->
                    <a class="navbar-brand d-flex align-items-center fw-bold" href="index.php?act=trangchu">

                        <img src="public/img/ptstore.jpg" class="topnav-logo" alt="Logo">

                        <span class="brand-text">PT QUIZ</span>
                    </a>

                    <!-- Toggle mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Menu -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse">

                        <ul class="navbar-nav align-items-center">

                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=gioithieu">
                                    Giới thiệu
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=dethi">Đề thi</a>
                            </li>


                            <li class="nav-item ms-2">
                                <a class="nav-link" href="index.php?act=dangky">
                                    Đăng ký
                                </a>
                            </li>

                            <!-- Login button -->
                            <li class="nav-item ms-2">
                                <a href="index.php?act=dangnhap" class="btn btn-primary px-4">
                                    Đăng nhập
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </nav>
        </div>

        <div class="main">