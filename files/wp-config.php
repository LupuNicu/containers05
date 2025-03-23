<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'Az$,?`x{p;sb$eQ)(f#~]0[GbS>d9xYSO/vNS)>}Ah5$qvUAG5p`f$`|3l/VCQ=s' );
define( 'SECURE_AUTH_KEY',  '?d_ p3s<f|#vXqx;#mIBBDqLGp*~HcX|4kTH`Hg![Uyp ^U6IT-w}b&,-VxS%m]]' );
define( 'LOGGED_IN_KEY',    'W(20^rlqAu%jlEQMq6_%$De{VJ(yO:g&=/2eUaErMO1!SzgU!+uf/Paph[  xx]7' );
define( 'NONCE_KEY',        'Vug^jV$NQwpZ>3Xb%og^!P]_wC/K9c^Z=H[>6(.^p+_1hewHXGBt.~CgK$fD5X<3' );
define( 'AUTH_SALT',        ',JCKB0HAA~*kCThj&bDzm}-;G5te{w,d%~q% #:/gPDA3.7bm+F>AkYd(nv&&qcr' );
define( 'SECURE_AUTH_SALT', 'ag/o?r;?j<2|tMTTs5=K.~+,P9qGH,Kq! T-7U)nVoQ>mB4@@$18#Fc|AO?[*j:A' );
define( 'LOGGED_IN_SALT',   'eWtF0f/&|Gxq/UDwziVG4|yQAEJkVpoVUHbLLO}.gp|q*%v{iPj8WKo{>gp<qnw|' );
define( 'NONCE_SALT',       'SUqZ,KE])T<c0}hI87 W==c{p*J/Li(5+zY^*{,JUf``>{&,IYD*?O*jJ{Z_O#/?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
