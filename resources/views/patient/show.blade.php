@extends('layout.main')

@section('dashboard')
  active
@endsection

@section('navbar')
<li>
  <a href="{{route('edit_patient', $patient->id)}}">
    <i class="fa fa-plus"></i>
    <p>Edit Record</p>
  </a>
</li>
@endsection

@section('content')
  <div class="content">
    <table id="bootstrap-table" class="table table-hover table-striped">
        <thead>
          <th data-sortable="true">Field</th>
          <th data-sortable="true">Value</th>
        </thead>
        <tbody>
              <tr>
                <td>Name</td><td>{{$patient->name}}</td>
              </tr>
              <tr>
                <td>Phone Number</td><td>{{$patient->phone_number}}</td>
              </tr>
              <tr>
                <td>Sex</td><td>{{$patient->sex}}</td>
              </tr>
              <tr>
                <td>Age</td><td>{{$patient->occupation}}</td>
              </tr>
              <tr>
                <td>Location</td><td>{{ucwords($patient->address_category)}}</td>
              </tr>
              <tr>
                <td>Address</td><td>{{$patient->address}}</td>
              </tr>
              <tr>
                <td>Status</td><td>{{$patient->marital_status}}</td>
              </tr>
              <tr>
                <td>Convert</td><td>{{$patient->convert}}</td>
              </tr>
              <tr>
                <td>Born Again</td><td>{{$patient->born_again}}</td>
              </tr>
              <tr>
                <td>Counselling Need</td><td>{{$patient->counselling_need}}</td>
              </tr>
              <tr>
                <td>Mental Counselling</td><td>{{$patient->mental_counselling}}</td>
              </tr>
              <tr>
                <td>Drugs Prescribed</td><td>{{$patient->drugs_prescribed}}</td>
              </tr>
              <tr>
                <td>Drugs Dispensed</td><td>{{$patient->drugs_dispensed}}</td>
              </tr>
              <tr>
                <td>Lab Done</td><td>{{$patient->lab_done}}</td>
              </tr>
              <tr>
                <td>Welfare Given</td><td>{{$patient->welfare_given}}</td>
              </tr>
              <tr>
                <td>Diagnosis</td><td>{{$patient->diagnosis}}</td>
              </tr>
        </tbody>
    </table>
  </div>
@endsection
