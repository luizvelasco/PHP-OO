<?php

use App\Classes\Cliente;

require_once "../autoload/autoload-psr4.php";

$cli = new Cliente("Velasco", "1199887755", 40);

exit;

var_dump($cli);