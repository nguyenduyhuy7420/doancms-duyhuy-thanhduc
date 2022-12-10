<form action="<?php bloginfo('url'); ?>/" method="GET" role="form">
 <input type="hidden" name="post_type" value="product">
<?php $args = array(
			'show_option_all'    => '',
			'show_option_none' 	 => __( 'Danh mục' ),
			'option_none_value'  => '',
			'orderby'            => 'ID',
			'order'              => 'ASC',
			'show_count'         => 0,
			'hide_empty'         => 0,
			'child_of'           => 0,
			'include'            => '',
			'echo'               => 1,
			'selected'           => 0,
			'hierarchical'       => 1,
			'name'               => 'product_cat',
			'id'                 => 'product_cat',
			'class'              => 'form-control',
			'depth'              => 0,
			'tab_index'          => 0,
			'taxonomy'           => 'product_cat',
			'hide_if_empty'      => false,
			'value_field'	     => 'slug',
		); ?>
		<?php wp_dropdown_categories( $args ); ?> 
    <div class="input-seach">
        <input type="text" name="s" id="" class="form-control">
        <button type="submit" class="btn-search-pro"><i class="fa fa-search"></i></button>
    </div>
    <div class="clear"></div>
</form>
