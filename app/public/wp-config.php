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
define('AUTH_KEY',         '7ocCqhKvkAsPbvsb9bU+MvlszaNFAewIiVPRansWH18RvuDlIgMBZsaIbgv51P1CJzmzKNnT6WhpOwEivQJrEg==');
define('SECURE_AUTH_KEY',  'PdQgnGSF1XAaYVGcQ6oQqgEUtujYrGTa3b8MrJp5ANdI3+LPG2u6Femelt2sTlu7Wh1u9wY5tV4jazcBnyYVXQ==');
define('LOGGED_IN_KEY',    'qb4KleahtjJM9Brr8GsavjvdTOm+WNB6zIndn0T24hwLPASM50aclBq3oDtfDsGZydkjAHwuB0poVHMOoj/zOw==');
define('NONCE_KEY',        'pDDFpWonajrYsg8T7XwmKv8bimzffj9GY6tJ4wM8t69owdTjWqtMs9wqo2NT3aaMfjCTH90QLxCU4Q1GsqDIhg==');
define('AUTH_SALT',        'fY4e2Y+Y3u7bp6CH9w01vtkER6JdmPQtY9K+cHw0pQ192tryJp4nCkHGfV/n2amgTccq+HK55mQiEEj27Vz26w==');
define('SECURE_AUTH_SALT', '5rX3T3Hdz/mlA+DRGQl8Vdxj20JUl4UIqV92pg/kbwTmcB1T6S+QHWT18FnPSwAes659XpaDkGeF301tRdjiYg==');
define('LOGGED_IN_SALT',   'KKVjFLLBkXJllS1EwwYtTiJV0778cTiR5zXpRwW+ORJOWJyciOxi9OFheGkRM5tk5WfLtN83F0s/Kf3j7odg3A==');
define('NONCE_SALT',       '/koejAw2bXXNgR8wdJnRElW6l5GtR9/KADiT3fADBcqdHyPpOpGtLMJN5NjrPgeukKTnlAt8vCx6rSp3FaSGxw==');

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
