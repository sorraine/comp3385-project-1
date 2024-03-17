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
                
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0  0 0 6"/> 
                        </svg>
                <strong>{{ $property->location }}</strong> <br>
               
                                                        
            </p>

            <p class="badge rounded-pill bg-primary">
            <strong>{{ $property->price }}</strong> <br>
            </p>


        </div>
    <a class="text-decoration-none text-white" href="/properties/{{$property->id}}">
        

        <div class="text-center card-footer bg-info"> 
    view property

        </div>
    </a>

    </div>
    </div>
    @endforeach

</div>

   
@endsection