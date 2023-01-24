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

    @foreach($rider as $rd)
    <div class="card" style="width: 12rem;">
      <img class="card-img-top" src="Riders\{{$rd->image}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"> <b>Name:</b> <br>
              {{$rd->name}}
            </h5>
            <h5 class="card-title"><b>Phone:</b><br>
              {{$rd->phone}}
            </h5>
            <h5 class="card-title"><b>veh:</b><br>
              {{$rd->vehicle}}
            </h5>
        </div>
    </div>
    @endforeach

</div>
@endsection