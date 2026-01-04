<?php

namespace App\Gestion\admin\NouveauMembre;

interface INouveauMembreRepository {
    public function save(NouveauMembre $membre): bool;
}
