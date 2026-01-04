<?php

namespace App\Gestion\admin\NouvelleMission;

interface INouvelleMissionRepository {
    public function save(NouvelleMission $mission): bool;
}
