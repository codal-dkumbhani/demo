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
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gINzT<U$:3e@4~uDfOww?J<wXaf,^BW>wT7V#P[B!,DPQZ|HZqr~Sx4-aCO{Ua2:' );
define( 'SECURE_AUTH_KEY',  'S,dOBq8;J =ee__v_Jc`~nA]7J;Y%2RC#7!@S2Mr&|W:%(e76F[!ocsjxeX{LLB&' );
define( 'LOGGED_IN_KEY',    'H0[ZT[=CVtf$}<#KGWtH3Rw& tr%>sT!-)-p{IeNf&[97CGrKSxT7nLP#<S41:<^' );
define( 'NONCE_KEY',        'U#2]rE7!5h4LhZ;Mdd1dlnBd{F+@pmk63c2~VLV]UCLK!KDtmEO#ZT/G +lHn~`1' );
define( 'AUTH_SALT',        'Fjr^-g.RVYB,L9q7A%]0/kU]6Hrr&)P9MB~|RgaKii}rx;jC#=&F-F0n${b5sJWY' );
define( 'SECURE_AUTH_SALT', '#v:Gg1P,hT83-Ilr(W=4J/yOVZFDP@#W)%R:CI#lit,x20q$-g?8CH|UJY5qs$`8' );
define( 'LOGGED_IN_SALT',   '1lY|>yyevA=8L`kZ9s<.SqMT}|o|]m?:`f73^RZuQ,7m>;Fg9FD:^}8q7%|bOo(v' );
define( 'NONCE_SALT',       '|9to6cL>`/[qlS2ln<xDoeBQz0D<k)WWu,#?.62|_<DDRNo]P}/1d$)4y{V5p;#G' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'UPLOADS', 'wp-content/uploads' );
define('FS_METHOD','direct');

// comment 1