<?php

namespace App\Repositories\Credential;

interface CredentialContract {
    //
    public function findAll();
    public function create($request);
    public function findById($id);
    public function update($request, $id);
}
