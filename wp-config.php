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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Af0o$d#nlvytBTJa94<cDm83wKe88@T: OScOwaiwXpuq!Kh[pH)+_5t53byMCb ');
define('SECURE_AUTH_KEY',  'd8RK$^ck&<Y=,P#,9UW4= _ 6ZQ/}z(>&Q*1ddYT1:3i|Y^EPz;ABVXGH/:->njn');
define('LOGGED_IN_KEY',    'MyuT.]?wI,=yz]XR<E,YY*H1(!&sx-}6iG>jd-MB-rGDtP[5*wj;s[eiOI&4[3RA');
define('NONCE_KEY',        'Fg;51y7qXQB.^ZG6K`f t bz:=CM&A9[Ov2xu,|wQt7ZX+d+:l6S?)xvON#]hiE7');
define('AUTH_SALT',        'v3ef<L}csA[e+^vtuQYd)/6M-0*)SYA`V%gx`zNR0id37)5FIpT6>!*Sq/TG4gy!');
define('SECURE_AUTH_SALT', '+[@y4k$/vE.$N;4Zwvp5#/[o,cQJOlbs:7kr9)WsczvLY6Bpj2,2!p|Q65?NnMMw');
define('LOGGED_IN_SALT',   'sH-K4dYbRl@S&>G)UVdt~3nFSr`_cUIMs_w1}4%FTvp/dx3`_jR8K$3t!p#wDR&+');
define('NONCE_SALT',       'F2Pu)Pj:S{D83rWH4@X5lln.RSE+p8,lt_zom9:.<q`=}?]Ykq<SHn,MIi]NQR?!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'peperoncino_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
