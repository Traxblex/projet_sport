<?php

namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller
{
    public function login(): void
    {
        $this->render('auth/login');
    }

    public function inscription(): void
    {
        $this->render('auth/inscription');
    }

    public function oublier(): void
    {
        $this->render('auth/oublier');
    }
}


