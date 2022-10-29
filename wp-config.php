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
define( 'DB_NAME', 'laptopfusionwpdb' );

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
define( 'AUTH_KEY',         'lXFhCw%;N?z6_Jrs@;#.vaLn:[e!v]{r:jddL]Jp]j$llUE%.}j (yUzfwqU5w.1' );
define( 'SECURE_AUTH_KEY',  'K{md:dyJIOMS#j6{jI[/?Q+^s$P[_touiX@L0w|fg+4ZqRxaou]XwzZ6uD._GV&4' );
define( 'LOGGED_IN_KEY',    'bIaU}a[8d2=j):RO%as``q=I{J~E.;j,_b7XiMHBnGNa?_:hE!9bbYA7 t|87<hR' );
define( 'NONCE_KEY',        't[6Ih`EZ u2RcEWVcGzU|9YyF0Aztn;,NOiIh[GnaLj]^sH@WjI~$_B>qr~JGI<=' );
define( 'AUTH_SALT',        '=Zb<aKE`O0Q/+.r^N1f;og>sggrq4SA@x]:FgN2~{IS^<B20x8Ae&CB}1B14$)/|' );
define( 'SECURE_AUTH_SALT', 'GDLWl 4zy8+4ICkJv=i3X]Il]Z+L!)VoQ/q_MPS:Cx;P4>pSdD7xBqJ6y;o.-~Ws' );
define( 'LOGGED_IN_SALT',   'kM3:vC}Ay gu{n+|Rq@jBfTx@#?ERdC22W[s,^%L_,bg}g;xQ[`$xb05S^?A+$;3' );
define( 'NONCE_SALT',       'ya$PH3.ZHLa@t>#aeO nMZaP}V[-Iz7`=z)m6:~,99!v>!1sa]d0#X)Dno?p.I=u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'laptopfusionwp123_';

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
