<?php

/**
 * Tắt bình luận trên website
 */
// Vô hiệu hóa hỗ trợ nhận xét và theo dõi trong các loại bài đăng.
function df_disable_comments_post_types_support()
{
  $post_types = get_post_types();
  foreach ($post_types as $post_type) {
    if (post_type_supports($post_type, 'comments')) {
      remove_post_type_support($post_type, 'comments');
      remove_post_type_support($post_type, 'trackbacks');
    }
  }
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Đóng bất kỳ nhận xét nào đang mở nhận xét trên giao diện người dùng để đề phòng
function df_disable_comments_status()
{
  return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Ân bất kỳ bình luận hiện có nào trên trang web.
function df_disable_comments_hide_existing_comments($comments)
{
  $comments = array();
  return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

//Xóa menu trong admin
function remove_comments_in_admin_menus()
{
  remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'remove_comments_in_admin_menus');
