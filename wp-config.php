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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'customform' );

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
define( 'AUTH_KEY',         'hx(T=N@z<)IQ1Oy~;>Jv? =0oIT4IG/W8MULY+@U?MGd$N_H_g>r-m3%}>d!0Z6X' );
define( 'SECURE_AUTH_KEY',  's2{B!e7XOq_Sn(=,?ipVs*6S/^+D|M`Ahbl0EePS0Le|^nK-4KIZNkbTOUtXm8#e' );
define( 'LOGGED_IN_KEY',    '*p/X $Qj:fIkI=emE0bn<XDlXMaLAZbgaM}5)O|OO)?B_9A^gRDK~t/EM;gSTjyv' );
define( 'NONCE_KEY',        '*uMH_7~IOaG1c3 :}&1Et.:dd8|1nt*c8jFlXAl1m;8K!@Xsjs[@t2E$FlOXb+SR' );
define( 'AUTH_SALT',        'wZr/:nv]hDx6)CW*8n/(/uvJo>VG,k+(B[3H.(eH:qz]F0KH:8<Q>>hs| ^*m`T$' );
define( 'SECURE_AUTH_SALT', 'X-]l{S{?i;wD}hx;h=l[&3BW2MJ(%JNnM*]DHsEyw,pJCn,woY,>tGlboIG.&3a(' );
define( 'LOGGED_IN_SALT',   '&hx9n|(&%`~_x?[8 +p#vd+_pY|o(cTy8Kv6ZLz^`lVA$4:.{c0~n/Q[ci0WSwgB' );
define( 'NONCE_SALT',       '%a@D@CDn>2mw,QEt1QKk^ 0>dpbCz=7pne,e0yukbFXk:*QpT~&/Kkov#dmr]2W1' );

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
