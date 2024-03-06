<?php

/**
 * Set trạng thái trang tìm kiếm là 404 để tránh lập chỉ mục lung tung
 */
add_action('template_redirect', 'redirect_search_page');
function redirect_search_page()
{
  if (is_search()) {
    status_header(404);
  }
}
