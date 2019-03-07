@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$title}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


@isset($sliders)

<table class="table table-hover">
      <thead>
          <tr>
              <th>S.No</th>
              <th>Image</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @forelse($sliders as $slider)
          <tr>
              <td>{{$slider->id}}</td>
              <td>{{$slider->image}}</td>
              <td>
                <a href="/admin/slider/{{$slider->id}}/edit" class="btn btn-info">Edit</a>
                <a href="/admin/slider/{{$slider->id}}/delet" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         @empty
         <tr>
             <td colspan="3">No Data Found</td>
         </tr>
         @endforelse 
      </tbody>
  </table>  

@endisset


@isset($abouts)

<table class="table table-hover">
      <thead>
          <tr>
              <th>S.No</th>
              <th>Title</th>
              <th>Body</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @forelse($abouts as $about)
          <tr>
              <td>{{$about->id}}</td>
              <td>{{$about->title}}</td>
              <td>{{str_split($about->body,70)[0].' .......'}}</td>
              <td>
                <a href="/admin/about/{{$about->id}}/edit" class="btn btn-info">Edit</a>
                <a href="/admin/about/{{$about->id}}/delet" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         @empty
         <tr>
             <td colspan="3">No Data Found</td>
         </tr>
         @endforelse 
      </tbody>
  </table>  

@endisset


@isset($contact_details)

<table class="table table-hover">
      <thead>
          <tr>
              <th>S.No</th>
              <th>Name</th>
              <th>Designation</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @forelse($contact_details as $contact_detail)
          <tr>
              <td>{{$contact_detail->id}}</td>
              <td>{{$contact_detail->name}}</td>
              <td>{{$contact_detail->designation}}</td>
              <td>
                <a href="/admin/contact_detail/{{$contact_detail->id}}/edit" class="btn btn-info">Edit</a>
                <a href="/admin/contact_detail/{{$contact_detail->id}}/delet" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         @empty
         <tr>
             <td colspan="3">No Data Found</td>
         </tr>
         @endforelse 
      </tbody>
  </table>  

@endisset


@isset($vendors)

<table class="table table-hover">
      <thead>
          <tr>
              <th>S.No</th>
              <th>Title</th>
              <th>Image</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @forelse($vendors as $vendor)
          <tr>
              <td>{{$vendor->id}}</td>
              <td>{{$vendor->title}}</td>
              <td>{{$vendor->image_url}}</td>
              <td>
                <a href="/admin/vendor/{{$vendor->id}}/edit" class="btn btn-info">Edit</a>
                <a href="/admin/vendor/{{$vendor->id}}/delet" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         @empty
         <tr>
             <td colspan="3">No Data Found</td>
         </tr>
         @endforelse 
      </tbody>
  </table>  

@endisset


@isset($reps)

<table class="table table-hover">
      <thead>
          <tr>
              <th>S.No</th>
              <th>Name</th>
              <th>Designation</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @forelse($reps as $rep)
          <tr>
              <td>{{$rep->id}}</td>
              <td>{{$rep->name}}</td>
              <td>{{$rep->designation}}</td>
              <td>
                <a href="/admin/rep/{{$rep->id}}/edit" class="btn btn-info">Edit</a>
                <a href="/admin/rep/{{$rep->id}}/delet" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         @empty
         <tr>
             <td colspan="3">No Data Found</td>
         </tr>
         @endforelse 
      </tbody>
  </table>  

@endisset


                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
