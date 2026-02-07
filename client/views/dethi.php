<div class="content-header py-4 bg-light">
    <div class="container">

        <h1 class="mb-2">Thư viện đề thi</h1>

        <p class="text-muted mb-3">
            Lựa chọn danh mục và tìm kiếm đề thi bạn muốn luyện tập
        </p>

        <!-- Danh mục -->
        <div class="test-exams mb-3">
            <ul class="nav nav-pills flex-wrap gap-2">

                <li class="nav-item">
                    <a class="nav-link active" href="#">Tất cả</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Toán học</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Tiếng Anh</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Tin học</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Lập trình</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Cơ sở dữ liệu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Mạng máy tính</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">An toàn thông tin</a>
                </li>

            </ul>
        </div>

        <!-- Search -->
        <form method="GET" class="mb-2">
            <div class="input-group input-group-md">

                <input type="text" class="form-control" placeholder="Tìm kiếm đề thi..." name="term">

                <button class="btn btn-primary">
                    Tìm kiếm
                </button>

            </div>
        </form>

    </div>
</div>

<div class="content-wrapper">
    <div class="container">

        <div class="row">
            <!-- SIDEBAR TRÁI -->
            <div class="col-md-3 d-none d-md-block">

                <div class="card shadow-sm filter-sidebar">

                    <div class="card-body">

                        <h5 class="fw-bold mb-3">Bộ lọc đề thi</h5>

                        <!-- Thời gian -->
                        <div class="mb-3">
                            <p class="fw-semibold mb-2">Thời gian</p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Dưới 15 phút</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">15–30 phút</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Trên 30 phút</label>
                            </div>
                        </div>

                        <!-- Độ khó -->
                        <div class="mb-3">
                            <p class="fw-semibold mb-2">Độ khó</p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Dễ</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Trung bình</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Khó</label>
                            </div>
                        </div>

                        <!-- Số câu hỏi -->
                        <div class="mb-3">
                            <p class="fw-semibold mb-2">Số câu hỏi</p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Dưới 20 câu</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">20–40 câu</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Trên 40 câu</label>
                            </div>
                        </div>

                        <button class="btn btn-primary w-100">
                            Áp dụng bộ lọc
                        </button>

                    </div>

                </div>

            </div>


            <div class="col-md-9">

                <div class="row g-3">

                    <!-- Test Card -->
                    <div class="col-6 col-md-3">
                        <div class="card h-100 shadow-sm">

                            <div class="card-body">
                                <h5 class="card-title">
                                    Trắc nghiệm Lập trình C cơ bản
                                </h5>

                                <p class="text-muted mb-2">
                                    30 phút | 30 câu hỏi
                                </p>

                                <span class="badge bg-primary">Lập trình</span>
                                <span class="badge bg-secondary">Cơ bản</span>
                            </div>

                            <div class="card-footer bg-white border-0">
                                <a href="#" class="btn btn-outline-primary w-100">
                                    Làm bài
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-6 col-md-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Trắc nghiệm Cơ sở dữ liệu
                                </h5>

                                <p class="text-muted mb-2">
                                    25 phút | 25 câu hỏi
                                </p>

                                <span class="badge bg-success">Database</span>
                                <span class="badge bg-warning text-dark">SQL</span>
                            </div>

                            <div class="card-footer bg-white border-0">
                                <a href="#" class="btn btn-outline-primary w-100">
                                    Làm bài
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-6 col-md-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Trắc nghiệm An toàn thông tin
                                </h5>

                                <p class="text-muted mb-2">
                                    20 phút | 20 câu hỏi
                                </p>

                                <span class="badge bg-danger">Security</span>
                                <span class="badge bg-info">API</span>
                            </div>

                            <div class="card-footer bg-white border-0">
                                <a href="#" class="btn btn-outline-primary w-100">
                                    Làm bài
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-6 col-md-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Trắc nghiệm Mạng máy tính
                                </h5>

                                <p class="text-muted mb-2">
                                    25 phút | 25 câu hỏi
                                </p>

                                <span class="badge bg-dark">Networking</span>
                            </div>

                            <div class="card-footer bg-white border-0">
                                <a href="#" class="btn btn-outline-primary w-100">
                                    Làm bài
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Pagination -->
                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">3</a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>

    </div>
</div>