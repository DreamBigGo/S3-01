<?php
namespace App;

interface IContactRepository {
    public function save(Contact $contact): bool;
}