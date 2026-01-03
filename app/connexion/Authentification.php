<?php
namespace App\connexion;
use App\Exceptions\AuthentificationException;

class Authentification {
    public function __construct(private IMembreRepository $userRepo) {}

    public function login(string $email, string $password): bool {
        $user = $this->userRepo->findByEmail($email);

        if (!$user || !password_verify($password, $user->getMdp())) {
            throw new AuthentificationException("Email ou mot de passe incorrects");
        }
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['user_email'] = $user->getEmail();

        return true;
    }
}