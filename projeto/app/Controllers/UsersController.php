<?php

# Todo método dentro de um crontoller, são chamados de actions

namespace App\Controllers;

use Root\Controller;

class UsersController extends Controller {
    
    public function index() {
        $this->render(['name' => 'Juliana'], 'users/index');
    }

    public function create() {
        return 'Página de cadastro de usuários';
    }

}

