<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doan2' );

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
define( 'AUTH_KEY',         'NjkoxG2%9z7vwMvf8x2c3%F+TZbHnTr>5-Yjh3h$by[MNE/L;/[1*eQndNr-|Qp^' );
define( 'SECURE_AUTH_KEY',  ')d{KH?NC^MGR,TZ/3ox!yN{(J>Ky}_B%>AuqvL<7gV!hG>Y_}.9<G):5:.^b4oZu' );
define( 'LOGGED_IN_KEY',    'h^8Y,MC=j!a`#kLyk%Vaxqkw0{O{o0kCQ*zf=_By<r}8cphhb[laJGxTx~,N_8m]' );
define( 'NONCE_KEY',        '*R=p8NF%`L_-dC&}@?b]6cG<nD7uaaGMWvF_pM{fjst:ENL25mb;Zx((g4_%ddvw' );
define( 'AUTH_SALT',        ']83_N!,vP?U0v3NUk6fIXhFp$~-3yV+n<xmv#:&u-Tm|+D_e)1kr%3k^Zcq%CA1*' );
define( 'SECURE_AUTH_SALT', '*(BduTMbwywf#zrAPx3 Ux|W_5$[*C7TxyycW-&4)$&[UQj?jm:Hcz=OFiBAT bO' );
define( 'LOGGED_IN_SALT',   ';A(3?]P((*?,;ha>DB9eg[i_g8apOw)Mfv%s/U[nmY#q!TP?En4KsS^?QG-QV;4+' );
define( 'NONCE_SALT',       'kEp$)Mr^0B,YXzW*< QHrDN3]sf6m)98JN@v%7IS$?kEP]b^!5HgW3^VVDFh;FNk' );

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
