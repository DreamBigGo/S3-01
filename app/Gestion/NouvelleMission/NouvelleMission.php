<?php

namespace App\Gestion\NouvelleMission;

class NouvelleMission {
    public function __construct(
        private ?int $id = null,
        private string $Description = "",
        private string $DateDebut = "",
        private string $DateFin = "",
        private string $Budget = "",
        private string $Dep = "",
    ) {}

    public function getId(): ?int { return $this->id; }
    public function getDescription(): string { return $this->Description; }
    public function getDateDebut(): string { return $this->DateDebut; }
    public function getDateFin(): string { return $this->DateFin; }
    public function getBudget(): string { return $this->Budget; }
    public function getDep(): ?string { return $this->Dep; }
}
