<?php
namespace App\connexion;

use \PDO;

class MariaDBUserRepository implements IMembreRepository {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    public function findByEmail(string $email): ?Membre {

        $sql = "SELECT IdMembre, Email, mdp FROM membres WHERE Email = :email";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }
        return new Membre(
            (int)$data['IdMembre'],
            $data['Email'],
            $data['mdp']
        );
    }

    public function save(Membre $membre): bool {
        $sql = "INSERT INTO membres (Email, mdp) 
                VALUES (:email, :mdp)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'email' => $membre->getEmail(),
            'mdp' => $membre->getMdp()
        ]);
    }
}