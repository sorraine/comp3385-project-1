@extends('layouts.app')

@section('content')
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>

 

    

    <p class="lead">Welcome to your dashboard. Here you can manage your account, your properties and much more.</p>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif


    <div class="row row-cols-1 row-cols-md-3 g-4">
    
    @foreach ($properties as $property)
    <div class="col">
    <div class="card text-center">
        <img src="{{ url('storage/' . $property->propertyphoto) }}" alt="" class="card-img-top">
        <div class="card-body">
            <h4 class-title>{{ $property->title }}</h4>
            <p class="card-text">
                <strong>{{ $property->location }}</strong> <br>
                <strong>{{ $property->price }}</strong> <br>
                <strong>{{ $property->numBedrooms }}</strong>
            </p>
        </div>
    </div>
    </div>
    @endforeach

</div>

   
@endsection