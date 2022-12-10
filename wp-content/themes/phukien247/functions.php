<?php
function my_custom_wc_theme_support() {
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );
function initTheme(){
    // Chuyển trình soạn thảo về phiên bản cũ
    add_filter('use_block_editor_for_post', '__return_false');
    // Đăng ký menu cho website
    register_nav_menu('header-top',__( 'Menu top' ));
    register_nav_menu('header-main',__( 'Menu chính' ));
    register_nav_menu('header-menu',__( 'Menu footer' ));
    // Đăng ký sidebar
    if (function_exists('register_sidebar')){
        register_sidebar(array(
        'name'=> 'Cột bên',
        'id' => 'sidebar',
        'before_widget'  => '<div class="widget">',
		'after_widget'   => "</div>",
		'before_title'   => '<h3><i class="fa fa-bars"></i>',
		'after_title'    => "</h3>",
    ));
        register_sidebar(array(
            'name'=> 'Cột bên TOP',
            'id' => 'sidebar_top',
            'before_widget'  => '<div class="widget">',
            'after_widget'   => "</div>",
            'before_title'   => '<h3><i class="fa fa-bars"></i>',
            'after_title'    => "</h3>",
        ));
    
    }
    //hiển thị lượt xem
    function setpostview($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    function getpostviews($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }
}
add_action( 'init', 'initTheme');

function slider_post_type(){
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Ảnh slider', //Tên post type dạng số nhiều
        'singular_name' => 'Ảnh slider' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Ảnh slider', //Mô tả của post type
        'supports' => array(
            'title',
            'thumbnail'
        ), //Các tính năng được hỗ trợ trong post type
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-format-gallery', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('slider', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
 
}
add_action('init', 'slider_post_type');
function percentSale($price, $price_sale)
{
    $sale = ($price_sale*100)/$price;
    $percent = 100 - $sale;
    return number_format($percent, 1);
}
function custom_remove_acction_woo()
{
    remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20);
}
 add_action('init', 'custom_remove_acction_woo');
 // Đăng ký 
 add_action('wp_ajax_RegisterAction', 'hk_handle_register_form');
add_action('wp_ajax_nopriv_RegisterAction', 'hk_handle_register_form');

function hk_handle_register_form() {
    $userData = [];
    if ( isset( $_POST['userData'] ) && is_array( $_POST['userData'] ) ) {
        $userData = $_POST['userData'];
    }

	if ( isset( $userData['_wpnonce'] ) && wp_verify_nonce( $userData['_wpnonce'], 'form_register' ) ) {
		$arr_signup = [];
		$arr_error  = [];

		if ( isset( $userData['email'] ) && $userData['email'] ) {
			$arr_signup['email'] = sanitize_text_field( $userData['email'] );

			if ( email_exists( $arr_signup['email'] ) ) {
				$arr_error['email'] = 'Địa chỉ email đã tồn tại';
			}
		} else {
			$arr_error['email'] = 'Bạn chưa nhập địa chỉ email';
		}

		if ( isset( $userData['username'] ) && $userData['username'] ) {
			$arr_signup['username'] = sanitize_text_field( $userData['username'] );

			if ( username_exists( $arr_signup['username'] ) ) {
				$arr_error['username'] = 'Username đã tồn tại';
			}
		} else {
			$arr_error['username'] = 'Bạn chưa nhập username';
		}

		if ( isset( $userData['password'] ) && $userData['password'] ) {
			$arr_signup['password'] = sanitize_text_field( $userData['password'] );
		} else {
			$arr_error['password'] = 'Bạn chưa nhập password';
		}

		if ( isset( $userData['repassword'] ) && $userData['repassword'] ) {
			$arr_signup['repassword'] = sanitize_text_field( $userData['repassword'] );

			if ( $arr_signup['password'] != $arr_signup['repassword'] ) {
				$arr_error['repassword'] = 'Xác nhận password chưa trùng nhau';
			}
		} else {
			$arr_error['repassword'] = 'Bạn chưa nhập xác nhận password';
		}


		if ( count( $arr_error ) ) {
			echo '<ul>';
			foreach ( $arr_error as $key => $error ) {
				echo '<li>'.$error.'</li>';
			}
			echo '</ul>';
		} else {
			$user_id = wp_create_user( $arr_signup['username'], $arr_signup['password'], $arr_signup['email'] );
			if ( $user_id ) {
				$arr_signup = [];
				echo 'success';
			}
		}

	}
    die(); 
}
?>
