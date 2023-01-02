<?php

namespace App\Controllers;

use App\Helpers\Controller;

class Web extends Controller {

    public function __construct($router) {
        parent::__construct($router);
    }

    public function home(): void {
        echo $this->view->render("home");
    }

}