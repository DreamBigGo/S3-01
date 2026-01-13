<?php

namespace App;

class Verification{
    public function VerificationConnexion(string $roleRequired): void {
        if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== $roleRequired) {
            Messages::goHome("Accès refusé !", "danger", "../../../index.php");
            header('Location: index.php');
            exit();
        }
    }
}