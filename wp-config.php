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
define( 'DB_NAME', 'blocktema' );

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
define( 'AUTH_KEY',         'nd}a*m{7iks$Fh{5~w=m9c$`E,|0`;)0XQBLl};V048*.m,8j1*!XcZR<AWpf[mF' );
define( 'SECURE_AUTH_KEY',  'Hfn2U|rW&5i4fjh+@Uajv(f^>3{CGV{=^*IlLH_kDlWk~N>;,Row)XWmdske+mY7' );
define( 'LOGGED_IN_KEY',    'W]=O_WdV,P;b/rmvZ7IH}P uwV*w[?ZUD>Zt;~_:,?_i_3KA}$kHO-_%QPT`bY3Y' );
define( 'NONCE_KEY',        '(ntGx<90t_n~d/+/h}|9|*}N{Mt/iBq/l<Qu)a,0t%nc,/Lldl&K $od:b-[)e?P' );
define( 'AUTH_SALT',        'hmG{:hy;;g?#wWiI-tHG{%]p1Ax>zjgNFC<V/SWHxJ!1P|)4Fs?P;t@.?(j#>zR~' );
define( 'SECURE_AUTH_SALT', ',!cbE^497]M>h?`7sas:)SNnz.t-3k^j?CB$~;ud?f:xfs,6q1c45?S<Q-MEgGY{' );
define( 'LOGGED_IN_SALT',   '5~T/FwYxEpqc%{YZ7^CH-a)|ea!r~&/Y:<YGM}IvS,gl3014+2P7hXnC)ud[m =`' );
define( 'NONCE_SALT',       '|3W-[xP1TS.kLLp%L,%%_hS,?6*vmp?>Y/bd/aTjP u?Q$78{n(_8n-oEmnzCU(s' );

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
