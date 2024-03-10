@extends('admin.layout.master')
@section('title')
    Slider Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Manage home slider table</h4>
                    <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <tr>
                                                <th>Id</th>
                                                <th>Slider type</th>
                                                <th>Action</th>
                                            </tr>
                                            @if ($sliders->count() > 0)
                                                @foreach ($sliders as $index=>$slider)
                                                    <tr>
                                                        <td>{{$index +1}}</td>
                                                        <td>
                                                            @if($slider->slider_type=='1')
                                                                <button  class="btn btn-primary btn-sm" >
                                                                    Upcoming Show
                                                                </button>
                                                            @elseif($slider->slider_type=='2')
                                                                <button  class="btn btn-success btn-sm" >
                                                                    Upcoming Production
                                                                </button>
                                                            @elseif($slider->slider_type=='3')
                                                                <button  class="btn btn-info btn-sm" >
                                                                    Now showing
                                                                </button>
                                                            @elseif($slider->slider_type=='4')
                                                                <button  class="btn btn-warning btn-sm" >
                                                                    Complete Show
                                                                </button>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{-- <a href="{{route('sliders.edit',$slider->id)}}" class="btn btn-success btn-sm" title="Edit">
                                                                <i class="ri-edit-box-fill"></i>
                                                            </a> --}}
                                                            <form action="{{ route('sliders.destroy', $slider->id) }}" method="post" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button  type="submit" class="btn btn-danger btn-sm d-inline" title="Delete" onclick="return confirm('Are you sure you want to delete this slider?');">
                                                                    <i class="ri-chat-delete-fill"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="3" class="text-danger text-center">Data not found!</td>
                                                </tr>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                        {{-- <form action="{{ route('sliders.update', $slider->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <label class="my-1">Select Slider type  {{$slider->id}}</label>
                                            <div>
                                                <select class="form-select" name="slider_type" aria-label="Default select example">
                                                    <option disabled>Choose slider type..</option>
                                                    <option value="1" {{ $slider->slider_type == 1 ? 'selected' : '' }}>Upcoming show</option>
                                                    <option value="2" {{ $slider->slider_type == 2 ? 'selected' : '' }}>Upcoming Production</option>
                                                    <option value="3" {{ $slider->slider_type == 3 ? 'selected' : '' }}>Now showing</option>
                                                    <option value="4" {{ $slider->slider_type == 4 ? 'selected' : '' }}>Complete Show</option>
                                                </select>
                                                <div class="text-danger">@error('slider_type') {{ $message }} @enderror</div>
                                            </div>
                                            <div class="my-1">
                                                <button class="btn btn-info" type="submit">Update</button>
                                            </div>
                                        </form> --}}



                                        <form action="{{ route('sliders.store') }}" method="post">
                                            @csrf
                                            <label class="my-1">Select Slider type</label>
                                            <div>
                                                <select class="form-select" name="slider_type" aria-label="Default select example">
                                                    <option selected disabled>Choose slider type..</option>
                                                    <option value="1">Upcoming show</option>
                                                    <option value="2">Upcoming Production</option>
                                                    <option value="3">Now showing</option>
                                                    <option value="4">Complete Show</option>
                                                </select>
                                                <div class="text-danger">@error('slider_type') {{ $message }} @enderror</div>
                                            </div>
                                            <div class="my-1">
                                                <button class="btn btn-info" type="submit">Save</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
@endsection
