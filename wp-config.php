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
define( 'DB_NAME', 'itphx2020_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'mp]t1St@,a =?)T_74%t08Bck8^n8FttCu1%uJr.C!C3Fz;}*&CXS lNzQ4BWJo~' );
define( 'SECURE_AUTH_KEY',  'AJQfaa_,;(e}Bi!sXI,D$bT8CY7@WBnQdsU4?%:3qvFMx!es+a{8rm;BTIcRUM~(' );
define( 'LOGGED_IN_KEY',    'V=Y``- @@DvaX%PZ= 7X[uz1c#8+!6Vnco0Dc!s.%^gNir+O::!B(uu3bJ(1W{-*' );
define( 'NONCE_KEY',        '`1bQ8Ag9qYETb#BYZ3gw,=Vk3:mHT+C^2|[!u s~&=H?RTA`z<5Gt3*.[,}^<(.w' );
define( 'AUTH_SALT',        'KQIpqjjs6#%Pe?r8lVMk^Oa>rA}fR/6wX[%vjG51^H(/`C`fnX(qOWmOi!N]iNPL' );
define( 'SECURE_AUTH_SALT', 's}u ZgR~B[24Gr/x|KqGXs,v`m;a_ns/TLK=nUbnx L<=|[rLdnGXu%|@7;u7eD=' );
define( 'LOGGED_IN_SALT',   'om[*u^XA2NjgI)2C5N]05?0aROD4Z5S}w8m|7;r)=LW.J[Smqi@q;T.Mh=5oxGj7' );
define( 'NONCE_SALT',       ']87U^a]/=?HX@wOJN%=e@3yT$ Pj{]Pfbg2bh} a1o&QGC>($@.1&rFD`[E;}~O[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
