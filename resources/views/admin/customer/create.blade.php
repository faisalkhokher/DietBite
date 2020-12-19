@extends('layouts.admin')

@section('content')

{{-- <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Customer</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Customer</li>
        </ol>
    </nav>
</div> --}}

<div class="row">
    <div class="col-md-12">
        @foreach ($errors->all() as $error)
        <div class="alert alert-fill-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Create Customer</h6>

            {{-- @if($errors->any())
            <div class="alert alert-danger">
                <p><strong>Opps Something went wrong</strong></p>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif --}}
                <form class="forms-sample" id="customer-form" method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                    @csrf
                  @if ($customer == null)
                <div class="form-group">
                    {{-- <label for="customer_name">Customer Name</label> --}}
                    <input type="text" class="form-control"   placeholder="Id" name="id" value="1" readonly >
                </div>   
                @else
                <div class="form-group">
                    {{-- <label for="customer_name">Customer Name</label> --}}
                    <input type="text" class="form-control"   placeholder="Id" name="id" value="{{$customer->id +1}}" readonly >
                </div>   
                  @endif
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="number" class="form-control"   placeholder="Diet Bite ID" name="diet_id">
                    </div>   
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="text" class="form-control"   placeholder="First Name" name="first_name" >
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="text" class="form-control"   placeholder="Last Name" name="last_name" >
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="email" class="form-control"   placeholder="Email" name="email" >
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <div class="input-group-prepend">
                            <span class="input-group-text">+971</span>
                            <input type="phone" class="form-control" placeholder="55389754" name="phone" >
                          </div>
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <textarea class="form-control"   placeholder="Address" name="address" ></textarea>
                    </div>
                
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <textarea  class="form-control" placeholder="Notes" name="notes" ></textarea>
                    </div>

                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <div class="submit-field">
                            <label for="location">Location</label>
                           <div id="googleMap" style="width:1000px;height:400px;"></div><br>
                           <div class="form-group">
                             <input type="text" name="la" class="form-control" id="la" readonly>
                           </div>
                           <div class="form-group">
                             <input type="text" name="lo" class="form-control" id="lo" readonly>
                           </div>
                         </div>
                    </div>

                    <button type="button" class="btn btn-primary mr-2">Submit</button>
                    {{-- <a href="{{route('customers.index')}}" class="btn btn-light">Cancel</a> --}}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

{!! JsValidator::formRequest('App\Http\Requests\CustomerRequest', '#customer-form'); !!}




<script
src="http://maps.googleapis.com/maps/api/js">
</script>
<script>
function initialize() {
    var latitude = 31.485332552943312;
    var longitude = 74.32577133178711;
    var zoom = 11;

    var LatLng = new google.maps.LatLng(latitude, longitude);

  var mapProp = {
    center: LatLng,
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  var marker = new google.maps.Marker({
      position: LatLng,
      map: map,
      draggable: true
    });
  google.maps.event.addListener(marker, 'dragend', function(event) {

      document.getElementById('la').value = event.latLng.lat();
      document.getElementById('lo').value = event.latLng.lng();
});
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection