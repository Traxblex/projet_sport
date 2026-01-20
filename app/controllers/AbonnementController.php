<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Abonnement;

class AbonnementController extends Controller
{
    public function index(): void
    {
        $abonnements = Abonnement::all();
        $this->render('abonnements/index', [
            'abonnements' => $abonnements,
        ]);
    }
}


