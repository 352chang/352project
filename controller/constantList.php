<?php

$protocol = empty($_SERVER["HTTPS"]) ? "http://" :"https://";

define("HOME_DIR", $protocol. $_SERVER['SERVER_NAME']);
define("MODEL_DIR",      HOME_DIR. '/model');
define("VIEW_DIR",       HOME_DIR. '/view');
define("CONTROLLER_DIR", HOME_DIR. '/controller');
define("CSS_DIR",        HOME_DIR. '/view/css');
define("JS_DIR",         HOME_DIR. '/view/js');
define("IMG_DIR",        HOME_DIR. '/view/js');

