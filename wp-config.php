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
define( 'DB_NAME', 'kejari' );

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
define( 'AUTH_KEY',         '),f>6<6S/Sf]>5.cC*.nTX^}Zz:BSyMUA) B7LRtj;fu)7s0I$CS|= 11mte{BLT' );
define( 'SECURE_AUTH_KEY',  '3Q4rp~PUbaWagiMU?apED zV;YfKDlCw/UIZ-a)J9*8INLwq?WB 2^j{P!GAW9V/' );
define( 'LOGGED_IN_KEY',    '8Dhgf/CN@TwFBd5k@25q.<1h9~oWi@7}K_Ie%Nkl}p~<.2~4eSD7qD0r P8y+p2C' );
define( 'NONCE_KEY',        'VtZ?7rAb5+*)k^[6D!K8vJ!0y+=5rXI]UkT#yrUUXqS7uuFB)@GQy0{BmHL$xWOw' );
define( 'AUTH_SALT',        '~bAgsHJ6`J?7(jDi|lo+%P(;_LFMz!U(A8OA3xFxeu.w8*CW$>Eukp]A3<j}!Q(^' );
define( 'SECURE_AUTH_SALT', '#QEoqW]P{`:{qY3qdy4]/jc`r)N}6FVrcj!83_VUY-@,-|0Ler}@ji~br)nBc>og' );
define( 'LOGGED_IN_SALT',   'yeEQ/B+Z2FO!%NNxEy6ha^y#+]x-:#3OY~)XgHLS<3P@J|LbJw;Rdr58Wu^mU0hf' );
define( 'NONCE_SALT',       '_z^j%$.D2ZNpW^R;|<,2(h!ka9h6[g(Jl[j)tB=asB=[^wkM3ly$IHD#g#|wAKft' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kejari_subang_';

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
