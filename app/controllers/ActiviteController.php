<?php

namespace App\Controllers;

use App\Core\Controller;

class ActiviteController extends Controller
{
    public function index(): void
    {
        $this->render('activites/index');
    }

    public function boxe(): void
    {
        $this->render('activites/boxe');
    }

    public function lute(): void
    {
        $this->render('activites/lute');
    }

    public function mma(): void
    {
        $this->render('activites/mma');
    }

    public function musculation(): void
    {
        $this->render('activites/musculation');
    }

    public function yoga(): void
    {
        $this->render('activites/yoga');
    }
}


