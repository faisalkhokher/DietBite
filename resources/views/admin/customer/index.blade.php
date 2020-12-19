@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="role">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Customer</li>
        </ol>
    </nav>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a href="{{ route('customers.create') }}" class="btn btn-primary btn-icon-text">
            <i class="btn-icon-prepend" data-feather="plus"></i>
            Create Customer
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        @if(session()->get('success'))
        <div class="alert alert-fill-success mb-3">
            {{ session()->get('success') }}
        </div><br />
        @endif
    </div>
    <div class="col-md-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Customer</h6>
                <p class="card-description">All the customers are listed here.</p>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                            
                                <th>
                                    First Name
                                </th>
                                <th>
                                    Last Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Phone
                                </th>
                                
                                <th>
                                  Location
                                </th>
                                
                                <th>
                                    Address
                                </th>
                                
                                <th>
                                    Notes
                                </th>

                                    <th>
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $key => $customer)
                            <tr>
                                <td>
                                    {{ ++$key }}
                                </td>
                                <td>
                                    {{ $customer->first_name }} 
                                </td>
                                <td>
                                    {{ $customer->last_name }}
                                </td>
                                <td>
                                    {{ $customer->email }}
                                </td>
                                <td>
                                    {{ $customer->phone }}
                                </td>
                                <td>
                                    {{ $customer->location }}
                                </td>
                                <td>
                                    {{ $customer->address }}
                                </td>
                                <td>
                                    {{ $customer->notes }}
                                </td>
                              

                                <td>
                                    <form class="d-inline-block" action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                        </button>
                                    </form>
                                    <a href="{{ route('customers.edit',$customer->id) }}" class="btn btn-warning btn-icon-text">
                                        <i class="btn-icon-prepend" data-feather="edit"></i> Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection