<!-- Carousel  -->
<div class="home-section">

    <div class="swiper homeSwiper">

        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <a href="#">
                    <img src="/tracnghiem-project/web-project/client/public/img/luyen_de.webp"
                        class="banner-img">
                </a>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <a href="#">
                    <img src="/tracnghiem-project/web-project/client/public/img/luyen_de.webp"
                        class="banner-img">
                </a>
            </div>

        </div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

    </div>

</div>
<!-- End Carousel -->
<!--  Đề thi -->
<div class="home-section">
    <div class="container">

        <h2 class="home-h2" id="de-thi-moi-nhat">Đề thi mới nhất</h2>

        <div class="row g-3">

            <div class="col-6 col-md-4 col-lg-3">
                <div class="testitem-wrapper">

                    <a class="text-dark" href="#">
                        <h3 class="testitem-title">
                            IELTS Simulation Listening test 1
                        </h3>

                        <div class="testitem-info-wrapper">

                            <span class="testitem-info">
                                <i class="far fa-clock"></i> 40 phút |
                                <i class="far fa-user-edit"></i> 1435032 |
                                <i class="far fa-comments"></i> 3598
                            </span>

                            <span class="testitem-info">
                                4 phần thi | 40 câu hỏi
                            </span>

                        </div>

                        <div class="testitem-tags">
                            <span class="tag">IELTS Academic</span>
                            <span class="tag">Listening</span>
                        </div>

                    </a>

                    <a href="#" class="btn btn-outline-primary btn-detail">
                        Chi tiết
                    </a>

                </div>
            </div>
           
            <div class="col-6 col-md-4 col-lg-3">
                <div class="testitem-wrapper">

                    <a class="text-dark" href="#">
                        <h3 class="testitem-title">
                            IELTS Simulation Listening test 1
                        </h3>

                        <div class="testitem-info-wrapper">

                            <span class="testitem-info">
                                <i class="far fa-clock"></i> 40 phút |
                                <i class="far fa-user-edit"></i> 1435032 |
                                <i class="far fa-comments"></i> 3598
                            </span>

                            <span class="testitem-info">
                                4 phần thi | 40 câu hỏi
                            </span>

                        </div>

                        <div class="testitem-tags">
                            <span class="tag">IELTS Academic</span>
                            <span class="tag">Listening</span>
                        </div>

                    </a>

                    <a href="#" class="btn btn-outline-primary btn-detail">
                        Chi tiết
                    </a>

                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="testitem-wrapper">

                    <a class="text-dark" href="#">
                        <h3 class="testitem-title">
                            IELTS Simulation Listening test 1
                        </h3>

                        <div class="testitem-info-wrapper">

                            <span class="testitem-info">
                                <i class="far fa-clock"></i> 40 phút |
                                <i class="far fa-user-edit"></i> 1435032 |
                                <i class="far fa-comments"></i> 3598
                            </span>

                            <span class="testitem-info">
                                4 phần thi | 40 câu hỏi
                            </span>

                        </div>

                        <div class="testitem-tags">
                            <span class="tag">IELTS Academic</span>
                            <span class="tag">Listening</span>
                        </div>

                    </a>

                    <a href="#" class="btn btn-outline-primary btn-detail">
                        Chi tiết
                    </a>

                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="testitem-wrapper">

                    <a class="text-dark" href="#">
                        <h3 class="testitem-title">
                            IELTS Simulation Listening test 1
                        </h3>

                        <div class="testitem-info-wrapper">

                            <span class="testitem-info">
                                <i class="far fa-clock"></i> 40 phút |
                                <i class="far fa-user-edit"></i> 1435032 |
                                <i class="far fa-comments"></i> 3598
                            </span>

                            <span class="testitem-info">
                                4 phần thi | 40 câu hỏi
                            </span>

                        </div>

                        <div class="testitem-tags">
                            <span class="tag">IELTS Academic</span>
                            <span class="tag">Listening</span>
                        </div>

                    </a>

                    <a href="#" class="btn btn-outline-primary btn-detail">
                        Chi tiết
                    </a>

                </div>
            </div>
           
            <div class="col-6 col-md-4 col-lg-3">
                <div class="testitem-wrapper">

                    <a class="text-dark" href="#">
                        <h3 class="testitem-title">
                            IELTS Simulation Listening test 1
                        </h3>

                        <div class="testitem-info-wrapper">

                            <span class="testitem-info">
                                <i class="far fa-clock"></i> 40 phút |
                                <i class="far fa-user-edit"></i> 1435032 |
                                <i class="far fa-comments"></i> 3598
                            </span>

                            <span class="testitem-info">
                                4 phần thi | 40 câu hỏi
                            </span>

                        </div>

                        <div class="testitem-tags">
                            <span class="tag">IELTS Academic</span>
                            <span class="tag">Listening</span>
                        </div>

                    </a>

                    <a href="#" class="btn btn-outline-primary btn-detail">
                        Chi tiết
                    </a>

                </div>
            </div>
            <!-- END CARD -->

        </div>

    </div>
</div>
<!--  End Đề thi -->




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- SCRIPT Carousel -->
<script>
    const swiper = new Swiper(".homeSwiper", {
        loop: true,

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>