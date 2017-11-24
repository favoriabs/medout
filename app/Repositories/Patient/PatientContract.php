<?php

namespace App\Repositories\Patient;

interface PatientContract {
    public function create($request);
    public function edit($patientId, $request);
    public function findAll();
    public function findById($patientId);
    public function discard($patientId);
}
