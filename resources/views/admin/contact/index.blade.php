@extends('admin.layout.master')
@section('title') Contact Manage @endsection
@section('body')
<div class="row">
    <div class="col-lg-12">
        <!--create btn-->
        @if($contacts->count()<1)
        <div class="my-2">
            <a href="{{route('contacts.create')}}" class="btn btn-success"
                title="Edit">
                <i class="fa-regular fa-square-plus"></i>&nbsp; Add contact
            </a>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage contact table</h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>address</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>telephone</th>
                            <th>Map</th>
                            <th>Action</th>
                        </tr>
                        @if($contacts->count())
                        @foreach($contacts as $index=>$contact)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td> {!! $contact->address !!}</td>
                            <td> {{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td> {{ $contact->telephone }}</td>
                            <td> {{subStr($contact->map,0,90)}}..</td>

                            <td>
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="post"
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

