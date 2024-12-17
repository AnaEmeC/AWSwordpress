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
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'wordpress-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress-user' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/*define( 'WP_HOME', 'http://ec2-3-94-92-69.compute-1.amazonaws.com/blog' );
define( 'WP_SITEURL', 'http://ec2-3-94-92-69.compute-1.amazonaws.com/blog' );*/

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
define('AUTH_KEY',         '1sdsSr.[[4S))t[%y-^;}D19fE:J[pZcOf/gSFE Z6.RV@>P~,U++*:#+yPh;`g*');
define('SECURE_AUTH_KEY',  '6`NTFPz*M|o%u1vye5Tzg*k&}LO6_#qJyx.v|uPR@<a74>CvNhNvhD]]_3>dZ2Qh');
define('LOGGED_IN_KEY',    'O>t+aOf>z[E:lYmtLDEq8)0_E1Uf:A!$7vITk]oU@![8_9{291xh?IISiY*?+Vs;');
define('NONCE_KEY',        '_`-e,BU<]^T;gK.>L:<-0iisBJ?0/c#.1gr%{C0uo<Rz4G}^QSq/u.,<spi>5P[0');
define('AUTH_SALT',        '/V,jb%s69<aR@[Zw0l6W~(Tvz&cs|eD|`k=N<p%,Rkn.k8X7RH~zFAd7k7N.#ekF');
define('SECURE_AUTH_SALT', 'ut<SK<[w+jEa%O ^UYbgK-G*(5MJ)>AH<4pw&>}v{q:l|W}j}4waySh+P94R?wSH');
define('LOGGED_IN_SALT',   '#.k0k^M[IO1e;|P%Iz~>$UKE-<=eTYFxXm?S=}[{Ae]-Z4Y4vD;5-`A+*=-`ENaF');
define('NONCE_SALT',       'Os/8.so$d[l-Fs4<snp3oXzKwgt!-m!3 zEd9|:*KBg98L5zP:Q=o$pT*Mw=uC=0');

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
