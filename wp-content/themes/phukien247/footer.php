<footer>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="box-footer info-contact">
								<h3>Thông tin liên hệ</h3>
								<div class="content-contact">
									<p>Website chuyên cung cấp thiết bị điện tử hàng đầu Việt Nam</p>
									<p>
										<strong>Địa chỉ:</strong> TPHCM
									</p>
									<p>
										<strong>Email: </strong> dihiandduc@gmail.com
									</p>
									<p>
										<strong>Điện thoại: </strong> 01234567
									</p>
									<p>
										<strong>Website: </strong> https:fb.com
									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="box-footer info-contact">
								<h3>Thông tin khác</h3>
								<div class="content-list">
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'header-menu',
                                        'container' => 'false',
                                        'menu_id' => 'header-menu',
                                        'menu_class' => 'header-menu'
                                    )
                                ); ?>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="box-footer info-contact">
								<h3>Form liên hệ</h3>
								<div class="content-contact">
									<form action="/" method="GET" role="form">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="column-half">First Name [text* first-name]</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
												<input type="email" name="" id="" class="form-control" placeholder="Địa chỉ mail">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
												<input type="text" name="" id="" class="form-control" placeholder="Số điện thoại">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<input type="text" name="" id="" class="form-control" placeholder="Tiêu đề">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
											</div>
										</div>
										<button type="submit" class="btn-contact">Liên hệ ngay</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<p>Copyright © 2022 All Rights Reserved - Design by DuiHui and KyojiDuc</p>
				</div>
			</footer>
		</div>
		<script src="<?php bloginfo('template_directory'); ?>/libs/jquery-3.4.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script>
		(function($){  
			$(document).ready(function(){
				var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
				$('#hk-registerform').submit(function (e) { 
					e.preventDefault();
					var data = {};
					var ArrayForm = $(this).serializeArray();
					$.each(ArrayForm, function() {
						data[this.name] = this.value;
					});
					
					$.ajax({
						type: "POST",
						url: ajaxUrl,
						data: {
							'action': 'RegisterAction',
							'userData': data
						},
						dataType: "html",
						beforeSend: function () {
						},
						success: function (response) {
							$('#hk-message').html(response);
							if (response == 'success' ) {
								$("#hk-registerform")[0].reset();
								$('#hk-message').hide();
								$('#hk-success').show();
							}
						}
					});
				});
			});
		})(jQuery);
		</script>
        <?php wp_footer(); ?>
	
    </body>
</html>