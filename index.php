<?php

session_start();

require_once 'src/core/Core.php';

require_once 'lib/Marlon/Database/Connection.php';

require_once 'src/controller/LoginController.php';
require_once 'src/controller/DashboardController.php';
require_once 'src/model/User.php';

require_once 'vendor/autoload.php';

$core = new Core;
echo $core->start($_GET);
