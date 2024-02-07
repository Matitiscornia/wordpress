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

define('WP_MEMORY_LIMIT', '256M');


define( 'DB_NAME', 'prueba' );

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

define('WP_SITEURL', 'http://localhost/macosta');
define('WP_HOME', 'http://localhost/macosta');



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
define( 'AUTH_KEY',         '*HamrdqsT}m8iO*Rk%-7AC?FBb_0uxK*-s}$>Vh)P_I(@)gD6Lpn*XC>!OuEvqs~' );
define( 'SECURE_AUTH_KEY',  'ay-CFiY2$1nHXiWA1f*21z2f~SHpH4$gT?lw8v)MK:55.v,_hyKI>G?pm2~cZh-a' );
define( 'LOGGED_IN_KEY',    '{DNN<jwUk=[@ Xr[fU{cgH&W (._Q0`Pq.Zhg^{DSEx#ntrp?5YY@)%V!*>XiMGh' );
define( 'NONCE_KEY',        '0@@jyqvICdg2AzDi-mQ6?6Y|C^[ ^%l_m^Re{07/7fl(@8jH>S;]}0xRz4;Wu?nL' );
define( 'AUTH_SALT',        'HB%h(8,Qf3]R|=EEbk5_<9a/!L_~QV#b8{fs>U_1[qB`w~q!GBA4puxp>Q211d;S' );
define( 'SECURE_AUTH_SALT', 'L^LS{=nzY7+3BbCd;gHlT0&E#?Dmj)#Agsl/p4WP%-*gQl6;.^zgV>V;af.A(Cya' );
define( 'LOGGED_IN_SALT',   'JP09P(/u$^fICo8sF}#Z#/S%z-!]vjt~rFEq_d[k`nM3=FDj(:2+?dSxJj2 =B<.' );
define( 'NONCE_SALT',       'ida99OVMetJym7ET;Dv A&_6L.fBU &+fe+YTs+5EZZ#5EP0<%lMN>UjyA|{G@b5' );

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
