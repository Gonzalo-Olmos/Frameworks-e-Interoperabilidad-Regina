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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '<}aQatU+o6?Q[;otTg3|@eypg1A a$0>R4ixvbBgg-gq%%L(~h0j-7YO>spfBN0p' );
define( 'SECURE_AUTH_KEY',  '1xW:vH2_k%;dHvelQOIqN>i(f0QOf,nS4}J:oo;{q$FT+`Meh %2&fOUcwlr(u89' );
define( 'LOGGED_IN_KEY',    'Pn @PRJR-Y+6hc_%rXSRR{<m~9lK =~^rfa].gA?z3N2V:f7.:*Oi.z_0tPgp/^9' );
define( 'NONCE_KEY',        'b|?TiM@5>gXuQ.&byU,~)G_JhSB24SCz:43K(!Fq4CUU}Nll(#^h^CBuY$&C<g*P' );
define( 'AUTH_SALT',        '#&$ (wy>pt+l|+]/|kYDi1(UbBc-a$6+w2bYpLg|V+!JmRfUH<_f%c6Md*|C>-dc' );
define( 'SECURE_AUTH_SALT', '4inaVGL<S<#CJ7{w&rMbaObe<W>L;k3M0!7Mj%$~Hw<,2pX~wHf3c5NCR^WBlNaF' );
define( 'LOGGED_IN_SALT',   '#1 L>J%9bTL k$9S5(*ba105,fLxibB(^.d3K~+Q<(j>SVOsFXfSW.T-.B%i=CcT' );
define( 'NONCE_SALT',       'Z0j@7piv8}A&3x:9prtiO] |wak.Rx@L $#$~} 0wL&5z=]~BeMrn;  D.Q8V8$o' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
