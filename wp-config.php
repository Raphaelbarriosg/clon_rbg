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
define( 'DB_NAME', 'ditamed_clon' );

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
define( 'AUTH_KEY',         '0MzSeQDz9Wi.<~4Nxu+Il}4V=8b[YX.(Oe(|hx(HX%P7>Qe@lLcutx917-9$@66!' );
define( 'SECURE_AUTH_KEY',  'WT+e}9`0/+8lTy@8Q`}xzve&xawbJ`0QU<ereT.0;k|5?(+a O3eDphkZ(GZME^|' );
define( 'LOGGED_IN_KEY',    '`x@lsy]fJdHp6_Q7N=.9E7D*@ `dZGxTgktla~n=H.7N[VwycTW:/={`p$2j/}-C' );
define( 'NONCE_KEY',        'S(-u!P|O*8M1sN-9vYH$}I#4f<p|JU7zl<]<_i0m6}dxLquZeKXq(78V[8Jds(dL' );
define( 'AUTH_SALT',        'sAV&[uT[F7;:uvsAg7_jdL7BJ3LdM7h<[yBP/IT4~)-D-7nmHBb!ydscrqRJVx}*' );
define( 'SECURE_AUTH_SALT', 'ujsr~iNmo6-:>Rm~KG/QC&.GorP01%(dGW }*(AeGFWV:WSEy%P${8#A9XOQ{~eo' );
define( 'LOGGED_IN_SALT',   '5oV)jXC53Gkt![%38WD?vkiPimFB+{aQH$lOYED~r5+na7Y<E@:d`CBr_vI:ZYrI' );
define( 'NONCE_SALT',       '?~vE{XDvcyIOGLqG8yjrPrBP<Kt.tf~K)]eCu>|yWv$5Hu<2R=LQTDzef6Bb#*hk' );

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
