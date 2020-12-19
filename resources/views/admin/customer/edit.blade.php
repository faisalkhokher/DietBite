@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Customer</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Customer</li>
        </ol>
    </nav>
</div>

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
                <h6 class="card-title">Customer Form</h6>
                <form class="forms-sample" method="POST" action="{{ route('customers.update',$customer->id) }}" id="customer-form"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="text" class="form-control"   placeholder="Id" name="id" value="{{$customer->id + 1}}" readonly >
                    </div>
                       
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="number" class="form-control"   placeholder="Diet Bite ID" name="diet_id" value="{{$customer->diet_id}}">
                    </div>   

                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="text" class="form-control"   placeholder="First Name" name="first_name"  value="{{ $customer->first_name }}">
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="text" class="form-control"   placeholder="Last Name" name="last_name"    value="{{ $customer->last_name }}">
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="email" class="form-control"   placeholder="Email" name="email"  value="{{ $customer->email }}">
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <div class="input-group-prepend">
                            <span class="input-group-text">+971</span>
                            <input type="phone" class="form-control"   placeholder="55389754" name="phone"  value="{{ $customer->phone }}">
                          </div>
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <textarea class="form-control"   placeholder="Address" name="address">{{ $customer->address}}</textarea>
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <input type="text" class="form-control"   placeholder="Location" name="location"  value="{{ $customer->location}}">
                    </div>
                    <div class="form-group">
                        {{-- <label for="customer_name">Customer Name</label> --}}
                        <textarea  class="form-control" placeholder="Notes" name="notes"  >{{ $customer->notes}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{route('customers.index')}}" class="btn btn-light">Cancel</a>
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
@endsection