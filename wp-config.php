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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'galin' );

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
define( 'AUTH_KEY',         '^LK@W,mL{EfD~.][ YV?LF0bv:C{J l48Kd)Yy/:_;i_eu`4Ifz`rs+[FRrVyqZu' );
define( 'SECURE_AUTH_KEY',  '@}vCnSI6kV_!F64)<5ik0%!99l5u%sx!8}sSPm9|)mR_gLZ{O8tSy+7Wxvg7T^!I' );
define( 'LOGGED_IN_KEY',    'N<rLMs92K5$zL(x}NmoT%v3J9rANu3c])5scXr$!^kc7;XF>(m{_EF$n6TN-v?4]' );
define( 'NONCE_KEY',        'ScWBTmRF 9pJ`.=ZoOM}Ks`B1o`{4glGXH`cZ@&s4Dc2cAl()$EXu9q;NG5sUYj6' );
define( 'AUTH_SALT',        '(y08f$lu5Gmuy`lVF75oJ`s0N+]e>Zstpcya_MJ&DtA;mX*syE2}l<,-qNxdEA[c' );
define( 'SECURE_AUTH_SALT', 'I4wn_b?#f+.y/h,,$7HZYha]4W;RyroHy zX+`3h{xY2!kl~udSk_UxcJrHQOKkI' );
define( 'LOGGED_IN_SALT',   '?<?[gk5{n=!*.lFZZ _~>CWf#.Y*kb`Zp071tYB,:.]_Za;(`O`#Z]FmfJQCnT(_' );
define( 'NONCE_SALT',       'Hmo#?JML4slaOSF(%Zx%t4- @<uJqd.@P7+Os&U9Sa8CJBQ7_XC<$LX4:Had$F~k' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
