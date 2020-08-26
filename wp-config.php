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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xn5fnrziOoive43l+ihtMyeuDmVvQYTbckD7GcK3PderERk4WKA5+i/pvnuwhrP8w0jHhAK5ahnX3mcYSFwa4A==');
define('SECURE_AUTH_KEY',  'GuLK1CsYbAeIDosKT3gnynRcJWpiWeA/9fWdxFh2Rm6izyBOACWkmCwwmeRQYHtGuKarGXr7lfD1R3kTub10bA==');
define('LOGGED_IN_KEY',    'HMxNLrqR+Lic6RVo/xegm+0/FiQW+90MsUq3TsgybvYhwaGyG0krIzCNOI/T07vv2rPDpFE3pCe4skYT4Efhsw==');
define('NONCE_KEY',        'WGUiLitdCNDup0hLofTjtTrEq6PsofpTFzFPWva8XhLwTDQOK8l5pH1sSgvZLp68CIlA3+bIO2yGN1e/iMs3vg==');
define('AUTH_SALT',        'oAgshhVnuH36IaD+6wAbeKLp/1eO9cViLo41Fubae6C2CqKMguUtNXq4gSG8e57AdOEaUhim7zmd6VKaQ7kEQw==');
define('SECURE_AUTH_SALT', 'DIFa7l3UtsR3BqFAM3YEAjlw56LcTp2Kvtiot/Zttlw4tnTt0qVfWMdPso1Ae8Q3jKuOobN791egYQrY41PHpw==');
define('LOGGED_IN_SALT',   'MDoMPjncFieKcw6Sp7+KjCjkBJGFh6bsUrg2nKkLBgcreqlPh9d3KFeD4Cve7KW6T9idFEWFYzLV3njh6j5dYQ==');
define('NONCE_SALT',       'qJStgW6AjPcTULpMWdklGZBaxi8Ox1t2PaSw5EWriuuD+qEbMPPgJm26j/lae+2JCqVgSolD9JKiZaqYyfk4mg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
