<?php
use Phalcon\Mvc\Router;

$router = new Router();
$router->removeExtraSlashes(true);

//github授权
$router->add(
    '/auth/github',
    [
        'controller' => 'auth',
        'action'     => 'githubAuthorize'
    ]
);

//github callback
$router->add(
    '/auth/github/callback',
    [
        'controller' => 'auth',
        'action'     => 'githubCallback'
    ]
);

//用户退出
$router->add(
    '/logout',
    [
        'controller' => 'auth',
        'action'     => 'logout'
    ]
);

//话题列表页
$router->addGet(
    '/topics',
    [
        'controller' => 'topics',
        'action'     => 'index'
    ]
);

//创建话题页
$router->addGet(
    '/topics/create',
    [
        'controller' => 'topics',
        'action'     => 'create'
    ]
);

//话题存储
$router->addPost(
    '/topics',
    [
        'controller' => 'topics',
        'action'     => 'store'
    ]
);

//话题详情页
$router->addGet(
    '/topics/{id:[0-9]+}',
    [
        'controller' => 'topics',
        'action'     => 'show'
    ]
);

//上传图片
$router->addPost(
    '/upload_image',
    [
        'controller' => 'topics',
        'action'     => 'uploadImage'
    ]
);

//回复
$router->addPost(
    '/replies',
    [
        'controller' => 'replies',
        'action'     => 'store'
    ]
);

//用户中心页
$router->addGet(
    '/users/{id:[0-9]+}',
    [
        'controller' => 'users',
        'action'     => 'show'
    ]
);

//用户编辑页
$router->addGet(
    '/users/{id:[0-9]+}/edit',
    [
        'controller' => 'users',
        'action'     => 'edit'
    ]
);

//用户修改资料
$router->addPost(
    '/users/{id:[0-9]+}',
    [
        'controller' => 'users',
        'action'     => 'update'
    ]
);

//酷站
$router->addGet(
    '/sites',
    [
        'controller' => 'sites',
        'action'     => 'index'
    ]
);

// Define a route
$router->addGet(
    '/',
    [
        'controller' => 'topics',
        'action'     => 'index'
    ]
);

return $router;