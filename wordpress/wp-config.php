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
define( 'DB_NAME', 'wedding' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ']Z%RAZPF2SpiCAr}?/ yJ9`Uxf=;PZ3Ne^TMvTHNh>~RbTnO<rwLr5`h8Rx7vFsy' );
define( 'SECURE_AUTH_KEY',  'Jpx:Ky}h%9T1t9_@Vsg&]Y?4Ma do~nnXGXMt#PVW]gH7G75yyq#_3vX,3.@ZOQH' );
define( 'LOGGED_IN_KEY',    'G% pIJmJ`vi)>*P[tFU~?Hzl]nT(N59^7hUm!xJ_(Ko$z}]j68b.BlogRwu*<<?i' );
define( 'NONCE_KEY',        'qm/M_1*To.`<yV3rdu`&412~rg08fdsh`/s-_547bqUwpf2mk@<]R|mM3<`*[3~D' );
define( 'AUTH_SALT',        '[&LcFk[Uik;!5Nv-=c`?JYIEx2M79>8p+E!$rLoOCu?[t>U>[7QYB7ULmj7^=dT(' );
define( 'SECURE_AUTH_SALT', ' Sl> &Sb<^K/3,s+obB&bz[eM,NTm)lTe.z~pUHhCn!2nj=z9!<xUUjDgNzMCwGu' );
define( 'LOGGED_IN_SALT',   'UcW!Ea8%&(WAO0* O!FX_H%BBVs5Y*E/IU/g<aY z_3;6]|xt.^5>})pjrDaxDRL' );
define( 'NONCE_SALT',       'oFCRz+2PPwlPZR%y]V^ws]Yfvr)M3N1W5)WQEW@?!$+%=|{VNVLDGts|wZNH3 -3' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_wedding';

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
