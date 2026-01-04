<?php

namespace App\Gestion\admin\NouveauMembre;

class MariaDBNouveauMembreRepository implements INouveauMembreRepository {
    private \PDO $pdo;

    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function save(NouveauMembre $membre): bool {
        $sql = "INSERT INTO MEMBRE (Coordonné, Disponibilité, Role, Email, Mdp) 
                VALUES (:coord, :dispo, :role, :email, :mdp)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':coord' => $membre->getCoordonnees(),
            ':email' => $membre->getEmail(),
            ':mdp'   => password_hash($membre->getMdp(), PASSWORD_DEFAULT),
            ':role'  => $membre->getRole(),
            ':dispo' => $membre->getDisponibilite()
        ]);
    }
}
