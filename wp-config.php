<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'wordpress');

/** Username của database */
define('DB_USER', 'wordpress');

/** Mật khẩu của database */
define('DB_PASSWORD', '123456');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y@L425nz:VZ5!nV,;{+Qf 4<1ZB0Ug=rHU@l:b7j`0`$Y$2%4bX!c>)%6<!AA|@9');
define('SECURE_AUTH_KEY',  'HX403?GpsnZxM<O}yU46,LMARI;B+T|Yuna,:(1fWt]J9t D>ebKAIyZ x?A}c9;');
define('LOGGED_IN_KEY',    'MYR=`:.]wJ:57Fo]Kk7{vmtcDCU+(X*qwD,@$`w-Lj,45Y^J`xCCf+ws$j- L[! ');
define('NONCE_KEY',        '|1I[pHYYN<S.9W9`F&XLtl4DC,O},c-ax?8[ze3pWyu1K:T>nK!45e$T}s(xE1d5');
define('AUTH_SALT',        's!V^|_x;^/Qz&XvCWs 2aKak#hF+AgKmUu<M;=?qxk*i7gO<TU|=Y?-.5Xtl_QB ');
define('SECURE_AUTH_SALT', '}<%~k(=owbF]c5n]yJfs! /BC~8W-sF9616N&T07&5((:sh#Y,E3U3JiheiHwL&/');
define('LOGGED_IN_SALT',   'gVzApspb+:[`cS9dG}0 9,ZijBp5SxXW>Bu=k%= F%:A}e_]aPslfYe)iOv$Un[&');
define('NONCE_SALT',       '$i1i,*5G3phsSv6P^rysb!HClE5KaBGv5i,UJ.U_%+oSe ME4#R(5tPbQCduPks#');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
