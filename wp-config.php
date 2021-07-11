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
define( 'DB_NAME', 'computer' );

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
define( 'AUTH_KEY',         'DKF,_Z*.|5PiF4`d{TumIIzPcknw^T6(h8I|W+CTIFKF-(=PD(-^.+E}G]/G,N$k' );
define( 'SECURE_AUTH_KEY',  '-l0wCb7Op;! vC]HkjUK{wpwHGFe=G4*u!p#/~Lprm9YCBeoR+9l#xT:`f=>^{gF' );
define( 'LOGGED_IN_KEY',    'j8cfj?CMdFUAp1$A,83({-?BM0Q362QAw?}--pa5{%Cl;0f*}59;2fmFW(^A[mM~' );
define( 'NONCE_KEY',        'Iv&XF8M1G_Vum&fF[#q#@,eS{*bn{:k0FI{ykbX=GVhKu/I(dEJ4hhzi?6b;jN|,' );
define( 'AUTH_SALT',        'rq-KpAws0I_g6=;z 1ptL1 #1p<|Ie5.+Zfn}@2$l~&;OzB9j3~2%^Xcup8&,iiM' );
define( 'SECURE_AUTH_SALT', 'sC,,dyfmq6,%U@ul[or+y5}c9b8RGxd|A}O:**.MfL)@@T/KcSGs( tq3^<wG6cd' );
define( 'LOGGED_IN_SALT',   'r#x7|ok#^fiSX_)Howr)YX~PRYRpT007O[(P);ditok6x+RyT{M_2|Vt=F7vmh6G' );
define( 'NONCE_SALT',       '[M^Z)rFl%K&hQiqFQyYcUh1SOWW?SQC(~MYr<?hEPB>w(>1Q8~aB+)qnfsq5f!n$' );

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
