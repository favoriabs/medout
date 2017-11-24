@extends('layout.main')

@section('dashboard')
  active
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        @include('layout.errors')
        @include('layout.session')
      </div>
    </div>
    @if($patients->count() < 1)
      No Records Yet
    @else
    <table id="bootstrap-table" class="table table-hover table-striped">
        <thead>
          <th  class="text-center">S/N</th>
          <th data-sortable="true">Name</th>
          <th data-sortable="true">Phone Number</th>
          <th data-sortable="true">Sex</th>
          <th>Diagnosis</th>
          <th data-field="actions" class="td-actions" data-events="operateEvents" data-formatter="operateFormatter" colspan="3">Actions</th>
        </thead>
        <tbody>
            @foreach($patients as $patient)
              <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$patient->name}}</td>
                <td>{{$patient->phone_number}}</td>
                <td>{{$patient->sex}}</td>
                <td>{{$patient->diagnosis}}</td>
                <td><a class="btn-btn-primary" href="#">View Details</a></td>
                <td><a class="btn btn-warning" href="{{route('edit_patient', $patient->id)}}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{route('delete_patient', $patient->id)}}">Delete</a></td>
              </tr>
            @endforeach
        </tbody>
    </table>
    @endif
  </div>
@endsection
