@extends('admin.layout.master')
@section('title') Settings Create @endsection
@section('body')
<style>
    .image_preview_a, .image_preview_b {
        width: 100px;
        height: 100px;
        border: 1px solid rgb(239, 215, 215);
        border-radius: 10%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .image_preview_a img, .image_preview_b img {
        max-width: 100%;
        max-height: 100%;
        /* border-radius: 10%; */

    }

</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add setting form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                        <div class="col-md-12">
                        <form action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-4 text-center">
                                    <label class="my-2">Dark logo & White logo</label>

                                    <div class="d-flex justify-content-center align-items-center mb-2">
                                        <div class="image_preview_a "></div>
                                    </div>
                                    <input type="file" class="form-control mt-3 py-3 " name="dark_logo" id="imageInputA" onchange="previewImage('imageInputA', 'image_preview_a')"/>
                                    <div class="text-danger mt-1"> @error('image'){{$message}} @enderror</div>


                                    <div class="mt-3 d-flex justify-content-center align-items-center mb-2">
                                        <div class="image_preview_b"></div>
                                    </div>
                                    <input type="file" class="form-control mt-3 py-3" name="white_logo" id="imageInputB" onchange="previewImage('imageInputB', 'image_preview_b')"/>
                                    <div class="text-danger mt-1"> @error('image'){{$message}} @enderror</div>
                                </div>
                                <!--col-8-->
                                <div class="col-md-8 ">
                                    <div class="text-center">
                                        <label class="my-2 text-center">App information</label>
                                    </div>
                                    <div>
                                        <label for="inputEmail31" class="col-md-3 col-form-label">App name</label>
                                        <input type="text" name="app_name" class="form-control" placeholder="App name">
                                        <div class="text-danger mt-1"> @error('app_name'){{$message}} @enderror</div>
                                    </div>

                                    <div class="mt-2">
                                        <label for="inputEmail31" class="col-md-3 col-form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                        <div class="text-danger mt-1"> @error('email'){{$message}} @enderror</div>
                                    </div>

                                    <div class="mt-2">
                                        <label for="inputEmail31" class="col-md-3 col-form-label">Country</label>
                                        <select class="form-control" name="country">
                                            <option value="" disabled selected>Select Country</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select>
                                        <div class="text-danger mt-1"> @error('country'){{$message}} @enderror</div>
                                    </div>
                                    
                                    <div class="mt-2">
                                        <label for="inputEmail31" class="col-md-3 col-form-label">State</label>
                                        <input type="text" name="state" class="form-control" placeholder="State">
                                        <div class="text-danger mt-1"> @error('state'){{$message}} @enderror</div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="inputEmail31" class="col-md-3 col-form-label">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" placeholder="Facebook link">
                                        <div class="text-danger mt-1"> @error('facebook'){{$message}} @enderror</div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="inputEmail31" class="col-md-3 col-form-label">Twitter </label>
                                        <input type="text" class="form-control" name="twitter" placeholder="Twitter link">
                                        <div class="text-danger mt-1"> @error('twitter'){{$message}} @enderror</div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="inputEmail31" class="col-md-3 col-form-label">Instagram </label>
                                        <input type="text" class="form-control" name="instagram" placeholder="instagram link">
                                        <div class="text-danger mt-1"> @error('instagram'){{$message}} @enderror</div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="inputEmail31" class="col-md-3 col-form-label">Pinterest </label>
                                        <input type="text" class="form-control" name="pinterest" placeholder="Pinterest link">
                                        <div class="text-danger mt-1"> @error('pinterest'){{$message}} @enderror</div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="inputEmail31" class="col-md-3 col-form-label">Copyright </label>
                                        <input type="text" class="form-control" name="copyright" placeholder="Copyright">
                                        <div class="text-danger mt-1"> @error('copyright'){{$message}} @enderror</div>
                                    </div>
                                    <div class="mt-2">
                                       <button class="btn btn-info">Save</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                        </div>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>





    <script>
        function previewImage(inputId, previewClass) {
            var input = document.getElementById(inputId);
            var preview = document.querySelector('.' + previewClass);

            preview.innerHTML = '';

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var image = document.createElement('img');
                    image.src = e.target.result;
                    image.classList.add('img-fluid');
                    preview.appendChild(image);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection

