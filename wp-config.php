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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '_(@3Ee<_09(OP<_1l/7o08/Aj}m}ig#4kZS@yS4rT&D[8[u;]- *Er;z/cU7&3iO' );
define( 'SECURE_AUTH_KEY',  'W=hks0PXyN22F26q?pe@<9&`C]H9^-9t}j_N$Da);%+k[ykvxhNP1Q1:.BE{ACCC' );
define( 'LOGGED_IN_KEY',    '  )--3NYPBE5SFgk#[ E%ra$9Cn1E<}r^1TcC<#s?5P31T%CF2EbGe~R!:]p,h{Q' );
define( 'NONCE_KEY',        'kB<~oSTq>I>>|Ib$/OR%]CAu ^7i8 ?]fym@4 ^L3|2=!!%Lv`I@wJ{`=)eU=w=o' );
define( 'AUTH_SALT',        '!]~cMoCW0rpyC,X-y#wQ!`A5S&V]<h: 2:3R~?Ok438Gwz{[$EZ<l?0?;!TTe?l|' );
define( 'SECURE_AUTH_SALT', 'vH?/LC[_%~7[yC(mPGrbV+HW}pLov/6-gR`b|{Q0WB*$>/@kjhkg|mOcg[ 7x;+l' );
define( 'LOGGED_IN_SALT',   'QWxQ%PifeNp.O<`Ye7x`wrn?&N)SfMa-:<xK0&%_U2|dDMI~_a.I3+Q8%M0y>zG6' );
define( 'NONCE_SALT',       'OIu34=Y{5,HS}*;xsr[IN=3$*vi)Qsk2J77VO}Ir8+Ij4fZ1%Hdm@ oTA0_p{E~Q' );

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
