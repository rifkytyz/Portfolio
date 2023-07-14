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
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         'V8E^)X[rF[Jp5r9AN*d[GYUA bLQx$Gh[1FY_.]C/1u%i5H#nKp@0$K7M:)>c;}G' );
define( 'SECURE_AUTH_KEY',  'ud(L[aoJWF$,-l+|=@auvG*[`qQE{+NgP;k4f9Hh&Ptu6J|7?P&S[OLm?&v4xyaU' );
define( 'LOGGED_IN_KEY',    '8.&wEE`VY?2nDf,sBtWlo`a/_(O61->@=N{?11D?J(]S8b$2cTzqH}Ys=?r1:i:{' );
define( 'NONCE_KEY',        'oGHJHnzJ8ctal8,<XZ#jNL)/~|zHONrY9xc5P7G~HehVOF|lD,l4{~p/cD^;e)dC' );
define( 'AUTH_SALT',        'F3J[{Ts~5(^+.r~Q46y4x)BkeZj $5Xp-3L.B>T#@aUd`lhhL(z0;b$,1/$LQ_W3' );
define( 'SECURE_AUTH_SALT', 'SNGVT>aLS&:l{/c2E0e+fri#@gJJEJ}nhS-1RH>>CNLGwhWzUgO@Th>KE|+A_P=X' );
define( 'LOGGED_IN_SALT',   '>$h?3NR`zE3(W9GxNDHhX1rR-a@/5IZ8myn9vl}I2##5_#U;L!0H!q,.xWJ<B`CO' );
define( 'NONCE_SALT',       '[}!J;qz>6KP6PvUFR/tF]$v8rAFw.aV5&@1cL3aU+IU #xntT/){CY{zg2ocI{@Z' );

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
