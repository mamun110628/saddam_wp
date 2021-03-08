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
define( 'DB_NAME', 'friendzsoft' );

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
define( 'AUTH_KEY',         'N8OfG?=?Zb-o,63Lp[^Qs+DoMRP_V])i{}wv*qiqTi*V2G[20X1hLrUT,430*qN.' );
define( 'SECURE_AUTH_KEY',  'S?<n<a`gx3?efH*uY|S!z[*`mvVXYEZ^Zhw!!m:9`z2~>H-1!&!/@D<m}ERm*}9t' );
define( 'LOGGED_IN_KEY',    'c&QvedkqMlx&t0lhu.#,=`.W+=(] )T5UIbG&!%W3GBxSf*<l7f*qChXvI0}?s,r' );
define( 'NONCE_KEY',        '-E7V{[,Zo@`=.Z /!dGF+4QI_q_Hnyf-LXX<0>46LZ?/Vi)pv+U2<>gqo#JSn$*:' );
define( 'AUTH_SALT',        'PanbWra2/Bbwv ^$2eqlxAJ$Q64.B>Mni<wjB6ARz;Hy2RE+V^5]nG|mjWg+_=Z{' );
define( 'SECURE_AUTH_SALT', '5Bnf!n#gi(~P#t.#3){K<GMZ$8EG2^,keQD*$<HoK9c@@#07nr;d&)Y:Xr^![k1j' );
define( 'LOGGED_IN_SALT',   'RB@dEV_adP,glsgVmLUJer=I#XF2{?m.<^Z=vw+4JxE*`|IYC=Zrbu[I?-Ap1+DS' );
define( 'NONCE_SALT',       '/If$#quvul+9+zZ_RsE@Zl$fiC%<_9rN|i<,XX*q`1`*AfM$_rVq&kODycUE]%9M' );

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
