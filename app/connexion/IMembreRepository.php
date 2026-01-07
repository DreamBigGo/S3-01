<?php
namespace App\connexion;

use App\Membre;

interface IMembreRepository {
    public function findByEmail(string $email): ?Membre;
}