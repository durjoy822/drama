@extends('admin.layout.master')
@section('title') Drama Edit @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit drama form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('dramas.update',$drama->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Title</label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$drama->title}}" name="title" id="inputEmail3" placeholder="Drama Title"/>
                            </div>

                            <label for="inputEmail3" class="col-3 col-form-label mt-2">Video link</label>
                            <div class="col-9 mt-2">
                                <input type="text" class="form-control" value="{{$drama->video_link}}"  name="video_link" id="inputEmail3" placeholder="Video link"/>
                            </div>
                        </div> <div class="row mb-3 justify-content-end">
                            <label class="col-3 col-form-label">Drama Status</label>
                            <div class="col-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" {{$drama->drama_status==1?'checked':''}} type="radio" name="drama_status" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Upcoming Show</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" {{$drama->drama_status==2?'checked':''}}  type="radio" name="drama_status" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">Upcoming Production</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" {{$drama->drama_status==3?'checked':''}}  type="radio"  name="drama_status" id="inlineRadio3" value="3">
                                    <label class="form-check-label" for="inlineRadio3">Now Showing</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" {{$drama->drama_status==4?'checked':''}}  type="radio"  name="drama_status" id="inlineRadio4" value="4">
                                    <label class="form-check-label" for="inlineRadio4">Complete Show</label>
                                </div>

                            </div>
                        </div>
                            {{-- <button type="button" class="btn btn-success btn-sm" id="addItemStockBtn"> + </button></td> --}}
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="w-25">Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="itemStockTBody">

                                @foreach ($drama->dramadetails as $dramasDetail )
                                <tr>
                                    <td class="p-1">
                                        <input type="file" class="form-control"  name="drama[{{$dramasDetail->id}}][image]" onchange="PreviewImage();" id="uploadImage" placeholder="Drama Title"/>
                                        <img src="{{asset($dramasDetail ->image)}}" style="width:70px; height:70px; ">
                                    </td>
                                    <td class="p-1">
                                        <textarea class="form-control"  id="description0" name="drama[{{$dramasDetail->id}}][description]" placeholder="Description">{!!$dramasDetail ->description!!}</textarea>
                                     </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <label for="inputEmail3" class="col-3 col-form-label">Status</label>
                            <div class="col-9 mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" {{$drama->status==1?'checked':''}}  type="radio"  name="status" id="inlineRadio3" value="1">
                                    <label class="form-check-label" for="inlineRadio3">Published</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" {{$drama->status==0?'checked':''}}  type="radio"  name="status" id="inlineRadio4" value="0">
                                    <label class="form-check-label" for="inlineRadio4">Unpublished</label>
                                </div>
                            </div>
                        </div>

                        <div class="justify-content-end row mt-1">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Create New Role</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
