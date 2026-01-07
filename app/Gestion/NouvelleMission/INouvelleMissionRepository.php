<?php

namespace App\Gestion\NouvelleMission;

interface INouvelleMissionRepository {
    public function save(NouvelleMission $mission): bool;
    public function compterMission(): int;
}
