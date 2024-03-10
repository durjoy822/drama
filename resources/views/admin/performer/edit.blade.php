@extends('admin.layout.master')
@section('title') Performer Edit @endsection
@section('body')
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit performer form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('performers.update',$performer->id)}}" method="POST" >
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$performer->name}}" name="name" id="inputEmail31" placeholder="Enter name"/>
                               <div class="text-danger mt-1"> @error('name'){{$message}} @enderror</div>
                            </div>
                        </div>
                         <div class="row mb-3 justify-content-end">
                            <label for="inputEmail33" class="col-3 col-form-label pt-0">Position</label>
                            <div class="col-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" {{$performer->position==1?'checked':''}} type="radio" name="position" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Front Stage</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" {{$performer->position==0?'checked':''}}  type="radio" name="position" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">Back Stage</label>
                                </div>
                                <div class="text-danger mt-1"> @error('position'){{$message}} @enderror</div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Character</label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$performer->character}}" name="character" id="inputEmail32" placeholder="Character Name"/>
                                <div class="text-danger mt-1"> @error('position'){{$message}} @enderror</div>
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
    </div> --}}


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit performer form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('performers.update',$performer->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="w-25">Drama title</th>
                                <th>working Possition</th>
                                <th>name </th>
                                <th>Cherecter </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="itemStockTBody">
                            <tr>
                                <td class="p-1">
                                    <select class="form-select" name="performer[0][drama_id]" aria-label="Default select example">
                                        <option selected disabled>Select drama</option>
                                        @foreach ($dramas as $drama )
                                        <option value="{{$drama->id}}" {{$drama->id==$performer->drama_id?'selected':''}} >{{$drama->title}}</option>
                                        @endforeach
                                      </select>
                                      <div class="text-danger">@error("performer.0.drama_id") {{ $message }} @enderror</div>
                                </td>
                                <td class="p-1">
                                    <select class="form-select" name="performer[0][position]" aria-label="Default select example">
                                        <option selected disabled> woring possition</option>
                                        <option value="1" {{$performer->position==1?'selected':''}} >Front stage </option>
                                        <option value="0" {{$performer->position==0?'selected':''}}>Backstage</option>
                                      </select>
                                      <div class="text-danger">@error("performer.0.position") {{ $message }} @enderror</div>
                                </td>
                                <td class="p-1">
                                    <input class="form-control" type="text" value="{{$performer->name}}" name="performer[0][name]" placeholder="Performer name" >
                                    <div class="text-danger">@error("performer.0.name") {{ $message }} @enderror</div>
                                </td>
                                <td class="p-1">
                                    <input class="form-control" type="text" value="{{$performer->character}}" name="performer[0][character]" placeholder="Performer Character " >
                                    <div class="text-danger">@error("performer.0.character") {{ $message }} @enderror</div>
                                </td>

                                <td class="p-1"><button type="button" class="btn btn-success btn-sm addRow" > + </button></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row mt-1">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    var i = 1;
    $(document).ready(function () {
        $(".addRow").click(function (e) {
            e.preventDefault();
            $("table").append(
                `<tr class="data-row">
                    <td class="p-1">
                        <select class="form-select" name="performer[${i}][drama_id]" aria-label="Default select example">
                            <option selected disabled>Select drama</option>
                            @foreach ($dramas as $drama )
                                        <option value="{{$drama->id}}">{{$drama->title}}</option>
                                        @endforeach
                        </select>
                    </td>
                    <td class="p-1">
                        <select class="form-select" name="performer[${i}][position]" aria-label="Default select example">
                            <option selected disabled>Select working position</option>
                            <option value="1">Front stage</option>
                            <option value="0">Backstage</option>
                        </select>
                    </td>
                    <td class="p-1">
                        <input type="text" class="form-control" name="performer[${i}][name]" placeholder="Performer name">
                    </td>
                    <td class="p-1">
                        <input type="text" class="form-control" name="performer[${i}][character]" placeholder="Performer Character">
                    </td>
                    <td class="p-1">
                        <button class="btn btn-danger removeRow">-</button>
                    </td>
                </tr>`
            );
            ++i;
        });

        $("table").on("click", ".removeRow", function () {
            $(this).closest("tr").remove();
        });
    });
</script>

@endsection

