<?php

// Default paths used by the Debian package
define('GALETTE_CONFIG_PATH', '/etc/galette/');
define('GALETTE_LOGS_PATH', '/var/log/galette/');
define('GALETTE_COMPILE_DIR', '/var/cache/galette/templates_c/');
define('GALETTE_CACHE_DIR', '/var/cache/galette/cache/');
define('GALETTE_EXPORTS_PATH', '/var/lib/galette/exports/');
define('GALETTE_IMPORTS_PATH', '/var/lib/galette/imports/');
define('GALETTE_PHOTOS_PATH', '/var/lib/galette/photos/');
define('GALETTE_TEMPIMAGES_PATH', '/var/cache/galette/tempimages/');
define('GALETTE_SQLITE_PATH', '/var/lib/galette/database.sqlite');

// External libraries packaged separately
define('GALETTE_ZEND_PATH', '/usr/share/php/');
define('GALETTE_PHP_MAILER_PATH', '/usr/share/php/libphp-phpmailer/');
define('GALETTE_SMARTY_PATH', '/usr/share/php/smarty3/');
define('GALETTE_TCPDF_PATH', '/usr/share/php/tcpdf/');

//Analog is not packaged in Debian (as of 20130821)
//define('GALETTE_ANALOG_PATH', '/usr/share/php/');

//Google-api is not packaged in Debian (as of 20130821)
//define('GALETTE_GAPI_PATH', '/usr/share/php/');

?>
