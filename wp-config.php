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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+xQ/m<9G|Yy3v9h @6XKp,qpyF^^;D3:&_Ia?7iq,P0bNA=RH5,E8=06>]y?mR n' );
define( 'SECURE_AUTH_KEY',  '!:2Txlg7bRQcAL]7GvS/wUS?nKrix|jk|@Xxem~!TF.I;w-Sy1rLXbhP1f4aKy.,' );
define( 'LOGGED_IN_KEY',    '~]!rZ$}v:diXm,b1C&u5X,^1sTYH{Z:NY>DNRZ$H:X7! ZHEmfxqfoZ*@W}Ni0+z' );
define( 'NONCE_KEY',        'aa!ZL%F>L@@uyAiQr|lq5.Wx ,mB`#FGae%&I;)T,Ax2@H!6rximi#IdL0BQ[?EP' );
define( 'AUTH_SALT',        'o(6C2Q!ZRhuc{CtsCB/!JyUb-V dQ@ha.T/S)Cu{nR!p;Sn}2w@NP,?St[xiT@)A' );
define( 'SECURE_AUTH_SALT', '|J^IS2QK5_iKS?VsNNN4+H2;2K=+=wmNI},Gl]LftQ9x9zSDl,!odX:19FF6@39x' );
define( 'LOGGED_IN_SALT',   '}%t4E{>4}-+HfSM|UsLQbCf;|>LE)q8zX3xp>U7@ ~]^Hh`w_HD$ bt:<bRFve3C' );
define( 'NONCE_SALT',       '(Y2|:;|S>:5aq>|w<$~!c[TaLX7 uz|2|2#)6M@%&1toS%S9UEn&fTl,aA1=s~n(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ac_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
