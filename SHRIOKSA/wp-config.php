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
define( 'DB_NAME', 'shrioksa' );

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
define( 'AUTH_KEY',         '.&Po>p}0QM9;+fAEpl9hh sw+#G}6;;(VG)uO/BwVD>S`BD8UYUCTR;^UZXVz&{a' );
define( 'SECURE_AUTH_KEY',  '}!PObp@qw+$Iwm:aG.YEUS7:.gu@VL+AK=(M7p%^mkSx&Ice:RQES_S6Y[sohHC6' );
define( 'LOGGED_IN_KEY',    'ITt|VbZA~SaKIPTA+ab+&.9LusG^)#0rI?IzYt!IcY]KjZrtBM^fJIpTNZ!,&$h`' );
define( 'NONCE_KEY',        '@Vk#g@tZnc4oQ0`t.0U`jko{bCLjarR@Xphbx@IWAg-)g3B}(6az|]n]8`8~&CM5' );
define( 'AUTH_SALT',        '.I8G$a]$m%xU3RWGNk9{!UbxQ:@Q~ T`K,i+$.YLHJ!@VkIyLR~F4@&Yc4]C}a5}' );
define( 'SECURE_AUTH_SALT', '?7TF5c7W+xh[&&f1NTv@E;mM*;oj=!u^0rgFBY+~YlQ;En8_/wy3R`mr9M:DGBP2' );
define( 'LOGGED_IN_SALT',   'cMleQ:7q9:9||VwHZ.5J)#W84~RQiXk7ITq&vAqlHCr{DM_P 3{b$rz|>{RX^jng' );
define( 'NONCE_SALT',       '3,Hl{9;`,{^8vMj= ^+JJ0c_2%4G&[m{DtbSPxpAqT,1iano:fx?/3mKcySsY=-l' );

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
