<?php

namespace App\Repositories\Patient;

use App\Repositories\Patient\PatientContract;
use App\Patient;

class EloquentPatientRepository implements PatientContract {
    public function create($request){
      $patient = new Patient;
      $this->setPatientProperties($patient, $request);
      $patient->save();
      return $patient;
    }

    public function edit($patientId, $request){
      $patient = Patient::find($patientId);
      $this->setPatientProperties($patient, $request);
      $patient->save();
      return $patient;
    }

    public function findAll(){
      return Patient::all();
    }

    public function findById($patientId){
      return Patient::find($patientId);
    }

    public function discard($patientId){
      $patient = $this->findById($patientId);
      $patient->delete();
      return true;
    }

    private function setPatientProperties($patient, $request){
      $patient->name = $request->name;
      $patient->phone_number = $request->phone_number;
      $patient->sex = $request->sex;
      $patient->age = $request->age;
      $patient->occupation = $request->occupation;
      $patient->address = $request->address;
      $patient->marital_status = $request->marital_status;
      $patient->convert = $request->convert;
      $patient->born_again = $request->born_again;
      $patient->counselling_need = $request->counselling_need;
      $patient->mental_counselling = $request->mental_counselling;
      $patient->drugs_prescribed = $request->drugs_prescribed;
      $patient->drugs_dispensed = $request->drugs_dispensed;
      $patient->lab_done = $request->lab_done;
      $patient->welfare_given = $request->welfare_given;
      $patient->diagnosis = $request->diagnosis;
      $patient->address_category = $request->address_category;
    }
}
