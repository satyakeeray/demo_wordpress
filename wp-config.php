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
define( 'DB_NAME', 'db_demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'ns7a}&USlrdCJT<|)rN$nQy>3b#W:t4ExLfX<*K%D_Rw}9rB[4wJ=|fycJXu/A}=' );
define( 'SECURE_AUTH_KEY',  ']SHg huzvO/Iu9@7g4*f!u*e?x0uN#n369iIKIP9Vr.w.[Ei]R;oK{y{!EK*7]7p' );
define( 'LOGGED_IN_KEY',    'ub~DM{)S~e2>DOSLND>HwGSIdI]U<DQr#1AyH$xgDa_VyJU!p~n;Gt/x?hLUm:)N' );
define( 'NONCE_KEY',        '27%nx{[H$w6+,3LXb!t[sY~^7v~BPNl* m?wp_Ok_J`:6K/$?d3;hwQI%kv7+:Zv' );
define( 'AUTH_SALT',        'P) J0pPd0ldX5T5mX(Bo$O;B_ss3{_?d-?..|;-PVe?<KfUoGdg=_v!y@IH2wAHL' );
define( 'SECURE_AUTH_SALT', 'S69g8rzA)F)Vo-rau(>0^%<B$tv,p3T%via]tbA-~}c|1rph~[yE1vjyX%&;(&c4' );
define( 'LOGGED_IN_SALT',   'k|1SEpxgCW?<R{?s{GH:^l?`vWJdxyqr2o7Sm|MM6f@n,D#iJvg9><MQ3d%1<^UR' );
define( 'NONCE_SALT',       'slDx4/@1#zJ~Y8+Yf}v/t_|6d$.QqSKg*v$hu7_j)bTNf)T6myQx~}]h%*Zzb%%I' );

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
