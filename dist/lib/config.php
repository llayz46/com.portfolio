<?php

define('_DOMAIN_', getenv('DOMAIN'));
define('_DB_HOST_', getenv('DB_HOST'));
define('_DB_NAME_', getenv('DB_NAME'));
define('_DB_USER_', getenv('DB_USER'));
define('_DB_PASS_', getenv('DB_PASS'));
define('_DB_PORT_', getenv('DB_PORT'));

// define('_DOMAIN_', 'portfolio06.local');
// define('_DB_HOST_', 'localhost');
// define('_DB_NAME_', 'portfolio');
// define('_DB_USER_', 'layz');
// define('_DB_PASS_', 'EG--hNJ6lCi_9n]I');

define('_PATH_ASSETS_IMAGES_', '/assets/image/');
define('_PATH_UPLOADS_PROJECTS_', '/uploads/projects/');

define('_HOME_LIMIT_PROJECTS_', 3);
define('_PROJECTS_LIMIT_PROJECTS_', 9);
define('_ADMIN_PROJECTS_LIMIT_PROJECTS_', 8);

define('_ALLOWED_IMAGE_TYPES_', ['jpg', 'jpeg', 'png', 'gif']);