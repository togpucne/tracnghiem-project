<div class="login-container">
    <div role="main">
        <div class="loginform">

            <h1 class="login-heading mb-4">
                Đăng nhập
            </h1>

            <form class="login-form" action="/login" method="post">

                <!-- Email -->
                <div class="mb-3">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Mật khẩu"
                        required>
                </div>

                <!-- Submit -->
                <button class="btn btn-primary btn-lg w-100" type="submit" id="loginbtn">
                    Đăng nhập
                </button>

                <!-- Link register -->
                <div class="login-form-forgotpassword mt-3">
                    Chưa có tài khoản?

                    <?php
                    echo '
                            <a href="index.php?act=dangky">Đăng ký</a>
                        ';
                    ?>
                </div>

            </form>

        </div>
    </div>
</div>