@extends('admin.layout.master')
@section('title') Settings Manage @endsection
@section('body')
<style>
    .setting{
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <!--create btn-->
        @if($settings->count()<1)
        <div class="my-2">
            <a href="{{route('settings.create')}}" class="btn btn-success"
                title="Edit">
                <i class="fa-regular fa-square-plus"></i>&nbsp; Add settings
            </a>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage setting table</h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Dark Logo</th>
                            <th>White Logo</th>
                            <th>Email</th>
                            <th>App Name</th>
                            <th>Copyright</th>
                            <th>Action</th>
                        </tr>
                        @if($settings->count())
                        @foreach($settings as $index=>$setting)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td>
                                <img class="setting" src="{{asset($setting->dark_logo)}}">
                            </td>
                            <td>
                                <img class="setting" src="{{asset($setting->white_logo)}}">
                            </td>
                            <td>{{ $setting->email }}</td>
                            <td>{{ $setting->app_name }}</td>
                            <td>{{ $setting->copyright }}</td>

                            <td>
                                <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <form action="{{ route('settings.destroy', $setting->id) }}" method="post"
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

