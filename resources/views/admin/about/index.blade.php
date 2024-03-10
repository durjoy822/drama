@extends('admin.layout.master')
@section('title') About Manage @endsection
@section('body')
<style>
    .about_img{
        border-radius: 50%;
        width: 70px;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage  Prangonemor about table</h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                        @if($abouts->count())
                        @foreach($abouts as $index=>$about)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td>
                                <img class="about_img" src="{{ asset($about->image) }}">
                            </td>
                            <td>
                                {!!$about->details!!}
                            </td>
                            <td>
                                <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <form action="{{ route('abouts.destroy', $about->id) }}" method="post"
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

