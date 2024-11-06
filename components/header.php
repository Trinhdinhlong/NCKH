<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">Sao Đỏ Job </h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="?page=home" class="nav-item nav-link active">Trang chủ</a>
            <a href="?page=about" class="nav-item nav-link">Về chúng tôi</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tuyển dụng</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="?page=job-list" class="dropdown-item">Tuyển dụng</a>
                    <a href="?page=job" class="dropdown-item">Việc chính</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Các trang khác</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="?page=category" class="dropdown-item">Danh mục</a>
                    <a href="?page=testimonial" class="dropdown-item">Tiêu chuẩn</a>
                    <a href="?page=404" class="dropdown-item">404</a>
                </div>
            </div>

            <a href="?page=contact" class="nav-item nav-link">Liên hệ</a>


        </div>
        <a href="?page=job-list" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Tìm việc ngay<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->