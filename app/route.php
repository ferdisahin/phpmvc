<?php
/*
 * PHPMvc
 *
 * @author    Ferdi Sahin <ferdisahin@mail.com>
 *
 */

$app->router->get('/', 'Home@index', ['before' => CheckAuth::class]);

$app->router->get('/hakkimda', function (){
    return 'hakkımda';
});

$app->router->get('/user/:slug', function($id){
    return $id;
});

$app->router->group('/admin', function($router){
    $router->get('/', function(){
        return 'admin anasayfa';
    });

    $router->get('/users', function(){
        return 'admin users';
    });
});

$app->router->error(function (){
    echo 'hata sayfası';
});