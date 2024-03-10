@extends('admin.layout.master')
@section('title') Optimize Manage @endsection
@section('body')
<style>
    .flash{
    width:290px;
}
</style>
<div class="float-right">
<div class="flash float-right">
    @if( Session::get('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage Optimize table
                   
                </h4>
                
                <div class="row">
                <div class="col-lg-6 pt-2 ">
                    <div class="card">
                     <div class="card-body">
                         <div class="m-0">
                             You can clear all site cache from here
                                 <a href="{{route('optimize.clear')}}" class="float-right" >
                                    <button class="btn btn-outline-primary float-end" type="submit">Clear Cache</button>
                                </a>
                         </div>
                     </div>
                    </div>
                 </div>
                <div class="col-lg-6 pt-2 ">
                    <div class="card">
                     <div class="card-body">
                         <div class="m-0">
                            Upgrade your site from here
                                 <a href="{{route('run.migrate')}}" class="float-right" >
                                    <button class="btn btn-outline-primary float-end" type="submit">Upgrade </button>
                                </a>
                         </div>
                     </div>
                    </div>
                 </div>
                </div>
            
              </div>
            </div> 
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>






@endsection

