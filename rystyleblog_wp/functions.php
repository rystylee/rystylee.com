<?php

function my_excerpt_length($length) {
    return 180;
}
add_filter('excerpt_length', 'my_excerpt_length');

//概要（抜粋）の省略文字
function my_excerpt_more($more) {
    return '…';
}
add_filter('excerpt_more', 'my_excerpt_more');

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails'); 

// アイキャッチ画像のimgタグからサイズ指定を削除
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
	// width height を削除する
	$html = preg_replace('/(width|height)="\d*"\s/', '', $html);
	return $html;
}

?>