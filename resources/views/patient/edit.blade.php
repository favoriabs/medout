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
                                      <option value="male" @if($patient->sex == 'male') selected @endif>Male</option>
                                      <option value="female" @if($patient->sex == 'female') selected @endif>Female</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="marital_status">Marital Status</label>
                                    <select class="form-control" name="marital_status">
                                      <option disabled>--Select Status--</option>
                                      <option value="single" @if($patient->marital_status == 'single') selected @endif>Single</option>
                                      <option value="married" @if($patient->marital_status == 'married') selected @endif>Married</option>
                                      <option value="widow" @if($patient->marital_status == 'widow') selected @endif>Widow</option>
                                      <option value="widower" @if($patient->marital_status == 'widower') selected @endif>Widower</option>
                                      <option value="seperated" @if($patient->marital_status == 'seperated') selected @endif>Seperated</option>
                                      <option value="divorced" @if($patient->marital_status == 'divorced') selected @endif>Divorced</option>
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
                                    <label for="convert">Address Area</label>
                                    <select class="form-control" name="address_category">
                                      <option disabled>--Choose--</option>
                                      <option value="bukuru" @if($patient->address_category == 'bukuru') selected @endif>Bukuru</option>
                                      <option value="rayfield" @if($patient->address_category == 'rayfield') selected @endif>Rayfield</option>
                                      <option value="vitafoam" @if($patient->address_category == 'vitafoam') selected @endif>Vitafoam</option>
                                      <option value="hwolshe" @if($patient->address_category == 'hwolshe') selected @endif>Hwolshe</option>
                                      <option value="domkatbali" @if($patient->address_category == 'domkat bali') selected @endif>Domkat Bali</option>
                                      <option value="millqtrs" @if($patient->address_category == 'mill qtrs') selected @endif>Mill Qtrs</option>
                                      <option value="abattoir" @if($patient->address_category == 'abattoir') selected @endif>Abattoir</option>
                                      <option value="tudunwada" @if($patient->address_category == 'tudun wada') selected @endif>Tudun Wada</option>
                                      <option value="others" @if($patient->address_category == 'others') selected @endif>Others</option>
                                    </select>
                                </div>
                              </div>
                            </div>
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
                                      <option value="yes" @if($patient->convert == 'yes') selected @endif>Yes</option>
                                      <option value="no" @if($patient->convert == 'no') selected @endif>No</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="born_again">Born Again (Was this person born again already or rededicated his life?)</label>
                                  <select class="form-control" name="born_again">
                                    <option disabled>--Choose--</option>
                                    <option value="yes" @if($patient->born_again == 'yes') selected @endif>Yes</option>
                                    <option value="no" @if($patient->born_again == 'no') selected @endif>No</option>
                                    <option value="rededicated" @if($patient->born_again == 'rededicated') selected @endif>R/D</option>
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
