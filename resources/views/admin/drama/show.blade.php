@extends('admin.layout.master')
@section('title') Drama details @endsection
@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Drama Details table</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                        <table class="table table-striped table-hover">
                            <tr>
                                <td>SNO</td>
                                <td>{{$drama->id}}</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{$drama->title}}</td>
                            </tr>
                            <tr>
                                <td>Video link</td>
                                <td>{{$drama->video_link}}</td>
                            </tr>
                            <tr>
                                <td>Drama Status</td>
                                <td>
                                    @if($drama->drama_status=='1')
                                    <button  class="btn btn-primary btn-sm" title="Edit">
                                        Upcoming Show
                                    </button>
                                    @elseif($drama->drama_status=='2')
                                    <button  class="btn btn-success btn-sm" title="Edit">
                                        Upcoming Production
                                    </button>
                                    @elseif($drama->drama_status=='3')
                                    <button  class="btn btn-info btn-sm" title="Edit">
                                        Now showing
                                    </button>
                                    @elseif($drama->drama_status=='4')
                                    <button  class="btn btn-warning btn-sm" title="Edit">
                                        Complete Show
                                    </button>
                                    @endif
                                </td>
                                <tr>
                                    <td>Status</td>
                                    <td>   {{$drama->drama_status=='1'?'Published':'Unpublished'}}</td>
                                </tr>

                            </tr>


                        </table>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
    <!-----drama details ----->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Drama Internal Details</h4>
                        <table class="table table-striped table-hover">
                            <tr class="text-center">
                                <td >Image </td>
                                <td>Description</td>

                            </tr>
                            @foreach ($dramasDetails as $dramasDetail)
                            <tr>
                                <td class="text-center">
                                    <img src="{{asset($dramasDetail->image)}}" style="width: 100px ; height:100px; ">
                                </td>
                                <td>{!!$dramasDetail->description!!}</td>
                            </tr>
                            @endforeach
                        </table>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
