<?php

use Model\SessionStorage;
use Model\User;

require_once 'vendor/autoload.php';

$storage = new SessionStorage('SESSION_ID');
$user = new User($storage);
$user->setLanguage('fr');
$user_language = $user->getLanguage();
print ("user language = $user_language".PHP_EOL);