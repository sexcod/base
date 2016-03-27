<?php

use Progs\Controller\HomeController;

$router->get('/', function(){

    return (new HomeController())->home();

});



//erro 404

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
   return (new \SexCode\Lib\BaseController())->error404();
});
?>
