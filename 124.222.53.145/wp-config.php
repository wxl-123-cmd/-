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
define( 'DB_NAME', 'sql124_222_53_1' );

/** MySQL database username */
define( 'DB_USER', 'sql124_222_53_1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ctMEJxaecn' );

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
define( 'AUTH_KEY',         'mIv;r{wT-^7c91WHd7gC.sSGgSCgCO$OXh(hRylj>AusSYt$>ac.]36ROD&g:z8;' );
define( 'SECURE_AUTH_KEY',  '{%{akK*5`cEk]8$<fV5u=TNhTJ02jWogZx4;$$=gjfnGhFpdnw Z1%`.`AR-fv5K' );
define( 'LOGGED_IN_KEY',    'R+<QM&[HW$0chG.,&~e}PTK8cK*NN].3LQtE:;8=G7FKTsh JT!=yLL<a:ah7MY)' );
define( 'NONCE_KEY',        'WG+i,2ft/<9.dt`s?5G@<XnlC5]]<)4*bzMF$B,h>>%,+Rm,RKoHfnm111%O2n?2' );
define( 'AUTH_SALT',        'Gz!MX!eD#7%BjBfu3 0U;E02EQPxN%OD<pVdQ@zVclQ&xRj40:4&Ac_{>KXjaYP%' );
define( 'SECURE_AUTH_SALT', 'vpDRET~eM3S|VA4mOgQc(.VuQ4%:G<:$&# 1N7Bwd:.A^_T|MW!mC^|>A|p _0C{' );
define( 'LOGGED_IN_SALT',   '>7pzjW&PE{8k^DkMs;I+5UDI#Z^cQqF[M htq5&4&/oM$Sx&D,;Z}_O[`LQd0ou!' );
define( 'NONCE_SALT',       ']8DS9hn}ismO`ino1x>rWfp+10pZw{B~A$Z%6zO2]NkP|I K^7fqRZuWKn~JcPS[' );

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
