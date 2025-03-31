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
define( 'DB_NAME', 'wordpress_bd' );

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
define( 'AUTH_KEY',         '[9 GD}A+FeR`EC3Due5z^Fn9zs-L)`wTheG@8lC<zM<tz&ib$!!:^=i%*}XY2CDj' );
define( 'SECURE_AUTH_KEY',  '!lTJia,21lSS!!){A9g$vzm(X->HwyE8GkxXlYZ, -`[l8|i/O:~_eq?_KcV(;S+' );
define( 'LOGGED_IN_KEY',    'ER>m<P--/?e2]f~t<k2s.i$W@4PpEoJ;mv[OU2mIx:j8hXG^#l[U|=z[Svb:CfQj' );
define( 'NONCE_KEY',        'mAh^7}Dv@gZOM+w9$F#@ &i9{X@H{[N,(UI *I-:[&aek&u72/0y=&c,+TM:,-d2' );
define( 'AUTH_SALT',        'IW:*wWkxg`#pkO-mNoRrzvb3cD|CpdNcYG*ynNt*j=S%x_`*;t&QiaO&)}T`[i-:' );
define( 'SECURE_AUTH_SALT', 'p xrRyp0DN505zf}Qx|,[^R{>R[9lu7Vn+CR>sD|SZb`.r-@$L<Bs:FY4UEgZZ?E' );
define( 'LOGGED_IN_SALT',   ';VaJ-PGU[I(=O>BpN$J;7L*cr@@sPCB ?*]zmcClAeE>AWE,7(NG{k2;rK.nQ;7`' );
define( 'NONCE_SALT',       '!iHPxz66XYbcmA-=RBNpI>x3Y;WT%yr~ha}C2>G*zK.f@u*cTl,Gy@n+A`&y(qDQ' );

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
