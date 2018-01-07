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
define('DB_PASSWORD', 'ldh19890906');

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
define('AUTH_KEY',         '*8xId ;jaNFE&b=3h=Xw1ocI,GLg=GIr~Yd|{,B?+6qghQ0DVi?{I2[ *YW1(se-');
define('SECURE_AUTH_KEY',  '>2s1>QE;8ZlTJF@};^++NN]UGW^LE8GC9N8|aDgmO,q0?0uAx,.>]*nkiaJc{<Wm');
define('LOGGED_IN_KEY',    'q%|cVWCQxEgu; js7K;)x@n3gG`DOVn^I}X!@MM[Ol`rRGON1oeS=SW&Uj[4zp) ');
define('NONCE_KEY',        'y1IZ+?-#{T}X` gVn]qG{BoBK<kFiR&H@>ik{X *G^C3}|?lKi$?Wh7K_Xjuj29I');
define('AUTH_SALT',        '7!,ou3+B>F4vNHirqp_G}J+M%+fWi,m-&[/9i5QKN?|=(9#1 tAc$z.!prs4B~:C');
define('SECURE_AUTH_SALT', '~l>s1=v1hr97+$zS32N[!2bq7T-~|y[-@!N)4+t;o0 #/@WnN[(<%Omq=F&V+bfD');
define('LOGGED_IN_SALT',   '-:hX3o%*R|9C_{.6sJ=b3%ez:+i~h/~y,kE`Gz:rSSyW>F*0 ~C~|cIh:T1bmj=$');
define('NONCE_SALT',       '_`R[SP+h01b,+kY/PyocVG<%B0y(=;rJ1:Y]d)9lo0w2VahE[L`:HBQnjj-Ax K2');

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
