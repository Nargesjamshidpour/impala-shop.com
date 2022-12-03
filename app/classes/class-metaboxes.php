<?php

class MetaBoxes {
	public static function register_product_post_meta_box() {
		add_meta_box(
			'product_post_meta_box',
			'plan price',
			'metaboxes::product_price_content_handler',
			'product',
			'side'
		);
	}

	public static function product_price_content_handler( $post ) {
		$post_price = (int) get_post_meta( $post->ID, 'product_price', true );
		?>

		<p>
			<input type='text' name='product_price' value='<?php echo $post_price;?>'>
		</p>
<?php

	}

	public static function save_product_price( $post_id ) {

        if (isset($_POST['product_price']) && intval($_POST['product_price']) > 0 ){
            update_post_meta($post_id,'product_price',intval($_POST['product_price']));
        }
    }


}