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
define('DB_USER', 'wpdbuser');

/** MySQL database password */
define('DB_PASSWORD', 'Arserverdbuser');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* JURE EDIT */
define('FS_METHOD', 'direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'p&8u8/}@-hNL6`dy[?*9f*e^In$dFq8qKt`Kzn{)`u54>qO1T1]T`AK`iK,8Bkz%');
define('SECURE_AUTH_KEY',  'UuOW.{w `wmEl2*>s(|D%Wv.G8+eLt[~+n:OnUlK-n8[giVQE;t?^f[P)58VT5N)');
define('LOGGED_IN_KEY',    '!t6ikS]^2y:+>Fl^P&YZ4Pej!1]+sF$QtK:[FbsW|apbq|x`CdpYhwJK)FULEA+9');
define('NONCE_KEY',        '.2Bi-K?LOeB4Fvtl$fPsBL@KOAV:YdN|0dqXjp0cO]/;ZLmEzb9?1Z@YB<+m>7ON');
define('AUTH_SALT',        'Apvw$-SwJjd]+G#y]u3z!OLM2I8+uO:;m%pe@*tG{WXQW4d b:(jy)<)#hy,&$|y');
define('SECURE_AUTH_SALT', '!R_;*Dq`+_:(#FW`_fO/?`e>jrV4?+d_T-IzT[W+!17~YYDRlsOnX7$5/OkI|j]O');
define('LOGGED_IN_SALT',   'UT]D7|6]qi8LN-Al2ixw$-%0!`BP93a_S~.<(t8K-i,yBL/_x#a0kcX[Q~Uo6dxE');
define('NONCE_SALT',       'XzhIQpT})M$U]1ij+7%60Op|d:oS<s3_QTX[(X;72AS.K$/9`|oV,bQhriw.cy/+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
