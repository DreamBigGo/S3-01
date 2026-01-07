<?php

namespace App\Gestion\NouvelleMission;

interface INouvelleMissionRepository {
    public function save(NouvelleMission $mission): bool;
    public function compterMission(): int;
    public function supprimerMission(?int $id): void;
    public function recupererTouteLesMissions(): array;
}
