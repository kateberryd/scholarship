<?php

namespace App\Repositories\Registration;

interface RegistrationContract {
    //
  public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($id);
}
