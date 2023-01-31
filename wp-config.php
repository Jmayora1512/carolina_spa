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
define( 'DB_NAME', 'wp_carolina_spa' );

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
define( 'AUTH_KEY',         '${kU:P>Vp(yhJ2n/it-Q*^C|4%V1TKbb/]<y40q_k5.$[01vB}l,gw]pgkpZWr!D' );
define( 'SECURE_AUTH_KEY',  'NzJF>=)$rt>)/:(hvEt..uYYC~lDhc5+F{KRGec>$U!d%Y9=p#}6y>&UV|.^weJ}' );
define( 'LOGGED_IN_KEY',    '=;:WLc@IxXPpTXX^;!83U[o=JXVhSTc%mEKQ0gt>5<)&SGh-_EcrMU6GZw^=p`,~' );
define( 'NONCE_KEY',        ':^>)sL3(:E0I[?.=ODP]<R}nj*3r*C~cvO+xrI]=9B~ME$<YHtc*n>Nl&{Ww8UNL' );
define( 'AUTH_SALT',        '4r.c}+X5UTV+(jVvPqh@+Sc3)lD856K#33:%b6eA&))$|rxg-n1WdT.sR< bGSVj' );
define( 'SECURE_AUTH_SALT', 'w32iQ*,(hUq%aZR? ZzhwZ)MsWcg|Jv6U:kN~EZiPG9{E^4c{p|1Z,,VPd),NE2K' );
define( 'LOGGED_IN_SALT',   '+}SE/,JQL|WTYMFlX6qhkh<PP*}^HkqA15{`8uieMyWm}-`9`#8s#8=kL+$RvB V' );
define( 'NONCE_SALT',       '~;!jw6rI/X) Mi=8YJXsNWHD#?BTQ|LxkIl2lAqV@~iu8|cAg22X]e`A8`|?kSSD' );

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
