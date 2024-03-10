@extends('admin.layout.master')
@section('title') Drama Manage @endsection
@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Manage drama table</h4>
                    <p class="text-muted font-14 text-danger">{{Session::get('success')}}</p>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Drama title</th>
                                <th>Drama status</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                            @if($dramas->count())
                            @foreach($dramas as $index=>$drama)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{$drama->title}}</td>
                                <td>
                                    @if($drama->drama_status=='1')
                                    <button  class="btn btn-primary btn-sm" >
                                        Upcoming Show
                                    </button>
                                    @elseif($drama->drama_status=='2')
                                    <button  class="btn btn-success btn-sm" >
                                        Upcoming Production
                                    </button>
                                    @elseif($drama->drama_status=='3')
                                    <button  class="btn btn-info btn-sm" >
                                        Now showing
                                    </button>
                                    @elseif($drama->drama_status=='4')
                                    <button  class="btn btn-warning btn-sm" >
                                        Complete Show
                                    </button>
                                    @endif
                                </td>
                                <td>
                                   {{$drama->status=='1'?'Published':'Unpublished'}}
                                </td>
                                <td>
                                    <a href="{{route('dramas.edit',$drama->id)}}" class="btn btn-success btn-sm" title="Edit">
                                        <i class="ri-edit-box-fill"></i>
                                    </a>
                                    <a href="{{route('dramas.show',$drama->id)}}" class="btn btn-info btn-sm" title="view">
                                        <i class="ri-book-line"></i>
                                    </a>
                                    <form action="{{route('dramas.destroy',$drama->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit" class="btn btn-danger btn-sm d-inline" title="Delete" onclick="return confirm('Ary you sure to delete this..');">
                                            <i class="ri-chat-delete-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="text-center">No data available in table</td>
                            </tr>
                            @endif
                        </table>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
