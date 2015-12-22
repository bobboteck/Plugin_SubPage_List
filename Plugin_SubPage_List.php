<?php
/*
Plugin Name: SubPage List
Plugin URI: https://github.com/bobboteck/Plugin_SubPage_List
Description: This plugin use the shortcut to show subpage in the parent page
Version: 0.0.1
Author: Roberto D'Amico
Author URI: http://www.officinerobotiche.it/
*/
function PageList()
{
	$args = array(
	'authors'      => '',
	'child_of'     => get_the_ID(),
	'date_format'  => get_option('date_format'),
	'depth'        => 0,
	'echo'         => 1,
	'exclude'      => '',
	'include'      => '',
	'link_after'   => '',
	'link_before'  => '',
	'post_type'    => 'page',
	'post_status'  => 'publish',
	'show_date'    => 'created',
	'sort_column'  => 'menu_order, post_title',
        'sort_order'   => '',
	'title_li'     => '<h2>' . __('Pages') . '</h2>', 
	'walker'       => new Walker_Page);
	
	wp_list_pages($args);
}
add_shortcode('or-subpage-list', 'PageList');
?>
