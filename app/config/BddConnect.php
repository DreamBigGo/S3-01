<?php
namespace App\config;

use App\Exceptions\BddConnectException;

class BddConnect {
    public \PDO $pdo;
    protected ?string $host = 'localhost';
    protected ?string $login = 'root';
    protected ?string $password = '4980';
    protected ?string $dbname = 'test_db';

    public function __construct() {

    }

    /**
     * @throws BddConnectException
     */
    public function connexion(): \PDO {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8";
            $this->pdo = new \PDO($dsn, $this->login, $this->password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        } catch(\PDOException $e) {
            throw new BddConnectException("Erreur de connexion BDD : " . $e->getMessage());
        }
        return $this->pdo;
    }
}