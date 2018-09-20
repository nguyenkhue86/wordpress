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
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~mXVOqiLak:/]{4eI+;l; hUQ1ge;GQ4IIf4R=MpC<g$Ix8#|lzvo<jK$lC}c_hm');
define('SECURE_AUTH_KEY',  'nr|^xS@7{(Rx8I&Q%bnc|bBxCX`(/ K={FJVQ XOW<|7+GnBm6Q=Ck*n*|~Ynjy?');
define('LOGGED_IN_KEY',    '-XI~bB:v!L)4L3toAEqo2J8f]{QE@Ql|3D(r2f.t!^icvOAaSc6TY(*Pie&RO.D}');
define('NONCE_KEY',        'MwN5-Hl/K;R~FDNX9#Z`h#<qeF5lw.B5bt;*tg9~Z`N{.#:p6l3lsl:jFOvPi%8V');
define('AUTH_SALT',        'R]r2KHy?%-upWm6N3CP,gR]IU!aj8QtK.cF`8Bep;obpZptS4Z(7=l&m |<01?[w');
define('SECURE_AUTH_SALT', 'flam{vL0b6B,ys9*/[^I7GSEWtmCyQv0BK8=}4}Dp{j-}<VfR_e l0s>bxFs-X@N');
define('LOGGED_IN_SALT',   'hFr(Mu`nmEwsnIhHv@7!TYCz{tT_$`,O`oZ3_Poyec35yvZeD-Y,[/0hQI*@+leY');
define('NONCE_SALT',       'FcM1H-fP5z16Oqw4Q[2h>Yk(1j-4wq)j*orX8Y-^rZUUMPs&#$_D1_$w@B!|o%|_');

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
