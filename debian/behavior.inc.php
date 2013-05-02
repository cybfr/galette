<?php

// Squeeze doesn't have the required support in php-bcrypt so keep using
// md5 hashes for now
define('GALETTE_UNSECURE_PASSWORDS', true);

// Uncomment if you need debug logs (default level is 5)
// define('GALETTE_LOG_LVL', 10);

?>
