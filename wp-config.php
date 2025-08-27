<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3@wXGDx*.0P[Z#[E}}*~fIDfcNp8&SZ^Qd$*Z?f@XF)l~P%Bf2&~z)U1h#ai9+a-' );
define( 'SECURE_AUTH_KEY',   'ZuQJy1aT{74x!<T;Mx.3]xL!Me4=_g31wiat1 M/8~ac3%lYl8rb %3|p CicNwU' );
define( 'LOGGED_IN_KEY',     '<w|<)QPMU/TX4_^+]r^8t <ZUQ?{(& *o[K&,!`%=[|aav2<l|~|qJQvwOSV&CR2' );
define( 'NONCE_KEY',         'jr>m;T?jF~}s{c%m1Doca{Y,00o`7-[2wNj!h|mRZ1`a-UoM($GSaS*LguZX|Ju#' );
define( 'AUTH_SALT',         ':OSKmO#6fzym)gd)W^7 `??f Pp,.?Ge71(ajiu~JCsCEKvW0s0+n@*nx7yJ$YR5' );
define( 'SECURE_AUTH_SALT',  '~[.yjv&vWgM.]OB0ZqtiJi`$H0nLb]qS?&yUvZ7+X4xNtx^Lx?qc7<xy21wvaRr:' );
define( 'LOGGED_IN_SALT',    '{F,z%t3TP9t~Hce=/# p%?-)*(BULSgV(n]Ej(9UUukY 6yyDq%lc8w!a]`Wdtfg' );
define( 'NONCE_SALT',        '^qDJUXW!bmln.}GkO9DY0N8&my0DTE)dHT{NFtC?lh){DKMY,rL6Z0$tf/H[dw+A' );
define( 'WP_CACHE_KEY_SALT', 'E 8lg,NyOmth:A$2xJF[GG]LEV#m9(ko4@Oe)>cSAnE/Rf>G-ts=.6=k(.^FX}r7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
