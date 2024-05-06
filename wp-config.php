<?php
/**
* The base configuration for WordPress
*
* The wp-config.php creation script uses this file during the installation.
* You don't have to use the website, you can copy this file to "wp-config.php"
* and fill in the values.
*
* This file contains the following configurations:
*
* * Database settings
* * Secret keys
* * Database table prefix
* * ABSPATH
*
* @link https://wordpress.org/documentation/article/editing-wp-config-php/
*
* @package WordPress
*/
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );
/** Database username */
define( 'DB_USER', 'wpuser' );
/** Database password */
define( 'DB_PASSWORD', 'root' );
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
define( 'AUTH_KEY',         'E2J1CLxjD;P<nUK&0L@Dv3A+Mv7LE57jXe{~]MOuSDH^:]-1unFMmXn[H/i_;An+' );
define( 'SECURE_AUTH_KEY',  '1OFBcsy+863`)3+y-ew_EF<6v~c;,Hx*W$IS>8BTg_,+O9FAyD,U$#E8jTRC_cUN' );
define( 'LOGGED_IN_KEY',    'uvu#A<x2R/b[Sxm3*?}^&n:ub)i=W~Hw.?gq}#h3-dHl7]ohzRzhiFmkVnSh8:u1' );
define( 'NONCE_KEY',        '^~%JT8=-5pAa35P~elj:z.+rqS!ajmP! zo(z~9##P UCST!?]RCA+&uN!.m7[1K' );
define( 'AUTH_SALT',        '6#X*;E!qQ~@kf_qfws*`~q;E8O3V6y#lL*Dcy,d4_w@xB|):I>l8JY:-]%mW0|/j' );
define( 'SECURE_AUTH_SALT', 'x!9_yQ@|Vq`dbxU>KbH[D#5IvBlUiF3<hBl5d&)O4=)z~L0B)s8J wF@uW@)I}hx' );
define( 'LOGGED_IN_SALT',   'zz%cY^KeUu;/6_s-*I|*A4qntXhA3+2jjk=Va#Ou/`wcB mfP5w{XVqbm&_I#>*D' );
define( 'NONCE_SALT',       'Z.pjxBlhma88pi&;)5SI=]n|Z]Lb`0vqlK|]utf;4L5y/[JT,@^ C5x8ukU(<{{X' );
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
* @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
