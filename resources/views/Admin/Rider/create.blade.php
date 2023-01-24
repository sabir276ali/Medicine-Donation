@extends('layouts.admin')
@section('content')
<div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
            @endif 
            @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
            @endif
    <form action="{{ route('rider.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="image">
                </div>
                <div class="form-group col-md-4">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                </div>
            </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone">
                    </div>
            
                <div class="form-group col-md-12">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                </div> 
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="vehicle">Vehicle</label>
                    <input type="text" class="form-control" id="vehicle" name="vehicle">
                </div>
                <div class="form-group col-md-6">
                    <label for="vehicle_no">Vehicle Number</label>
                    <input type="text" class="form-control" id="vehicle_no" name="vehicle_no">
                    </div>
            </div>
            <button type="submit" class="btn btn-primary col-3">Create</button>
        </form>
</div>
@endsection