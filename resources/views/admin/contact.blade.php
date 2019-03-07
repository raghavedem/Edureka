@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="row">

          @isset($contact)

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">contact</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <form action="{{route('SaveContact')}}" method="POST" class="form-horizontal" role="form">
                    
              <div class="row">
                <div class="col-sm-6">

                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Location</span>
                    </div>
                    <input type="text" name="location" class="form-control" value="{{$contact->location}}">
                  </div>
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Email</span>
                    </div>
                    <input type="text" name="email" class="form-control" value="{{$contact->email}}">
                  </div>  
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Phone</span>
                    </div>
                    <input type="text" name="phone_number" class="form-control" value="{{$contact->phone_number}}">
                  </div> 
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Fax</span>
                    </div>
                    <input type="text" name="fax" class="form-control" value="{{$contact->fax}}">
                  </div>  

                   <button type="submit" class="btn btn-primary">Update</button>
                 </div>  
             </div>
            </form>
                    
                </div>
            </div>
        </div>

        @endisset

   

    </div>
</div>
@endsection
