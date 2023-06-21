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
define( 'DB_NAME', 'carrental' );

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
define( 'AUTH_KEY',         'Mplvwc>q2+lm]]n9B/H,T+]^`D}MyW{L7Cb`2BV(%$2Hb @iDpqt) U]d7A%Zt/c' );
define( 'SECURE_AUTH_KEY',  '(Xaa,Bf{eG]Xpbc`pZ_DK?JnQ7>iTMYJi|Q3Z+GIRsIaxP0hTDZI.3kgPn<F=w>r' );
define( 'LOGGED_IN_KEY',    ' :+i#01TuQBy@$Ds~[tXO2~O OZ|`:#Y&8M7b3cdEw!&CrAMt4iq6J-Z<`qHm/=J' );
define( 'NONCE_KEY',        'F|6Lk2F=V,(SzX{`*+Dq1EF%&:>S02fCBw<rAthP(9h>{j@UitiV=lm 7[>N6 hH' );
define( 'AUTH_SALT',        '-b<_z/XC2VM>Jth<Awm@V:Z*uu.R~}A*cmviX9;p`Y!2&~M (F+OT@$Rm Dm4dnm' );
define( 'SECURE_AUTH_SALT', 'Usz&`r@B%I..yG=}S+u:9TId4P=i :3@+P3s~^_m[|#R$sun0a#OQhF7jCMsJ@FV' );
define( 'LOGGED_IN_SALT',   '#0V86!~[UC1})PwQ3~6JS~+G#HbeHwpwZvpYQoJE?~QPVK<)S{O#bU9Vf}#/(DV*' );
define( 'NONCE_SALT',       'l:MB+t572QSY?2-Jg)Ra{>coJek4Avh*zd}ng/R{rL5Kw8q.2`U6rhx.-],uTn|c' );

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
