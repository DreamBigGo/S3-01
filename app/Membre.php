<?php

namespace App;

class Membre {
    public function __construct(
        private ?int $id = null,
        private string $coordonnees = "",
        private string $email = "",
        private string $mdp = "",
        private string $role = "",
        private ?string $disponibilite = "",
    ) {}

    public function getId(): ?int { return $this->id; }
    public function getCoordonnees(): string { return $this->coordonnees; }
    public function getEmail(): string { return $this->email; }
    public function getMdp(): string { return $this->mdp; }
    public function getRole(): string { return $this->role; }
    public function getDisponibilite(): ?string { return $this->disponibilite; }
}
