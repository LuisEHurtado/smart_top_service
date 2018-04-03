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
define('DB_NAME', 'smart_top_service');

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
define('AUTH_KEY',         'W2<RAvdW/qikPj&iz/Y/czDkzJ3yFmJgjOo@P;NV<bm>e#TJxwDA}O3nm]py[c>O');
define('SECURE_AUTH_KEY',  '?o9)ij#^~ylv{m|YSMkA5MPlJ&3]as(P+65^7vEl`{bM=s?N|R3k|s*C:xB6ys~9');
define('LOGGED_IN_KEY',    'u7w!2<LZ4h<4K@LD!4mPfi[)IP=!(R8Fk/z,Bch)`O%cAgSxgK*R*tO@h+C1 ;^n');
define('NONCE_KEY',        'wOGig~ft)-*YKUL(--fq$/p8=EcH|p u7=~hkVKeH=wKIH=|pNA{xmLv&q8sFBCL');
define('AUTH_SALT',        ']EXabxgCcMyTQDo]w6^,^-;8?e{>#q _Uo}6[2}?D-nC*~n&gxQ9TkU[#(n8|#xS');
define('SECURE_AUTH_SALT', 'sK!DHxO+)Rg]qDSkj<:Q0O0t3(v$;?2^~c-R*5&~@mLF2o;R3=$MpX?069R{pY`L');
define('LOGGED_IN_SALT',   'FCWPNVzL^Vz5FgSyy;hk~SB[#i?JmW`ZiL@WB?2SbaX2l.i`HM1]R#!,f,2TApt2');
define('NONCE_SALT',       'wHzi993d+PF=`. Y$m1?oJ,4oom[Mt2#kmu]bgXxlSWG,)d%B1JGmRLb9le.T6?E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vr_';

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
