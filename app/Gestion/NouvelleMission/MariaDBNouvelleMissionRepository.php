<?php

namespace App\Gestion\NouvelleMission;

class MariaDBNouvelleMissionRepository implements INouvelleMissionRepository {
    private \PDO $pdo;

    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function save(NouvelleMission $mission): bool {
        $sql = "INSERT INTO MISSION (Description, DateDebut, DateFin, Budget, Dep) 
                VALUES (:description, :datedebut, :datefin, :budget, :dep)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':description' => $mission->getDescription(),
            ':datedebut' => $mission->getDateDebut(),
            ':datefin'   => $mission->getDateFin(),
            ':budget'  => $mission->getBudget(),
            ':dep' => $mission->getDep()
        ]);
    }

    public function compterMission(): int {
        $sql = "SELECT COUNT(*) FROM mission";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $nbMissions = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $nbMissions['COUNT(*)'];
    }

    public function supprimerMission($id): void {
        $sql = "DELETE FROM mission WHERE IdMission = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    public function recupererTouteLesMissions(): array {
        $sql = "SELECT * FROM mission";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
