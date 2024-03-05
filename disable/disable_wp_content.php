<?php

/**
 * Xóa generator WordPress trong header
 *
 */
remove_action('wp_head', 'wp_generator');

/***
 * Xóa phần mở rộng phía trước tiêu đề trang lưu trữ
 */
add_filter("get_the_archive_title_prefix", '__return_false');


// remove excerpt
add_filter('excerpt_more', '__return_false');

/***
 * Tùy chỉnh nội dung phân trang lưu trữ
 * Xóa screen-reader-text
 */
add_filter('navigation_markup_template', 'custom_navigation_markup_template', 10);
function custom_navigation_markup_template()
{
  return '<nav id="pagination" class="navigation" role="navigation" aria-label="%4$s">
		<div class="nav-links">%3$s</div>
	</nav>';
}
