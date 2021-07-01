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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'G4t*,7h`mc/-5ibCer.14D^y[.!yde|}l_9~Ordu[u-*=$PIrH3rGgDt(M-jT.UH' );
define( 'SECURE_AUTH_KEY',  'l!F%m[%AC R_|n9oC$]R4Hq5crN&e>p2I}7^[d% $ek9^q@2<b~LH6J[~x7zwQO<' );
define( 'LOGGED_IN_KEY',    'g`SHwTLb|Xo(YXRE~B7;W|AipWBGmOI9879x%C_QNa@/R.uH:<?mvnmv*}-dQ)j6' );
define( 'NONCE_KEY',        '!w@NYo& nPAf?qZUF*4zq4+5oW0!D*Hg0A!5#~?J*@+wk:K)2g[@eX{a}{$-?K4S' );
define( 'AUTH_SALT',        '.yJ45ko/y3B?$OoRld5d&z`bZspPQ;DbN`1%=sQ}#_#yaN% w b7S*$FXVBr]}8*' );
define( 'SECURE_AUTH_SALT', 'UQeXP O5d1_vps(~oaxn*.>Dh%j40HP5r<C4)xQux8q$c`cye*z=KVak*Ai}AqEY' );
define( 'LOGGED_IN_SALT',   '$?YP}HF@;j_kDlk##fy6W8bNFT0D%+&fx2RHbf^#:vWD{Yb2hO`d7Lu_&wt5#A%K' );
define( 'NONCE_SALT',       '?qR&x~D0K-57U5SP.0F/f*jjzL2bTxW9y Z:zQ?W_QnrIe{J4qqU7mHDwk$d$UCG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Marketo_';

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
