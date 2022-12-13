<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trips_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|93rOQl48st8x,jc,3m43 s|h]TQmvrhO7]ci4>vID8wU- Q^ bg<=PXcsVvKnBj' );
define( 'SECURE_AUTH_KEY',  'yDV:=1b|m{fd#<Oj)4;aU1;`:w*EgAh[~;P.|!Xb*9oqT!w`_2VrGE[@A2DQthoJ' );
define( 'LOGGED_IN_KEY',    '^lF-jdH,_uJfh(i|.f]9}MWY:|{MwCPM#`L}oNja_no{lCX c?5%~Id9y73mw~V%' );
define( 'NONCE_KEY',        '&`0vQu4yf$7IZL`eYg)`@`~hy<V47e_-H#a}YTXzX|X6z@b R`!OOQBsZl:chcg&' );
define( 'AUTH_SALT',        'c8:fZX^ ?~NgD(I=hBe8In,D2iTWV-! O.pNalz)?rLz`!0W)<O(S5KbxB/s fz0' );
define( 'SECURE_AUTH_SALT', 'icV]%f^~!GmW{pUJoGm;FXp[1`ZEa0Nnvt2/CO~tc jStDO4K$7)HH>c3<C_=m9`' );
define( 'LOGGED_IN_SALT',   '0<)d7Ay$NCx#WO PQA;vcEdN7~=4fyNG0U,okc:xnOJ~Rgs{5|JKVt1iBp!u4N?Q' );
define( 'NONCE_SALT',       'O.<&zW+$RawWR-s,d*+Rz|q8TW^2N]iW9Mb]PNTw~ioF/U?foQ1Z8LP1ftQ`2M$y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
