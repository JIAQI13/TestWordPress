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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '%]MW|23bRy;+:9 +>pCo16&.QN#Fs#oA:,v!7(G/l!ca=,Lb.#<!k/j9t0es;&lH' );
define( 'SECURE_AUTH_KEY',  '@oPw Go0 (i=e;wo oc!nP7ic:+Q^tamx|OcCXPP(F$iCO&5s#O4:syruf5{]Qof' );
define( 'LOGGED_IN_KEY',    '0wO0No?mZ%W!A&5m4qZbbso-L=Y3Jg;#l1@lqb({zDo0~a.t^fE6;TM; Y%lJGmZ' );
define( 'NONCE_KEY',        'q&S@=ynG:y3P]r9M}W1G5E`oxThaT]VM4<^=Eb8 (o^; XY@)k<a8k!P3}BZl{_i' );
define( 'AUTH_SALT',        'ZV!}*^N?V2KrOnO9Lwgb}Yi7&~q(nh+WOb`m eME@6!%6yy4ZhxR}bC:|$i`Gh8#' );
define( 'SECURE_AUTH_SALT', '24@ZER>F|.UK6R{RB(fu:{lMuPe?<Iw Cl-VS{tO5,MKy^KeKX0ZZSl^n3`uBjU/' );
define( 'LOGGED_IN_SALT',   'KFso^a4qrYtsBQ~+b]ERJ,o@ wUo4d^5`UX=:CtixpE:8By39nh+K:McS |/%ub3' );
define( 'NONCE_SALT',       '{Cl.137z(aLM,x_eueB@uoEs0s%[q(?.j=cga^a9:Jd%6|t{kZLUzKdC<UD28Pp}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
