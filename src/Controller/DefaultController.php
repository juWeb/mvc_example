<?php

namespace Controller;

require_once __DIR__.'/../Model/CounterDAO.php';
use Model\CounterDAO;

class DefaultController {
    public function homepage() {
        $dao = new CounterDAO(__DIR__.'/../Model/log2.log');
        $counter = $dao->getIncrementedCounter();
    
        require __DIR__ . '/../../template/homepage.php';
    }

    public function login() {
        echo '<p>MY_FORM</p>';
    }
}

//(new DefaultController())->homepage();
//(new DefaultController())->login();