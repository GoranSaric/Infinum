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
define( 'DB_NAME', 'Infinitron' );

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
define( 'AUTH_KEY',         'JqbaIQ0<B>yJFeU#6Hc(shZGxV(g@(<?~{DdiepL.0aC4rI,l3-jg5>iWtsC^Ac%' );
define( 'SECURE_AUTH_KEY',  'kahI66Q#Zp>wZXy%Lo]D6lY_KiH.3>VdhHQ,=/T8?6lxd8 cXzt&[t~Wh.W-XR|/' );
define( 'LOGGED_IN_KEY',    ',T|=4y39VTfq_0#7$<]kSzmwZ-%KmnNn/A%;0%:w<5d#vvcDHy_tJh,iiLTJ.PH3' );
define( 'NONCE_KEY',        'Y7@&Lh))BqBnQzdo;kMtLa;TbqIF16Bl4xzLK+n5_Jv?r%U@/|{rdC*-yjpiJJ!m' );
define( 'AUTH_SALT',        'F9}7y?X_uDDJ),B8oo_#v~>9o~0^-Tl->>WJtB*tYRs(/sSL^E3`{n-*u?UYSH}`' );
define( 'SECURE_AUTH_SALT', 'ChSe.vPeE 4fY!qt?jfauv&4=-Z/F]G0MH<Zea|qK/_v+Zio])3f3J-< {snxRw/' );
define( 'LOGGED_IN_SALT',   'ZX<I_6dMYGi|@M;s[!]7f+qIEd0F3Ek+`!zBtrp0R(GXI0>9bbPq<T1GvzVvIZ s' );
define( 'NONCE_SALT',       '`nK?@u7%xH$Ap85f;-j,b,Aq%?|:HpDk&C)7v]m%G#(EDkEh a=HKzceLRB5KMt2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'goran_';

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
