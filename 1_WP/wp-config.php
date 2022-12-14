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
define( 'DB_NAME', 'crudoperation' );

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
define( 'AUTH_KEY',         'bs)0y8z FAPHu*T>@]eos:3!Tdy:B7!qoqgEKNK7i#4|Fw,T/,|)S_T0K%SRuzD9' );
define( 'SECURE_AUTH_KEY',  '!=YVu(=bIsZDpeD:b=XGljm~d`Ue%],,=@gonrmXFs_a :-v)]/Re:GmUfH3$UC/' );
define( 'LOGGED_IN_KEY',    'U5.&P9ZSDEgoA([qPA;ZC(bgb-&jjZ@dtSY*t/M-TBoEA19UI[mDn}VqoBs,_{k|' );
define( 'NONCE_KEY',        'G*8?[WwW2T.mj6eGO4Ayv0]eF=OOtJqH]jC;pllP?9`T^#4H+1CP`qX@D2zH.<.r' );
define( 'AUTH_SALT',        'mS6_GxUcLeX_V@V:Jpk5n>0zzz7?WMG3Tm(aQ4+kE&.)nFU#Gp5Ats)FwV8$C{(F' );
define( 'SECURE_AUTH_SALT', 'QT3@;c~7{h[)3SOD*NY>|sK;A0r{I4~=tHhbqGngh&B[Vm+kW8ps04><Yhls.qo[' );
define( 'LOGGED_IN_SALT',   ']N/MEeL34uANMGv;P&S{4vw|1qH(c$MAR{;#X*T,+M&BJtM7G)jl~0tL(8rMA(Gl' );
define( 'NONCE_SALT',       'Qg|g;o)pfaQa8Pg1!w6-;O#J!,jk@a]<nk3eaS77Vn*0/|{q0/r=2:`+~Auo6?fO' );

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
