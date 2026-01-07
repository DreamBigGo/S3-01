<?php

namespace App\Gestion\NouveauMembre;

interface INouveauMembreRepository {
    public function save(NouveauMembre $membre): bool;
    public function compterMembre(?string $role = null): int;
}
