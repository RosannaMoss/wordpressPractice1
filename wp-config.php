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
define( 'AUTH_KEY',          'EfW-w;A[/k`Q5w$Gzx;04kQ&S1_PgVbd5aCucS759]zIj=`&YGEJN~7wp-2lut|]' );
define( 'SECURE_AUTH_KEY',   'Cfrz^I+/^?Z!i^Pp9{ip,dbTy{zaQ?<`E2q&f}G*HK-;)C)GoOCVIQEJ%m_+f9-6' );
define( 'LOGGED_IN_KEY',     'Ql;G.t0+(H$kZ(7I:s/|Hyk6n3gW* r7kTkfJWU0~b[-m$v-YNCEO[Cbao5S|G.9' );
define( 'NONCE_KEY',         'F1)B56#}7RGC$[nVITBi}z?V29!){3Ic2B@VL3d}L@~KR:eMFx3nz>RL%F]@]E[@' );
define( 'AUTH_SALT',         'PbMK`)VEi7s+61!4Cn^6LbiE$]?pWt0^5>DE@ 0z]yof_sdE-wB=fa4otR9C^94<' );
define( 'SECURE_AUTH_SALT',  'NHL}dnx|<U|%&I;&idL2t^hi6.P1aqZ96lC0mQ>#$q9.!hM&qp~}D[L[nUG#JGy+' );
define( 'LOGGED_IN_SALT',    '+pTve),7X4{oX&5OOhtG:}B#2WZo7G)]i/y7<8ulmm!4mrr2#<n q_TvTLczXr1e' );
define( 'NONCE_SALT',        '9Fq5j!Z0EFz1ho.&Ge6Rz8c 9:IOs)ieXVxw%>,#0xMbaAt-{w`[E<t,{4Wh!<Cz' );
define( 'WP_CACHE_KEY_SALT', 'dO7eE&<j4*J`h =[%l1|$mLi`?0&GlIgc(v%+gMpU*!m(+/vB4$R&9B|>?sQmv)m' );


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
