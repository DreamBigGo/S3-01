<?php
namespace App;

class MariaDBContactRepository implements IContactRepository {
    public function __construct(private \PDO $pdo) {}

    public function save(Contact $contact): bool {
        $sql = "INSERT INTO contact 
                (nom, prenom, societe, adresse, cp, ville, telephone, email, objet, message) 
                VALUES (:nom, :prenom, :societe, :adresse, :cp, :ville, :telephone, :email, :objet, :message)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'nom'       => $contact->nom,
            'prenom'    => $contact->prenom,
            'societe'   => $contact->societe,
            'adresse'   => $contact->adresse,
            'cp'        => $contact->cp,
            'ville'     => $contact->ville,
            'telephone' => $contact->telephone,
            'email'     => $contact->email,
            'objet'     => $contact->objet,
            'message'   => $contact->message
        ]);
    }
}