#Cunis Inc Starter WP Starter Theme

#WP-Config.php
```
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );

define( 'SCRIPT_DEBUG', true );
```

The SCRIPT_DEBUG if false will run the minified scripts

The varibles in the Env file

SITE_URL=
DB_HOST=
DB_USER=
DB_PASS=
DB_NAME=