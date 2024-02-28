<?php
error_reporting(E_ALL);
ini_set('ignore_repeated_errors', TRUE);
ini_set('display_errors', TRUE);
ini_set('log_errors', TRUE);
ini_set("error_log", "/var/www/html/gartensun/php-error.log");
//error_log("Write this error down to a file!", 3, "var/www/html/mvc/php-error.log");
error_log("inicio app");


//error_log("Write this error down to a file!", 3, "/var/www/html/mvc/php-error.log");
require_once 'libs/database.php';
require_once 'libs/messages.php';

require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/model.php';
require_once 'libs/app.php';

require_once 'classes/session.php';
require_once 'classes/sessioncontroller.php';
require_once 'classes/successmessages.php';
require_once 'classes/errormessages.php';

require_once 'config/config.php';

include_once 'models/usermodel.php';
include_once 'models/expensesmodel.php';
include_once "models/categoriesmodel.php";
include_once "models/joinexpensescategoriesmodel.php";
$app = new App();

?>
