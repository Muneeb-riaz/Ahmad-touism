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
define( 'DB_NAME', 'tour' );

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
define( 'AUTH_KEY',         '|R7!0j8ePRHB60$@WT|.`QBu&v3*FV{Ys?_?i=^(.H(`a!#d>$&EFFaVdUW@2%K.' );
define( 'SECURE_AUTH_KEY',  '<8_|a(!DgvAb23RK lN=;/.vlSL]j?.Jy_d(~oLhA;QRA075!v ycg->5-DNn0q.' );
define( 'LOGGED_IN_KEY',    '2_lzL1BT`!eVlp$[80OFbWS)QR`]}*CT;Kib^B~ZXVA{Hehz|A}Wzjjm0L~WXFyw' );
define( 'NONCE_KEY',        '&fGxUjO4#Jt3*YdF3}h6]~i*2<3sWJ8,yA,gi>a#5eXTA4C |)jbM9oJFjt!6U9T' );
define( 'AUTH_SALT',        'y.5V{{X`c5ntvP?C}OF6,o9sRCWgUD1}D7[,r0Uw1d-0`Ni1yG$US1qF@s_nMMD!' );
define( 'SECURE_AUTH_SALT', '*FsT/B880,}a51,w3`&jssz^W1Wa1q/A_/,LEuD(QR`QuG#N5Hg/lU33KZHm;H/$' );
define( 'LOGGED_IN_SALT',   '3FnMA2H= 5KDQB-.!L5|eP3z}:(ur!`A!1Gv-*b)*ZI1n:]QBw1Ak J*{)vPKa,_' );
define( 'NONCE_SALT',       'yM|VQtzMQ5 $XaT:q=+yPLP/^`8-CoRt;;)gAJJu>XN<6~8JWD{b36CV3O %^>K6' );

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
