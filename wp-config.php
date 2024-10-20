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
define( 'DB_NAME', 'test wordprees' );

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
define( 'AUTH_KEY',         'm&ymC!^ev{qg>syJ.2]H+@w^8AS[9r_WFe[q.Pri^|PwNFwf-.RxX8W?N[Yp?gp4' );
define( 'SECURE_AUTH_KEY',  '-[sBm&tqJJ=?qYX{sN}E)} &3&4x}JGAQ|&55akDq/HHzTr7 {|UA qr}Vpf`W[8' );
define( 'LOGGED_IN_KEY',    ')8ET97;ZB9!/ WP&y0]!}uPe4vG|zCWmbpd|?YDH~s0lXo/-<1VtDxCWl] F>)qW' );
define( 'NONCE_KEY',        '{pLWAP[-`3/U3dQ;j3[U6W5rR*CF^]h[].3x=[V8}3$[m#{WIRKs;o[b>6 *7d^z' );
define( 'AUTH_SALT',        't0QvILw78tK.IJItm{5:Es-&x%tYlbLgp}wS.:gR_&oecB%7L%wV3xgsfF-BW>zt' );
define( 'SECURE_AUTH_SALT', 'vpx YjJg2ORC+w)phYtzSgRcQ<ZsYN-u1-(bIHnQi]|z8I0SdcS]4/l4P^T]<35(' );
define( 'LOGGED_IN_SALT',   'uE[C6/7fkeQQ@=`P@ncwr*QU<J`tVEwz9{_W(7,{/7%1986_o$XgZ9rF^v]gHr$B' );
define( 'NONCE_SALT',       'Dz(meFfeQ>r~edN<_8joxlyHcVU5z_%=jtJKxIYnk$Go~{[W:UNM|P^winHK:t:o' );

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
