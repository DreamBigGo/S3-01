<?php
namespace App;

class Contact {
    public function __construct(
        public ?int $id = null,
        public string $nom = "",
        public string $prenom = "",
        public string $societe = "",
        public string $adresse = "",
        public string $cp = "",
        public string $ville = "",
        public string $telephone = "",
        public string $email = "",
        public string $objet = "",
        public string $message = ""
    ) {}
}