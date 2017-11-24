@extends('layout.main')

@section('create_record')
  active
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">

                <div class="card">
                    <div class="header">Edit Patient ({{$patient->name}})</div>
                    <div class="content">
                        <form method="post" action="{{route('update_patient_record', $patient->id)}}">
                          {{csrf_field()}}
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" placeholder="Full Name" name="name" class="form-control" value="{{$patient->name}}">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" placeholder="Phone Number" name="phone_number" class="form-control" value="{{$patient->phone_number}}">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Occupation</label>
                                  <input type="text" placeholder="Occupation" name="occupation" class="form-control" value="{{$patient->occupation}}">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sex">Sex</label>
                                    <select class="form-control" name="sex">
                                      <option disabled>--Select Sex--</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="marital_status">Marital Status</label>
                                    <select class="form-control" name="marital_status">
                                      <option disabled>--Select Status--</option>
                                      <option value="single">Single</option>
                                      <option value="married">Married</option>
                                      <option value="widow">Widow</option>
                                      <option value="widowed">Widowed</option>
                                      <option value="seperated">Seperated</option>
                                      <option value="divorced">Divorced</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Age</label>
                                  <input type="text" placeholder="Age" name="age" class="form-control" value="{{$patient->age}}">
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" rows="5" cols="80">{{$patient->address}}</textarea>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="convert">Convert (Did this person get born again for the first time?)</label>
                                    <select class="form-control" name="convert">
                                      <option disabled>--Choose--</option>
                                      <option value="yes">Yes</option>
                                      <option value="no">No</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="born_again">Born Again (Was this person born again already or rededicated his life?)</label>
                                  <select class="form-control" name="convert">
                                    <option disabled>--Choose--</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="rededicated">R/D</option>
                                  </select>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="counselling_need">Counselling Need</label>
                                    <textarea name="counselling_need" rows="5" cols="80">{{$patient->counselling_need}}</textarea>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mental_counselling">Mental Counselling</label>
                                    <textarea name="mental_counselling" rows="5" cols="80">{{$patient->mental_counselling}}</textarea>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="drugs_prescribed">Drugs Prescribed</label>
                                    <textarea name="drugs_prescribed" rows="5" cols="80">{{$patient->drugs_prescribed}}</textarea>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="drugs_dispensed">Drugs Dispensed</label>
                                    <textarea name="drugs_dispensed" rows="5" cols="80">{{$patient->drugs_dispensed}}</textarea>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="welfare_given">Welfare Given</label>
                                    <textarea name="welfare_given" rows="5" cols="80">{{$patient->welfare_given}}</textarea>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="lab_done">Lab Done</label>
                                    <textarea name="lab_done" rows="5" cols="80">{{$patient->lab_done}}</textarea>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label>Diagnosis</label>
                                    <input type="text" placeholder="Diagnosis" name="diagnosis" class="form-control" value="{{$patient->diagnosis}}">
                                </div>
                              </div>
                            </div>

                            <hr>

                            <button type="submit" class="btn btn-fill btn-info">Submit</button>
                        </form>
                    </div>
                </div> <!-- end card -->

            </div> <!--  end col-md-6  -->
            <div class="col-md-4">
              @include('layout.errors')
              @include('layout.session')
            </div>
        </div> <!-- end row -->

    </div>
  </div>
@endsection
