<?php

namespace App\Gestion\NouveauMembre;

use App\Membre;

interface INouveauMembreRepository {
    public function save(Membre $membre): bool;
    public function compterMembre(?string $role = null): int;
}
