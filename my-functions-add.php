<?php
/********************************************************************************/
/* 本文からの抜粋末尾の文字列を指定する */
/********************************************************************************/
function my_auto_excerpt_more($more) {
	return '&nbsp;&hellip;&nbsp;';
}

add_filter( 'excerpt_more', 'my_auto_excerpt_more' );


/********************************************************************************/
/* 抜粋末尾に個別投稿ページへのリンクを追加する */
/********************************************************************************/
function my_custom_excerpt_more($excerpt) {
	$ret  = ''.
	$ret .= $excerpt;
	$ret .= '<span>&nbsp;&nbsp;</span>';
	$ret .= '<a href="' . get_permalink($post->ID) . '">';
	$ret .= '続きを読む &raquo;</a>';
	return $ret;
}

add_filter( 'get_the_excerpt', 'my_custom_excerpt_more' );
