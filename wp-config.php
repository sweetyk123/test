<?php
define('WP_DEBUG_DISPLAY', false);
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
define('DB_NAME', 'My_project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'IUyj>*>oI|LTP9Zwwl(s3dm6C`xj_@~BT>+NgpzhIp(4%bU6Z)a.%sA:qdtO-S8/');
define('SECURE_AUTH_KEY',  'm_tde}r&w5*4LXK3jCg%S:3kCr{Q:*~Mq`cFS2y!M*e7ks;Hk(@Qgg^CMB$onlb.');
define('LOGGED_IN_KEY',    ' ov(J]`<Jy*p%[aup!sI[0<{JsEYx&)/+*:k+[+m^-aL*AeF>}2Y4Eqd2qkECg1v');
define('NONCE_KEY',        'As Q@^3<M)I5Xpo.z_Evy.Ux+]_83<K W7MK*(=THw17%/H^22b$;5%fB s^RLYb');
define('AUTH_SALT',        'W<-cu~OoUC=Tq &@ATD35]^>ISxk|^KmCJq5Cxa=xh#@Zg j.mXG{|-Vgm|vGMK3');
define('SECURE_AUTH_SALT', 'Uu`9;PaWREanBaca(&!jN 9}C?dyCSjWt0$k3Mcjx<a;/c:Jn#&y-n6oKkzYVAO[');
define('LOGGED_IN_SALT',   'JA[9#F@EwRBIj/,$x4i<7zOoE]mXPC<mo= UYa0.|S!-`Q3)zPD=ka`#6w(&AmPL');
define('NONCE_SALT',       'TP&#eCDzWr)B(8K>_);D1JUf9 n/L#EF$O52/?q-5+`(iG^R%;E_M.#;okjq=< s');

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
