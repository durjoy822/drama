@extends('admin.layout.master')
@section('title') Contact Edit @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit contact form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('contacts.update',$contact->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-md-3 col-form-label">Phone</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" value="{{$contact->phone}}" value="{{old('phone')}}" name="phone" id="inputEmail32" placeholder="Phone number"/>
                                <div class="text-danger mt-1"> @error('phone'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Telephone</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control"  value="{{$contact->telephone}}" value="{{old('telephone')}}"  name="telephone" id="inputEmail33" placeholder="Telephone Number"/>
                                <div class="text-danger mt-1"> @error('telephone'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" value="{{$contact->email}}"  value="{{old('email')}}"  name="email" id="inputEmail33" placeholder="Enter email address"/>
                                <div class="text-danger mt-1"> @error('email'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Google Map</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$contact->map}}" name="map"  value="{{old('map')}}"  placeholder="Enter google map link"/>
                                <div class="text-danger mt-1"> @error('map'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  value="{{old('address')}}"  name="address" cols="3" rows="3" placeholder="Enter address">{!!$contact->address!!}</textarea>
                                <div class="text-danger mt-1"> @error('address'){{$message}} @enderror</div>
                            </div>
                        </div>

                        <div class="justify-content-end row mt-1">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection

