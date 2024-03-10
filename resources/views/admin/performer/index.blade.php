@extends('admin.layout.master')
@section('title') Performer  Manage @endsection
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage performer table</h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Drama title</th>
                            <th>Performer name</th>
                            <th>Position</th>
                            <th>Character</th>
                            <th>Action</th>
                        </tr>
                        @if($performers->count())
                        @foreach($performers as $index=>$performer)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td>{{ $performer->drama->title }}</td>
                            <td>{{ $performer->name }}</td>
                            <td>
                                @if ($performer->position==1)
                                <button class="btn btn-primary btn-sm">
                                    Front Stage
                                </button>
                                @elseif($performer->position==0)
                                <button class="btn btn-warning btn-sm">
                                  Back Stage
                                </button>
                                @endif
                            </td>
                            <td> {{ $performer->character }}</td>

                            <td>
                                <a href="{{ route('performers.edit', $performer->id) }}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <form action="{{ route('performers.destroy', $performer->id) }}" method="post"
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
                    <div>  {{ $performers->links() }}</div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>






@endsection

