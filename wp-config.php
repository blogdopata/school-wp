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
define( 'DB_NAME', 'school_wp' );

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
define( 'AUTH_KEY',         ';|ea>x5_vqSBTYt>zXi,!5l@Ye.@BH/wU~.tRtMR{85sr>?Q.Lt(jtna?5f!V/QT' );
define( 'SECURE_AUTH_KEY',  '}P^YK=%-cEo:/%`2rksE#p7tq!BE9oKcfQzdh|GK*gi@25De<)3o!8z> m+92L|^' );
define( 'LOGGED_IN_KEY',    'Z~ILC0KXn@-YKs{FcrZ#a%I|*4HpXEV+:/?X{zESPHaL3b/hXn:SZVP#D*/fl`[)' );
define( 'NONCE_KEY',        '1|xF$SmAof#Y1Z9H=b|9 ZHg46S{3^m6m(ljEu{NG?h+5c}KRD8FN`]=94*4y;as' );
define( 'AUTH_SALT',        '-!cBg}/@~b&#8TrtJKzVMP0Z2JR8vCj`s+/W-ux-WI7&tfk!W;M=m(!NQAB;X*2N' );
define( 'SECURE_AUTH_SALT', 'cP=v>rJCq%{V2>5CJZ>mAa$]5V,s5]T~^Rzmy#2:%*i>Nlr#CjX#>W4q18|HRsoG' );
define( 'LOGGED_IN_SALT',   'cT$Dn)HXBA7{b|;}95stXErnhzue#?El?(tkYZR1YI`[K^88a.3$@vcrl=zjbK@8' );
define( 'NONCE_SALT',       'PnV#H,4Rs~8o.q^;QNsq;i|^U6q**&YPrs20,eMH%P{:)9vsB|Qu_@)eS_{{.FbB' );

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
