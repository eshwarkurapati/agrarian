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
define( 'DB_NAME', 'organic farm' );

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
define( 'AUTH_KEY',         'h[sa6Wg^:,98O |TMgFjHnxASu`hrP~.:WWhEjH0]Tlj$<3BI(}[A^[.#!q7i^0V' );
define( 'SECURE_AUTH_KEY',  '@/l;J>zRJ5wSjXw;57}<^#+m[1Yw_lw$TTM[_<uD&o}{4jP+X_-#]J$3Hctk+s4N' );
define( 'LOGGED_IN_KEY',    'FkezE(#%v!e}yg2&!qi;BowhFOO)tN(!5`[*6Uu?3w3(4_<Nh>L/PM0~9m=:a[k&' );
define( 'NONCE_KEY',        'HM~B$W!.SFk:4W6|#MQ[_>p~EU~[ix)SKL61u:;vYWy16T*r>8~p8~P&8W{@=M7o' );
define( 'AUTH_SALT',        'B~T?bCbp1%~pXQ8RO@mNG2Ytrn`N&1AhGP[-w9PdedoSNujI0Dk}zu3ram]kfS^r' );
define( 'SECURE_AUTH_SALT', 'HU^ZB7Svaw%Yk:bizMt2Q*G:F6YOOqj%LAv?|$bFMK+LmXJ0}.&79Si*Z{]z#Q1B' );
define( 'LOGGED_IN_SALT',   't|_>(f8xO47$ceO2_6L!;Yt:ch=W5/ih)*/KgI@)8Wq.,Pb,&WcbF3{-hlWChJW-' );
define( 'NONCE_SALT',       'sg,(w1@$FkKUZ|fG63!1(.!vF.=3JN8B1A >PO!U{oDz9eQDDCd]JEkxHzVV:lm5' );

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
