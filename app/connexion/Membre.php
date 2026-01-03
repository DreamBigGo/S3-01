<?php

namespace App\connexion;

class Membre{
    public function __construct(
        private ?int $id = null,
        private string $email = "",
        private string $mdp = "",
    ) {}
    public function getId(): ?int { return $this->id; }
    public function getEmail(): ?string { return $this->email; }
    public function getMdp(): ?string { return $this->mdp; }
}
