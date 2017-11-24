<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Patient\PatientContract;

class PatientController extends Controller
{
    protected $repo;

    public function __construct(PatientContract $patientContract) {
      $this->middleware('auth');
      $this->repo = $patientContract;
    }

    public function index()
    {
        $patients = $this->repo->findAll();
        return view('patient.index')->with('patients', $patients);
    }

    public function create()
    {
        return view('patient.create');
    }

    public function store(Request $request)
    {
      $request->validate([
           'name' => 'required',
       ]);
        $patient = $this->repo->create($request);
        if($patient){
          return back()->with('success', 'Patient record Created successfully');
        }else{
          return back()->withInput('error', 'Something went wrong, Pls try again!!!');
        }
    }

    public function show($id)
    {
        $patient = $this->repo->findById($id);
        return view('patient.show')->with('patient', $patient);
    }

    public function edit($id)
    {
      $patient = $this->repo->findById($id);
      return view('patient.edit')->with('patient', $patient);
    }

    public function update(Request $request, $id)
    {
        $patient = $this->repo->edit($id, $request);
        if($patient->id){
          return redirect()->route('patient_index')->with('success', 'Patient record edited successfully');
        }else{
          return back()->withInput('error', 'Something went wrong, Pls try again!!!');
        }
    }

    public function delete($id)
    {
      $patient = $this->repo->discard($id);
      if(true){
        return back()->with('success', 'Patient record deleted successfully');
      }else{
        return back()->withInput('error', 'Something went wrong, Pls try again!!!');
      }
    }
}
