<?php

namespace App\wcs\Hello;

namespace App;

require '../vendor/autoload.php';


//Autoloader::register();


use App\Wcs\Hello;
use HelloWorld\SayHello;

$Hello = new Hello();



echo $Hello->talk();
echo SayHello::world();
?>



