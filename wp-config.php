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
define( 'DB_NAME', 'wp2' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'kzq/WdH7NdO5)#(NC~9*E;13)6?fZQP_kLQ*z(K218rUd~EZ3L9zIpMXg]nu%;_7' );
define( 'SECURE_AUTH_KEY',  'PaIW=_W(#/[|q_SYuEgUF,_!,Gp2p K8JBb-OZX}2WY@=H)QGcT3i#h<{xVg8dMO' );
define( 'LOGGED_IN_KEY',    'z pAa?c/@X0`aew&aw?Rx(A.!Q}Z+w;`:I<t=MK&kb;Y=XDFH4-iEXk2:S1m}0A ' );
define( 'NONCE_KEY',        'wbK*rV`v|i*`{6jBr$?Z0JZI>DV3p*:ju?^TEI!=)Alb9~n BG#bA(-+t/@`et[i' );
define( 'AUTH_SALT',        '!PZ9`@>fk:, ~&0TkW9R]Fz( YSs*rj1^KIue}KLG)[%)WO^0ut2o15@gjq|G*Q~' );
define( 'SECURE_AUTH_SALT', 'PX;+fDkn+}JBL6`S-(BOo/jQ8TT8.wWdgx+*{fFSt5mI)]}OIZgaJ7^Y,E@?&vVh' );
define( 'LOGGED_IN_SALT',   'oVk]tbg6dgu< ws2x#IUQL5xn5eiiJZ~aB+3:bevv8Sr[rmI~UWp=$0g@=xixLoQ' );
define( 'NONCE_SALT',       '?RR<c*$05d$aF/<}XHz[1Y/heQYT7PwRJX~b9G8cq;NIm6NtmOUDQ`4? A-F)k|M' );

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
