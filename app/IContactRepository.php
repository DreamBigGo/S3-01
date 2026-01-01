<?php
namespace App;

interface IContactRepository {
    public function save(Contact $message): bool;
}