<?php
use QodeListing\Lib\Core;
if(!function_exists('qode_listing_single_listing')){

	/**
	 * Function load single listing template
	 */

	function qode_listing_single_listing(){
		$listing_template = 'standard'; //currently there is only one single listing type

		$params = array(
			'listing_template' => $listing_template,
			'holder_class'       => array(
				'qode-'.$listing_template,
				'qode-listing-single-holder'
			)
		);

		//update listing view count
		$view_obj = new Core\ListingViews(get_the_ID());
		$view_obj->setCountValue();
		qode_listing_single_template_part('holder', '', $params);
	}

}

if(!function_exists('qode_listing_related_taxonomy_settings')){
	/**
	 * Function generate taxonomy array which will be used to generate related posts
	 * For each taxonomy need to be set priority in order to choose from which taxonomy will be taken post
	 * return array
	 */
	function qode_listing_related_taxonomy_settings(){

		$tax_array = array(
			array(
				'id' => 'job_listing_type',
				'priority' => 2
			),
			array(
				'id' => 'job_listing_category',
				'priority' => 1
			),
			array(
				'id' => 'job_listing_tag',
				'priority' => 3
			)
		);

		return $tax_array;

	}

}

if(!function_exists('qode_listing_get_listing_enquiry_form_html')){
	function qode_listing_get_listing_enquiry_form_html(){
		qode_listing_single_template_part('parts/enquiry');
	}
	add_action('wp_footer', 'qode_listing_get_listing_enquiry_form_html');
}

if(!function_exists('qode_listing_load_comment_template')){

	function qode_listing_load_comment_template( $comment_template ) {
		global $post;
		if(isset($post) && $post->post_type === 'job_listing'){
			if ( !( is_singular() && ( have_comments() || 'open' == $post->comment_status ) ) ) {
				return;
			}
			return QODE_LISTING_ABS_PATH.'/modules/single/templates/comments.php';
		}else{
			return $comment_template;
		}

	}
	add_filter( 'comments_template', 'qode_listing_load_comment_template');
}