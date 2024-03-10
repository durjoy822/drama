@extends('admin.layout.master')
@section('title') Drama Create @endsection
@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add drama form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('dramas.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Title</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="title" id="inputEmail3" placeholder="Drama Title"/>
                                <div class="text-danger mt-1"> @error('title') {{$message}}@enderror</div>
                            </div>

                            <label for="inputEmail3" class="col-3 col-form-label mt-2">Video link</label>
                            <div class="col-9 mt-2">
                                <input type="text" class="form-control" name="video_link" id="inputEmail3" placeholder="Video link"/>
                                <div class="text-danger mt-1"> @error('video_link') {{$message}}@enderror</div>

                            </div>
                        </div> <div class="row mb-3 justify-content-end">
                            <label class="col-3 col-form-label">Drama Status</label>
                            <div class="col-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="drama_status" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Upcoming Show</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="drama_status" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">Upcoming Production</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="drama_status" id="inlineRadio3" value="3">
                                    <label class="form-check-label" for="inlineRadio3">Now Showing</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="drama_status" id="inlineRadio4" value="4">
                                    <label class="form-check-label" for="inlineRadio4">Complete Show</label>
                                </div>

                            </div>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="w-25">Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="itemStockTBody">
                            <tr>
                                <td class="p-1">
                                    <input type="file" class="form-control" name="drama[0][image]" onchange="PreviewImage();" id="uploadImage"  placeholder="Drama Title"/>
{{--                                    <br><img class="uploadPreview" style="width: 100px; height: 100px;" />--}}
                                </td>
                                <td class="p-1">
                                    <textarea class="form-control" id="description0" name="drama[0][description]" placeholder="Description"></textarea>
                                 </td>
                                <td class="p-1"><button type="button" class="btn btn-success btn-sm" id="addItemStockBtn"> + </button></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <label for="inputEmail3" class="col-3 col-form-label">Status</label>
                            <div class="col-9 mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"  type="radio"  name="status" id="inlineRadio3" value="1">
                                    <label class="form-check-label" for="inlineRadio3">Published</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"  type="radio"  name="status" id="inlineRadio4" value="0">
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
