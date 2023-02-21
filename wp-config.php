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
define( 'DB_NAME', 'admin-phase2' );

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
define( 'AUTH_KEY',         'a806jO1#gAAQ[-UOI/~(?jqRz2).>@Y2w8j8`r/g>+U?!YgL_jL+bO-)x+q##mk3' );
define( 'SECURE_AUTH_KEY',  '8G}]~+JGxzw,2)Nw9~(KBi#V.ipJPv+#Qr?Fl;4}WqL+:]Npz%-bKmi9agDP1/DG' );
define( 'LOGGED_IN_KEY',    'Y,:CJEhgju[e|9>P^U/vaU@b/o#LI5e-;`LMRpq]:c~@Kd<zI^C^;>_Vxvqv q!0' );
define( 'NONCE_KEY',        'uHQ>RC2<KS)y_,,V89Rv4sAoUqho#lTvLC5~vR|5Zx&+#qVo9apm*uKJ@K%Z#M!`' );
define( 'AUTH_SALT',        'ia;>wIe)S$i1&#:Y3?x1*Q?Kn<+tRws5)(p!7Hj8hppOxTx!P_@fP,rBYlH/N^M?' );
define( 'SECURE_AUTH_SALT', '-#${Yv-on(&Ur*u<A@mR]/4:iE/(hf+d~1)c&%s6=l8b5YLeu?4^_Zs5jEugU_z]' );
define( 'LOGGED_IN_SALT',   'p3%J*l[UwOLfJ4+D9r,;b5`0e@er0tlkv{qR.!XKJ9,,h_rvu=#9k`&{r.xi(Yc[' );
define( 'NONCE_SALT',       '$-Cb!F|):NCUFtBOsS-s,expTaouETxD_+$YbHM3GrVq` sG#.ewNK@5(26A_ry`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ap_';

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
