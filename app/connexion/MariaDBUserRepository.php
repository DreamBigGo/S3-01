<?php
namespace App\connexion;

use App\Membre;
use \PDO;

class MariaDBUserRepository implements IMembreRepository {
    private \PDO $pdo;

    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }
    public function findByEmail(string $email): ?Membre {

        $sql = "SELECT IdMembre, role, Email, mdp FROM membre WHERE Email = :email";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);

        $data = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }
        return new Membre(
            (int)$data['IdMembre'],
            '',
            $data['Email'],
            $data['mdp'],
            $data['role'],
            ''
        );
    }
}