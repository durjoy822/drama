@extends('admin.layout.master')
@section('title') Page Header Setting @endsection
@section('body')
<style>
    .member_img{
        border-radius: 50%;
        width: 70px;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <!--create btn-->
        {{-- @if($contacts->count()<1) --}}
        <div class="my-2">
            <a href="{{route('headers.create')}}" class="btn btn-sm btn-success"
                title="Edit">
                <i class="fa-regular fa-square-plus"></i>&nbsp; Add header
            </a>
        </div>
        {{-- @endif --}}
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage Page header table</h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Page name</th>
                            <th>Action</th>
                        </tr>
                        @if($headers->count())
                        @foreach($headers as $index=>$header)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td>
                                <img class="member_img" src="{{ asset($header->image) }}">
                            </td>
                            <td>{{ $header->page_name }}</td>
                            <td>
                                <a href="{{ route('headers.edit', $header->id) }}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <form action="{{ route('headers.destroy', $header->id) }}" method="post"
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
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>






@endsection

