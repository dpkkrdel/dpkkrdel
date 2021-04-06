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
define( 'DB_NAME', 'word' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NewAdmin@321*' );

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
define( 'AUTH_KEY',         'i.EaQg7A7vHn y68KX1Pz330|xI+>DaoA?IoyZwXY.Zw+B^dHy?v?Y=/Z}I~)m+V' );
define( 'SECURE_AUTH_KEY',  'HM#E@<O>Kr0P*tKLF;,&d,w%,x72-wHbbYz)GaDj`43{]6$:nl)1kS;cW[goQzhA' );
define( 'LOGGED_IN_KEY',    '+DChq#I`7<tB~TpFFun!f~8-<pX3Tx/74fs;Q^;9oJG2,2`sQ8(YQ4Ux7D@}*`/v' );
define( 'NONCE_KEY',        'H@7o3f4ght`2Pie,Dl=hr7w+bywSMyVeX->USfT)rXTc|pq;*8z?nL!UNU|IM],q' );
define( 'AUTH_SALT',        '.d+vFHj)}fX(y&WQ9?*%:V6ksF|-*6GI;kpWHY/:tT@<k(u|zj:tS{iH:[[3+cn]' );
define( 'SECURE_AUTH_SALT', 'JSC4 x^qq8miJ6 _n/zq7B(+IA)M0TUz7]:gAOudg4)rfRmH#D+mPx4s5lM=G7MS' );
define( 'LOGGED_IN_SALT',   '<VU[renKyv/FKmXYnth;VP.q_=?))Gl=[)-gHeWhJA{9!%(c_LZ5U7MFyRVtvg)O' );
define( 'NONCE_SALT',       'w[5ELo-7I1elQ39xz+6]j0tY4xPQ(]v[kYh1KrP}qeT{Fl@En*-l_eICtb>F.R|b' );

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

