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
define('DB_NAME', 'miss_shop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@>,@:E4S!vgP=A:C/7<)W4p0oHR,{i=WFh{bK8EJDQAGsYHw5UA]jx;&D2$S/Jl.');
define('SECURE_AUTH_KEY',  'E1]PqX!6d)UM8/8~<tk4Dg_-hH}E!n`nt(Kp@$SD/WyDZk]4{>>NI0),bK>u<p#a');
define('LOGGED_IN_KEY',    'XLZ=u;eQI,*vc+R)rX(w}Q?H7t0NEAz#C1kQR+7WLAk2!m8.m&>N+J/(X|`VJw g');
define('NONCE_KEY',        'e4 I(.;A59noWjR@|DRGHO/m;f?-%wb{j|5Xo-]Ng)MTkiKNZ=4HM=6vvF`_}Tai');
define('AUTH_SALT',        '+()@Krf{TJ%Vj8yc/A9}l;3!iv)2SjK`F{MxNL4CgXJ;{nIOtq*h7> =~2hgA?br');
define('SECURE_AUTH_SALT', '=27?K6YtdPMf/Aio.y~^UrW%Mt5!3xe@op6N-~MJezB(e$go%+J#eXUisL5SmUxa');
define('LOGGED_IN_SALT',   '?Q|-$/IDB@8e-xZsx1Oq7>S_IYya(Nev%Q9(K@-fLe|ky.?6w`y4x^yhzht8<LC3');
define('NONCE_SALT',       ',Hqt806(wly+ x=#tlmLGztZ;r2t(GdZkpn(^y$.1oXCb~e#uUFpmG7Z`MPLL |%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'miss_';

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
