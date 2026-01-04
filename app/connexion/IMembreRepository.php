<?php
namespace App\connexion;

interface IMembreRepository {
    public function findByEmail(string $email): ?Membre;
}