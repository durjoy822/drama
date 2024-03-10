@extends('admin.layout.master')
@section('title') Statement Create @endsection
@section('body')
<style>
    .ck{
        height: 300px;
    }
</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add statement form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('statements.store')}}" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Statement</label>
                            <div class="col-md-9">
                                <textarea id="editor" name="statement" class="form-control ck" placeholder="Enter your statement"></textarea>
                               <div class="text-danger mt-1"> @error('statement'){{$message}} @enderror</div>
                            </div>
                        </div>

                        <div class="justify-content-end row mt-1">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>

<!--Ck editor -->

@endsection

