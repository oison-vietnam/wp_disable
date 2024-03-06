<?php 
autoload_dir(__DIR__ . "/inc");

/**
 * Load tất cả các file php trong thư mục. Đỡ phải require từng file
 *
 * @param string $dir. Thư mục cần load file
 * @return void require tất cả file php trong thư mục chỉ định và các file php trong thư mục con của nó
 */
function autoload_dir($dir = __DIR__)
{
  $files = array_diff(scandir($dir, 1), array('..', '.'));
  foreach ($files as $file) {
    if (is_dir("$dir/{$file}")) {
      autoload_dir("$dir/{$file}");
    } else if (substr($file, -4) === '.php') {
      require_once $dir . "/{$file}";
    }
  }
}