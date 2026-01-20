<?php

namespace App\Controllers;

use App\Core\Controller;

class CommunicationController extends Controller
{
    public function contact(): void
    {
        $this->render('communication/contact');
    }

    public function apropos(): void
    {
        $this->render('communication/apropos');
    }
}


