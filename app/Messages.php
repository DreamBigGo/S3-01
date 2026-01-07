<?php

namespace App;

class Messages {
    public static function goHome(string $message, string $type, string $page) : void {
        $_SESSION['flash'][$type] = $message;
        header("Location: $page");
        exit();
    }
    public static function messageFlash() : void {
        if(isset($_SESSION['flash'])) {
            foreach($_SESSION['flash'] as $type => $message) {
                echo <<<HTML
          <div class='alerte-perso alerte-$type'>
          <button type='button' class='bouton-fermer' onclick='this.parentElement.remove()'>
          <img src="/Asset/img/croix.png" class="FermerMessage"></button>
          $message</div>
          HTML;
            }
            unset($_SESSION['flash']);
        }
    }
}