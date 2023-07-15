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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbmyweb' );

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
define( 'AUTH_KEY',         ']CjqzQ[:(|5O+>:RoeYwG@|}bh!:4V&UQm[s_o.PNt7 ?iqsaI+V0E>IX~hLoRL(' );
define( 'SECURE_AUTH_KEY',  '7vx,6LQ&QV|avw,(;9U6{<ja4syJ|Q)]n7h[%^:=slgi[)|OoV~gLn*vE)m|BMTT' );
define( 'LOGGED_IN_KEY',    '`2`@I_m_s4e86OndOyIGMf.t-jW7@sX-eHep,^#(^k=ayihXt|lN<~-FOGV1#m&<' );
define( 'NONCE_KEY',        'uuvO@6SY^xkeOr{itOBI$UWzp%;>nwat;?ABdME?4Dis%#Pb}[n4<y0y{psGUzkT' );
define( 'AUTH_SALT',        'RW]?|cp}1^WoD848gn[j$]73]kuFJXsQqYOc!*J3bs:R7uY>0nArxmQqqS+)$t#}' );
define( 'SECURE_AUTH_SALT', 'ub/x66zvOlbT//t]R.>Um:gNnTl:GbSy=*^;M6zYxdkTI<5YQTnS$DZ6MtTjqpCk' );
define( 'LOGGED_IN_SALT',   'wwG?j$%E_S-+C.gW]injQR]a].gq+lo(%Ye9_VsC.^Ku8 $lDeG=$MiW [[KE9fF' );
define( 'NONCE_SALT',       '4rB8q/uu(MtO&jY|:1Tfm{1m(qDAlwIFwxS&%9g4M0_jRSk<cJuZ8jautv;~z)2[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
