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
}
