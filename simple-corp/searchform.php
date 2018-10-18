<?php  function simple_corp_search_form($form) {
	$form = '<form method="get" action="' . home_url( '/' ) . '"  id="searchform" class="searchform">
				<input type="text" value="'. get_search_query() .'" name="s" id="s" placeholder="Search" />
				<input type="submit" id="searchsubmit" value="'. esc_attr__('&#xf002;','simple-corp') .'" />
			</form>';

		return $form;
}

add_filter( 'get_search_form', 'simple_corp_search_form');

?>