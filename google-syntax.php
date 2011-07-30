<?php
/*
Plugin Name: google-syntax
Plugin URI: http://3haku.net/
Description: This is a code prettify plugin using google-code-prettify. click the add-code media button to insert your code. the code higlighting effect will be seen directly in the mce editor.����һ������������  ʹ��google code prettify ��װ�������·��������������밴ť���ɲ������   �������Ч����ֱ����mce��Ԥ���ɼ�
Author: princehaku
Version: 0.1
Author URI: http://3haku.net/
*/
$wp_gs_root = WP_PLUGIN_URL."/google-syntax/";

//add a add-code button to wp-post page
function wp_gs_add_media_button() {
	global $wp_gs_root;
	$url = WP_PLUGIN_URL.'/google-syntax/insert.php?tab=add&TB_iframe=true&amp;height=500&amp;width=640';
	if (is_ssl()) $url = str_replace( 'http://', 'https://',  $url );
	echo '<a href="'.$url.'" class="thickbox" title="'.__('Add Code','wp-gs').'"><img src="'.$wp_gs_root.'/addcode.png" alt="'.__('Add Code','wp-gs').'"></a>';
}
//we need the style
function wp_gs_add_head_css(){
	global $wp_gs_root;
	echo '<link rel="stylesheet" type="text/css" href="'.$wp_gs_root.'google-code-prettify/prettify.css"/>';
}
//add style to mce
function wp_gs_mce_css($css){
	global $wp_gs_root;
	return $css . "," . $wp_gs_root.'google-code-prettify/prettify.css';
}

add_action('media_buttons', 'wp_gs_add_media_button', 20);
add_action('wp_head', 'wp_gs_add_head_css');
add_filter("mce_css", "wp_gs_mce_css");

//add_action('wp_footer', 'wp_gs_add_footer');
?>