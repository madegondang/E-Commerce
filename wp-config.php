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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'v$6A=`R`b+&PkRSQ7V^z%87HH><zS;c_R6k@Ra<:3fHT[Nz[6D5~r{2F,ZQp.VP6' );
define( 'SECURE_AUTH_KEY',  '@T/SKVYOA`9JCT:glMqW#==kyMj=0v3vqjtI|{QyXATUJ<]k%`_MBu.g-]Gi<[1q' );
define( 'LOGGED_IN_KEY',    '8W<A* dD/~;lW}gQ}K_1@|BO$R<yCc+zu!ttg2oV/)ZR0j7umFf[&C!p+|<BEDt0' );
define( 'NONCE_KEY',        '_/J_oWf/+.BVyDgqnT~J60_&AN@cYAotqwX_+j~Y5Y/@5Q_k9mLUWHvhb,nR<4#c' );
define( 'AUTH_SALT',        'U_oJqEn=S/bj7u<>GD[Vt&[6j0I6~m~zmNz?f5N4}}L dTwE1z5T`cr9s@xA2S.G' );
define( 'SECURE_AUTH_SALT', '#-N_yyj6Y!G,?wI}x3gZhjP22*kWj14>+$q_y]=q49{De8?<DP!O/s:!NgsJRKB=' );
define( 'LOGGED_IN_SALT',   'UcY I~4:}=;oi?gDR)s]&.OW]TI@8r2,;!j6=X);To?t-piC=A7Op|67&#T&_uY$' );
define( 'NONCE_SALT',       ':d15CRL^tGR )@/I qga#j!aPSSgk$s3M3+FVduK3q:G#()ltt785K2#J{v@I7!M' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
