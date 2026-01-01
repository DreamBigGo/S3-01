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
            'nom'       => $contact->getNom(),
            'prenom'    => $contact->getPrenom(),
            'societe'   => $contact->getSociete(),
            'adresse'   => $contact->getAdresse(),
            'cp'        => $contact->getCp(),
            'ville'     => $contact->getVille(),
            'telephone' => $contact->getTelephone(),
            'email'     => $contact->getEmail(),
            'objet'     => $contact->getObjet(),
            'message'   => $contact->getText()
        ]);
    }
}