<?php
namespace App\FormContact;

interface IContactRepository {
    public function save(Contact $contact): bool;
}