<?php

namespace App\connexion;

class Membre{
    public function __construct(
        private ?int $id = null,
        private string $role = "",
        private string $email = "",
        private string $mdp = "",
    ) {}
    public function getId(): ?int { return $this->id; }
    public function getRole(): ?string { return $this->role; }
    public function getEmail(): ?string { return $this->email; }
    public function getMdp(): ?string { return $this->mdp; }
}
