<?php
namespace App\FormContact;

class Contact {
    public function __construct(
        private ?int $id = null,
        private string $nom = "",
        private string $prenom = "",
        private string $societe = "",
        private string $adresse = "",
        private string $cp = "",
        private string $ville = "",
        private string $telephone = "",
        private string $email = "",
        private string $objet = "",
        private string $text = ""
    ) {}
    public function getId(): ?int { return $this->id; }
    public function getNom(): ?string { return $this->nom; }
    public function getPrenom(): ?string { return $this->prenom; }
    public function getSociete(): ?string { return $this->societe; }
    public function getAdresse(): ?string { return $this->adresse; }
    public function getCp(): ?string { return $this->cp; }
    public function getVille(): ?string { return $this->ville; }
    public function getTelephone(): ?string { return $this->telephone; }
    public function getEmail(): ?string { return $this->email; }
    public function getObjet(): ?string { return $this->objet; }
    public function getText(): ?string { return $this->text; }
}