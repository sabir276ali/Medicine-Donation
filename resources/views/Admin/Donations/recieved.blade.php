@extends('layouts.admin')
@section('content')
<div class="container-fluid">
        <!-- DataTales Example -->
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
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Recent Request</h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Medicine</th>
                            <th>Address</th>
                            <th>Date Time</th>
                            <th>Rider Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donation as $dn)
                        <tr>
                            <td>{{$dn->project}}</td>
                            <td>{{$dn->name}}</td>
                            <td>{{$dn->email}}</td>
                            <td>{{$dn->medicine}}</td>
                            <td>{{$dn->address}}</td>
                            <td>{{$dn->date_time}}</td>
                            <td>
                              <form action="{{route('donations.hub')}}" method="post">
                                @csrf 
                                <input type="text" name="email" style="display:none;" value="{{$dn->email}}"> 
                                <input type="text" name="d_id"  style="display:none;" value="{{$dn->id}}"> 
                             
                                <select name="c_id" class="form-control">
                                    @foreach($center as $ct)
                                    <option value="{{$ct->id}}">{{$ct->Branch}}</option>
                                    @endforeach
                                </select>

                                <button class="btn btn-success form-control" type="submit" >Confirm</button>
                              </form>  
                                
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
       </div>
    </div>
</div>
@endsection