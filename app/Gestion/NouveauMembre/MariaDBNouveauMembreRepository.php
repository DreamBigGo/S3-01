<?php

namespace App\Gestion\NouveauMembre;

use App\Membre;

class MariaDBNouveauMembreRepository implements INouveauMembreRepository {
    private \PDO $pdo;

    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function save(Membre $membre): bool {
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

    public function compterMembre(?String $role = null): int {
        if ($role) {
            $sql = "SELECT COUNT(*) FROM membre WHERE Role = :role";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['role' => $role]);
        } else {
            $sql = "SELECT COUNT(*) FROM membre";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        }
        $nbMembre = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $nbMembre['COUNT(*)'];
    }
}
