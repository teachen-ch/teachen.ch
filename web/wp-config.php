<?php

function getDotEnv() {
  # .env file needs to reside along wp-config.php
  $env_file = dirname( __FILE__ ) . '/../.env';
  if (file_exists($env_file)) {
    $env_lines = file($env_file);
  } else {
    $env_lines = [];
  }
  $env = getenv();
  foreach ($env_lines as $line) {
    $line = chop(preg_replace("/^\#.*/", "", $line));
    if ($line == "") {
      continue;
    }
    list($key, $value) = preg_split("/\s*=\s*/", $line);
    $value = preg_replace("/^\s*['\"](.*)['\"]\s*$/", "$1", $value);
		$env[$key] = $value;
  }
  return $env;
}

$env = getDotEnv();



define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', 'minor');// Diese Einstellung ist erforderlich, damit WordPress-Updates korrekt in WordPress Toolkit verwaltet werden können. Entfernen Sie diese Zeile, wenn diese WordPress-Website nicht mehr in WordPress Toolkit verwaltet wird.
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

$dbvalues = array('DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DB_PREFIX');
/** -------------------------------------------------------------*/
foreach ($dbvalues as $dbvalue) {
    define($dbvalue, $env[$dbvalue]);
}

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


$saltykeys = array('AUTH_KEY', 'SECURE_AUTH_KEY', 'LOGGED_IN_KEY', 'NONCE_KEY', 'AUTH_SALT', 'SECURE_AUTH_SALT' , 'LOGGED_IN_SALT', 'NONCE_SALT' );
/** -------------------------------------------------------------*/
foreach ($saltykeys as $saltykey) {
    define($saltykey, $env[$saltykey]);
}


$otherkeys = array('WP_SITEURL', 'WP_HOME', 'S3_UPLOADS_BUCKET', 'S3_UPLOADS_REGION', 'S3_UPLOADS_KEY', 'S3_UPLOADS_SECRET', 'WP_DEBUG' );
/** -------------------------------------------------------------*/
foreach ($otherkeys as $otherkey) {
    define($otherkey, $env[$otherkey]);
}

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = DB_PREFIX;


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
