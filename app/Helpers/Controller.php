<?php

namespace App\Helpers;

use League\Plates\Engine;

abstract class Controller {

    protected $router;
    protected $view;

    public function __construct($router)
    {
        $this->router = $router;
        $this->view = new Engine(dirname(__DIR__, 1) . "/Views/pages/", "php");
        $this->view->addData([
            "router" => $this->router
        ]);
    }

}