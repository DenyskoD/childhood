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
define( 'DB_NAME', 'childhood' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ',`/2CCMqw0jgPGiwxx=Tp]L=^6l,g4~z8ye+|$!rg3uHZ:_#qM~-*q<m4iQEImVR' );
define( 'SECURE_AUTH_KEY',  'Jh_L05J)VwTw%Ly*jR=o5N,[Ge{V@[2:%>F_`H{&.%w@Z?>C^>0XOC[$_ze/FZ>e' );
define( 'LOGGED_IN_KEY',    '+?9b-%jji-~^,H>%Lb)3g{ ^SSZ?A-iaqt!H{kLf2.;zN&<2bgX_D*+6SAvDpUt|' );
define( 'NONCE_KEY',        'h9mN8Hx%2bPqY/b(9B(S/|lvvhV[.~Y.a~3Kvm?um13*0CuNwb I{keU1i7Jne6Z' );
define( 'AUTH_SALT',        '<?to//y?nEy;FoMY%xhQSV_[ICTUy?iwGsfILtM%[h9#tvv7Nd>cSthZse.QR+t{' );
define( 'SECURE_AUTH_SALT', 'bVQTUkKT>A~%?2siUkk:azCh_)fNM~FFN)41) grPz{63M5oFrK7`p:43(RwUuW%' );
define( 'LOGGED_IN_SALT',   '&0TWEV7ET4fBY__PCCQ} ?5FuMhhI&Gg%|r?1fE5`M]lc|h`/}g61K!I@%F3aq@R' );
define( 'NONCE_SALT',       'gPKFbMx^|P6MMiWC15hy?pV86nQcq[054ht,`$AU-@y|M$()qFh8;,NqesBs1,4g' );

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
