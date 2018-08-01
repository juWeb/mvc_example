<?php
    require_once __DIR__.'/../src/Controller/DefaultController.php';
    use Controller\DefaultController;

    $isLogin = substr($_SERVER['REQUEST_URI'], strlen('login') * -1) == 'login';

    if($isLogin) {
        (new DefaultController())->login();
    } else {
        (new DefaultController())->homepage();
    }
?>