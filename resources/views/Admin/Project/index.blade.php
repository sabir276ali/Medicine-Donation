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
  

    <div class="container">
        <div class="row">  
            @foreach($project as $ct)
            <div class="col-2">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="Projects\{{$ct->image}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>Project:</b><br>
                            {{$ct->project}}
                            </h5>
                            <h5 class="card-title"><b>City:</b><br>
                            {{$ct->city}}
                            </h5>
                            <h5 class="card-title"><b>Address:</b><br>
                            {{$ct->address}}
                            </h5>
                        </div>
                    </div>
                </div>   
                @endforeach
        </div>
    </div>
 

</div>
@endsection