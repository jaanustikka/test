<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jaanusti_wordpress');

/** MySQL database username */
define('DB_USER', 'jaanustikkaiktkh');

/** MySQL database password */
define('DB_PASSWORD', 'jaanusTikka1994');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eR]jk^*onwZ@i?IlRkQ5EJD^zMSDX70G#i@m=S5uv[6IX`:%TF21YI6==ysd;O,C');
define('SECURE_AUTH_KEY',  '020nulY&Yl,#9z`b05<bE&d_fDUxymLLYtb:_trn_z6M<o~%f!0OSIcTg}%chd W');
define('LOGGED_IN_KEY',    '>@s L^2& nu/q+:Na|7fa,{B;HomG{TGOxOY/]bmTI+y#/h=-9v2&HrAd#pjW,?7');
define('NONCE_KEY',        '7ryGSyDwtF%Sl^aI]U@A;)|CHa$wYMR%|2<Wh,H1wVk,#;DD9g+>~<^H@t2FdfE%');
define('AUTH_SALT',        'f#&oArgNI``VcnLH?)oD_a+RaK5PI0}BdhFlQ4*`HBwVdG]L[7^IYFn7[K69`FwB');
define('SECURE_AUTH_SALT', '[O3XOd*KZ6cZI:H-P-n<4/HhsQ6:^+TKu{GBY5j>#3xf7 ZmXEUzx9.F1f2w,1K1');
define('LOGGED_IN_SALT',   'Wu6*72A)Q.sY*!JtoM0NOO,.%jR(;ZZ`gS,}U[g$c+-A{@/JRNTVLbp7V2Uv@ND[');
define('NONCE_SALT',       'Tv2#t#|k7D,=pd#sKDUPC?qbI#aQqwqdbA2uPd2[.v$l5^RSw`~^!4tD}wuU/3]r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
