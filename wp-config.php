<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo_wp' );

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
define( 'AUTH_KEY',         'qitD`` w$Op)pL7JB<8iwCv)45SK&?bhFw0xx[]u&s..XwA1-+ih@I@7phZiD!Pk' );
define( 'SECURE_AUTH_KEY',  'Nw{ue8(laEnCR4inJ9c8qZ_JZ{B.l,v+xy+qJ6TRUH<1N6K;3Z#kBhBhdJOAr-m&' );
define( 'LOGGED_IN_KEY',    '2ApWt0?KstSJ#HSWCZj-U.J=fj%vac^th .cT?U((EQ2D;2}j,7I}(},7QK#HW9q' );
define( 'NONCE_KEY',        'UItNfqTARpyA7t;Ss*dbF@OejNIBZj)H_4ZoK<8P].*qIsA_3fK2_@hNmd)>yV$q' );
define( 'AUTH_SALT',        'PATLL`b$MM+AJNx$CO9Q7594ZNOTlb/W ,.:_KLI(>}(oz9e$K_]aSm!< i8k(=k' );
define( 'SECURE_AUTH_SALT', '@E]at4H7MN8{l.,LKc9n@totCOv?|5(f<pI{t]6KjTb14z;7mx9]R``e&wz]m}&`' );
define( 'LOGGED_IN_SALT',   '*KFlbMOYM#T>^o;7N+5!0HO(g2_:;0$5Tep5#vF@rWh)Pt59O/ba[xu e9<`;^Fc' );
define( 'NONCE_SALT',       '<OCyd#1@<WUl4zdqiy#pmzq~/B`dbm&5.z{sHx+fqi{QB1>$v[eGj{VoWtkOE5F=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
