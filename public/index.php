<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 16/02/2021
 * Time: 12:57
 */


$app = new App();
$route = $app->getRoute();

$route->get("/", function () {
    echo "hello ";
});

//$route->post('/post', function ())