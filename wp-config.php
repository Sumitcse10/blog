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
define( 'DB_NAME', 'WordPressSite' );

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
define( 'AUTH_KEY',         'Dbe)]SkpOXvc$^ #HC~-d>3OXx;zR$lbZqYz9Y+4;pp}-<[YGcN[Mc~iHW+S_hWm' );
define( 'SECURE_AUTH_KEY',  'x3uEGbUpG[*s561}Uj#^h=rLXK)!G5gpa7%,w~6cU#k;P~o&Jc]w&//a>mcQ/IMq' );
define( 'LOGGED_IN_KEY',    ':?Fcyn:#U9Pysya-e>+38LZ4,[|d+pp>`TW3y8f&mP4i#{Sx3n*I d4e*~r[sQcw' );
define( 'NONCE_KEY',        '>}4BR}_E!ik@11NajhIV)])T#lV-R@3,gbK[fYO)7-{{p.D=QB8&)xBhyW@l:^nG' );
define( 'AUTH_SALT',        '/^y6wl+y@ykn&U:s39(4ZoV6&T*(T]LXba^[1zmyqD^xX@t@>5j6KuX00A1xskr<' );
define( 'SECURE_AUTH_SALT', 'a&<3ETkUY>P?+<(sk6z{zuCHP(.n4,sK<[bdEz=7jVM]P}!]wA ~5w(QJU%FVWfF' );
define( 'LOGGED_IN_SALT',   '~W4=x1`R^%}Wf>1hH~-5AS9kMl+iGHB~}4>Hl76/lsW$m`X?i_(FrPB8tX&M4%1^' );
define( 'NONCE_SALT',       'K2~T4W>Q1++&2VeB`;n`RRTV+vVI)d)W(yFH4]i*1(_P|(7o>fHjyosqSn^o_kxl' );

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
