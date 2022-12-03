<?php
class product{
	const product_meta_key='product_price';

	public static function price( $product_id ) {
		if (!$product_id){
			return 0;
		}
		$price=get_post_meta($product_id,self::product_meta_key,true);
		if (intval($price)>0){
			return Utility::persian_numbers(number_format($price));
		}
		return 0;
	}
}