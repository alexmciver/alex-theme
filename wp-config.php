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
define( 'DB_NAME', 'alex-theme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/1!%)<8zHEs Gxak<aQ[9g7(E)jE;e6(MIQl2kZ[zNkBWM0Z7k$&j2B{u.2s7!yZ' );
define( 'SECURE_AUTH_KEY',  ':3!>?lg.kr]cLlM&.P}R3^N ~K^,PY^ju<_pkY}o-7=@.u$~M&_N?O|!l>!-!?E/' );
define( 'LOGGED_IN_KEY',    'vD&6z/K-!Ke%YrwZ@tzfZ~0lkab~AYWePA77fw{03(J0t1NbXD.O9m,arDUPpeCa' );
define( 'NONCE_KEY',        'h7xbjS>bb? 4gVjr-Bd>aJPp5Rd{elC8L%K)!0_(&oNx)/8d$-)r.JEH`ntF|cC]' );
define( 'AUTH_SALT',        'Qw-C|v/-cS78E9G`*cL[|lOrhos?[=*3gDphq-:S!M@KR87UI-D]:!ig(`0v/;@6' );
define( 'SECURE_AUTH_SALT', ' _6mm-]QbQ~e:<TN F<ah5H&~>AM1$_d!{c:-5`f:5DG!bR({Go<H^6%Q27FD^8w' );
define( 'LOGGED_IN_SALT',   'eZSO[`!Bu!DSG|2x$-[Vcyn @Y%`&lC T2;*<]`<&{5:{Uldu5ASYQN+w^FO{pbN' );
define( 'NONCE_SALT',       't=N` y<6)1hU3N74a )t]GH0i$r.9E_2oa[O^GK^O^?bW7T~7KbF8$Nm>J.,-]|e' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
