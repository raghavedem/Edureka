@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="row">

          @isset($vendor)

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Vendor</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <form action="{{route('SaveVendor')}}" method="POST" class="form-horizontal" role="form">
                    
              <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <legend>{{$vendor->title}}</legend>
                    </div>

                   <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Title</span>
                    </div>
                    <input type="text" name="title" class="form-control" value="{{$vendor->title}}">
                  </div>
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Image</span>
                    </div>
                    <input type="text" name="image_url" class="form-control" value="{{$vendor->image_url}}">
                  </div>
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">PDF Link</span>
                    </div>
                    <input type="text" name="pdf_link" class="form-control" value="{{$vendor->pdf_link}}">
                  </div>
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">PDF Link1</span>
                    </div>
                    <input type="text" name="pdf_link1" class="form-control" value="{{$vendor->pdf_link1}}">
                  </div>
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Term Title</span>
                    </div>
                    <input type="text" name="terms_title" class="form-control" value="{{$vendor->terms_title}}">
                  </div>
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Instruction</span>
                    </div>
                    <input type="text" name="instruction" class="form-control" value="{{$vendor->instruction}}">
                  </div>

                 </div>
                <div class="col-sm-6">

                     <div class="form-group">
                      <label for="designation">Description</label>
                      <textarea type="text" name="description" rows="5" class="form-control">{{$vendor->description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="designation">Term Content</label>
                      <textarea type="text" name="term_content" rows="5" class="form-control">{{$vendor->term_content}}</textarea>
                    </div>
                    
            
                   <button type="submit" class="btn btn-primary">Update</button>
                 </div>  
             </div>
            </form>
                    
                </div>
            </div>
        </div>

        @endisset

      {{-- Our Reps --}}
       @isset($rep)
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Our Reps</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <form action="{{route('SaveRep')}}" method="POST" class="form-horizontal" role="form">

            <div class="row">
              <div class="col-sm-6">
                    <div class="form-group">
                        <legend>{{$rep->name}}</legend>
                    </div>

                   <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Name</span>
                    </div>
                    <input type="text" name="name" class="form-control" value="{{$rep->name}}">
                  </div>
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Email</span>
                    </div>
                    <input type="text" name="email" class="form-control" value="{{$rep->email}}">
                  </div>  
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Phone</span>
                    </div>
                    <input type="text" name="phone_number" class="form-control" value="{{$rep->phone_number}}">
                  </div> 
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Fax</span>
                    </div>
                    <input type="text" name="fax" class="form-control" value="{{$rep->fax}}">
                  </div>                   
              </div>
              <div class="col-sm-6">

                  <div class="form-group">
                      <label for="designation">Designation</label>
                      <textarea type="text" name="designation" rows="5" class="form-control">{{$rep->designation}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="designation">Description</label>
                      <textarea type="text" name="description" rows="5" class="form-control">{{$rep->description}}</textarea>
                    </div>
                    
                   <button type="submit" class="btn btn-primary">Update</button>
                </div>   
            </div>

            </form>
                    
                </div>
            </div>
        </div> 

        @endisset

      {{-- Our Reps Ends --}}


      {{-- Our Contact Details --}}
       @isset($contact_detail)
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contact Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <form action="{{route('SaveRep')}}" method="POST" class="form-horizontal" role="form">

            <div class="row">
              <div class="col-sm-6">
                    <div class="form-group">
                        <legend>{{$contact_detail->name}}</legend>
                    </div>

                   <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Name</span>
                    </div>
                    <input type="text" name="name" class="form-control" value="{{$contact_detail->name}}">
                  </div>
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Email</span>
                    </div>
                    <input type="text" name="email" class="form-control" value="{{$contact_detail->email}}">
                  </div>  
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Designation</span>
                    </div>
                    <input type="text" name="designation" class="form-control" value="{{$contact_detail->designation}}">
                  </div>  
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Phone</span>
                    </div>
                    <input type="text" name="phone_number" class="form-control" value="{{$contact_detail->phone_number}}">
                  </div> 
                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Fax</span>
                    </div>
                    <input type="text" name="fax" class="form-control" value="{{$contact_detail->fax}}">
                  </div>
                   <button type="submit" class="btn btn-primary">Update</button>                   
              </div>
  
            </div>

            </form>
                    
                </div>
            </div>
        </div> 

        @endisset

      {{-- Our Contact Details Ends --}}

      {{-- Our About Details --}}

        @isset($about)

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">About</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <form action="{{route('SaveAbout')}}" method="POST" class="form-horizontal" role="form">
                    
              <div class="row">
                <div class="col-sm-6">

                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Title</span>
                    </div>
                    <input type="text" name="title" class="form-control" value="{{$about->title}}">
                  </div>
                  <div class="form-group">
                      <label for="designation">Body</label>
                      <textarea type="text" name="body" rows="5" class="form-control">{{$about->body}}</textarea>
                    </div>  

                   <button type="submit" class="btn btn-primary">Update</button>
                 </div>  
             </div>
            </form>
                    
                </div>
            </div>
        </div>

        @endisset

          {{-- Our About Ends --}}

              {{-- Our About Details --}}

        @isset($slider)

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Slider</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <form action="{{route('SaveSlider')}}" method="POST" class="form-horizontal" role="form">
                    
              <div class="row">
                <div class="col-sm-6">

                  <div class="input-group mb-3 input-group-sm">
                     <div class="input-group-prepend">
                       <span class="input-group-text">Image</span>
                    </div>
                    <input type="text" name="image" class="form-control" value="{{$slider->image}}">
                  </div>
                   <button type="submit" class="btn btn-primary">Update</button>

                  <br/>
                  <br/>
                  <img src="{{$slider->image}}" alt="{{$slider->title}}">


                 </div>  
             </div>
            </form>
                    
                </div>
            </div>
        </div>

        @endisset

          {{-- Our About Ends --}}  

    </div>
</div>
@endsection
