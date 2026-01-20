<?php

namespace App\Models;

use App\Core\Model;

class Abonnement extends Model
{
    public static function all(): array
    {
        return [
            [
                'titre' => 'Abonnement Mensuel',
                'description' => 'Accès illimité à toutes les installations pendant un mois.',
                'prix' => '30€',
            ],
            [
                'titre' => 'Abonnement Trimestriel',
                'description' => 'Accès illimité à toutes les installations pendant trois mois.',
                'prix' => '80€',
            ],
            [
                'titre' => 'Abonnement Annuel',
                'description' => 'Accès illimité à toutes les installations pendant un an.',
                'prix' => '300€',
            ],
        ];
    }
}


