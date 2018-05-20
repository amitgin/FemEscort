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
define('DB_NAME', 'femescort');

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
define('AUTH_KEY',         '0MW#QEWT8 g/<sP$h-Gd+qR?JgBv$|XRZgyF/;X((3rq.EqQ+]y8NynhaT|sfsm:');
define('SECURE_AUTH_KEY',  'V-l[7jJO2dISD]Tw!v:68?QYb{Shi_Y``G<t~hoHH6F5rgB~VB!X@%K4V[JeVt3K');
define('LOGGED_IN_KEY',    '#VZxrF> Yh;xRk=B9}a6xA@W2;<e!3MNMeY,%FlW?+(Pm!vE~&B1-f51Y`f{AN,K');
define('NONCE_KEY',        'zj2X1U^r)x]#@O*DaeVr-pYIqo-W=m1qk_I}xym5_5Q1P1s.T&/hYY%Lng$qni=R');
define('AUTH_SALT',        'JV74L_VC`<KNyu3Ys$0L6#h?4_G(ZHNWaZ2Qc+1li4l8$0b*q3O`2-1tB[~xO3B3');
define('SECURE_AUTH_SALT', 'XBE5}*~+x-3f T&h/&2Z-h>m7|?^KPHEl:i|u/@%V{G*/^vGoce4/9jpCl1hW?9{');
define('LOGGED_IN_SALT',   'AW/vH)VtiV]>/UorUCt:m,4<%L{GI3| -!wML q>,SPnz-5/ltt}:A~-@Q~%h5}J');
define('NONCE_SALT',       'kQSAL^GPM[:FqXb4I$&uN&&Cde({{}g?kw#sUWuBKk8/>S6{U%?W57p25B=L=bkh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fe_';

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
