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
define('DB_NAME', 'learningwordpress');

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
define('AUTH_KEY',         '!3qH-7!?-qOQ1/-+kp+Zm&d4D_M|hCQLF@!0wtT<*ypv-F^O)7.< ow=cb^+TT}%');
define('SECURE_AUTH_KEY',  'YUy<Mtqe&]`WM!7)jbx+{@l+r%&OF|*,?E}/me?f)bxx+BICte68H@w2cCxj<h1J');
define('LOGGED_IN_KEY',    'm-W/3:uU7a3v/>m)bUb|#GSs/GX(]6f_qRW##fD-e|($ttx81!{JL[+<ht^%hKow');
define('NONCE_KEY',        '%+{WJ.?%;O4|V56[Qs=Qt^d-,X+ZiVXQ|8WtS>BV#&?$c<Ka1/MZ,vV,z3b+ H:@');
define('AUTH_SALT',        'y05*<i^xcMEz&}H^0ll/`[nEs[*1x)&Q#dRy>|j+(DX38mYXQk|6F:}DH*e*OHpb');
define('SECURE_AUTH_SALT', ';&RRp$Rao+]-D=j$(jA<p~in&*z017tM<dWi1SP{SZJ!(sa8|q<Nb@7U{+>4Fb=#');
define('LOGGED_IN_SALT',   's|9|93ct#_@n!xe:G/N>-H7.~-UO#$3XT=3M6>P|!QssDoc+Oma*j95{ I|cHt~?');
define('NONCE_SALT',       'se=y(:cu(Y=(8^sQwvGvnu0b7D?zm$NpczjLLdVi=Y--]u;RlOT2vGDD:&+2C6x|');

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
