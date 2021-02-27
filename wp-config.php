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
define( 'DB_NAME', 'epiz_27723167_w896' );

/** MySQL database username */
define( 'DB_USER', '27723167_2' );

/** MySQL database password */
define( 'DB_PASSWORD', '2SL-]p9n82' );

/** MySQL hostname */
define( 'DB_HOST', 'sql103.byetcluster.com' );

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
define( 'AUTH_KEY',         'wxdtdqnzy7yq9w5ru8hg7tvg6rtbtbquyvfpsnpgj88rfma7us4d8qhmunhnbkfo' );
define( 'SECURE_AUTH_KEY',  'o5iuwmsmle8y6msiq7edfqbnjrjlzrynug4epkvjjopknqfauc9vrrrcysclxlc8' );
define( 'LOGGED_IN_KEY',    'pdlqn8wwczc2ap9bjqccri3v2fbfnbrvwibu8xabd6fayuedkqj5xleho2fcjzwq' );
define( 'NONCE_KEY',        'cqykj1nym9q8mmce0bhdzypsrsvs50ywnhcyv8kmoy9ivla5jyipj8tykehzrajo' );
define( 'AUTH_SALT',        'iefz6gwjnewqbokg2euyxxrxf61vdpr8wueetinlhs3ygper80cqe0obcmw8f00p' );
define( 'SECURE_AUTH_SALT', 'gmuzecmg3u8uyur3gclxbbpcupufkyohebn1zgr9c8dhh7nycuzuhof9j8yomt2h' );
define( 'LOGGED_IN_SALT',   'cirngnmc8f62gpusj3rhbdym5rccjpgauh6ahavl3uaograzzqmebuvshifpllbr' );
define( 'NONCE_SALT',       'nhv1ljkdz8pcantgavyhtcj2jx1nxnh1nab3sdq8osk2w2thmjd3xgo68y3drh2r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptd_';

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
