<?php get_header(); ?>

<main id="site-content">
<div class="container">
    <div class="section-inner">

        <?php
        $home_url = get_home_url();
        if ( is_user_logged_in() ) {

            echo 'Bạn đã đăng nhập rồi. <a href="'.wp_logout_url($home_url).'">Đăng xuất</a> ?';

        } else {
        ?>
            <h1>Đăng ký</h1>
            <hr>
            <form class="dang-ky" id="hk-registerform" action="<?php echo get_home_url() . '/dang-ky'; ?>">
                <?php wp_nonce_field( 'form_register' ); ?>
                <div id="hk-message"></div>
                    <label for="usernam"><b>Uername</b></label>
                    <input type="text" name="username" id="username" placeholder="Nhập username"  required>

                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" id="email" placeholder="Nhập Email" required>

                    <label for="psw"><b>Mật Khẩu</b></label>
                    <input type="password" name="password" id="password" placeholder="Nhập Mật Khẩu" required>

                    <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
                    <input type="password" name="repassword" id="repassword" placeholder="Nhập Lại Mật Khẩu"required>


                    <div class="clearfix">
                    <button type="submit" class="signupbtn">Sign Up</button>
                    <span> quay lại trang đăng nhập <a href="<?php echo get_home_url() . '/dang-nhap'; ?>" class="icon-dangnhap">Đăng nhập</a></span>
                </p>
            </form>

        <?php } ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>