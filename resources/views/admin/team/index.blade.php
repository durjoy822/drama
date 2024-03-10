@extends('admin.layout.master')
@section('title') Teams Manage @endsection
@section('body')
<style>
    .member_img{
        border-radius: 50%;
        width: 70px;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage team table</h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Member Type</th>
                            <th>Facebook</th>
                            <th>Instagram</th>
                            <th>Twitter</th>
                            <th>Action</th>
                        </tr>
                        @if($teams->count())
                        @foreach($teams as $index=>$team)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td>
                                <img class="member_img" src="{{ asset($team->image) }}">
                            </td>
                            <td>{{ $team->name }}</td>
                            <td>
                                @if($team->member_type=='1')
                                <button class="btn btn-primary btn-sm" >
                                    Founder
                                </button>
                                @elseif($team->member_type=='2')
                                <button class="btn btn-success btn-sm" >
                                    Primary Member
                                </button>
                                @elseif($team->member_type=='3')
                                <button class="btn btn-info btn-sm" >
                                    Permanent Member
                                </button>
                                @elseif($team->member_type=='4')
                                <button class="btn btn-warning btn-sm" >
                                    Associate Member
                                </button>
                                @endif
                            </td>
                            <td>{{ $team->facebook }}</td>
                            <td>{{ $team->instagram }}</td>
                            <td>{{ $team->twitter }}</td>
                            <td>
                                <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm d-inline" title="Delete"
                                        onclick="return confirm('Are you sure to delete this..');">
                                        <i class="ri-chat-delete-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="8" class="text-center">No data available in the table</td>
                        </tr>
                        @endif
                    </table>
                   <div>  {{ $teams->links() }}</div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>






@endsection

