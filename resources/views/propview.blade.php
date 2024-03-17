@extends  ('layouts.app')

 @section ('content')

 <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ url('storage/' . $property->propertyphoto) }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $property->title }}</h5> 

        
        <p class="card-text badge rounded-pill bg-primary"> {{$property->price}} </p>


        <p class="card-text badge rounded-pill bg-warning"> {{$property->type}} </p>
        <p class="card-text"> {{$property->description}} </p>

        <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bed mr-1" viewBox="0 0 16 16">
                        <path d="M2 7.5A2.5 2.5 0 0 1 4.5 5h7A2.5 2.5 0 0 1 14 7.5v5a.5.5 0 0 1-1 0V9H7v3.5a.5.5 0 0 1-1 0v-5A2.5 2.5 0 0 1 2 7.5z"/>
                        <path fill-rule="evenodd" d="M0 6.5A1.5 1.5 0 0 1 1.5 5h13A1.5 1.5 0 0 1 16 6.5v3a1.5 1.5 0 0 1-1.5 1.5H1.5A1.5 1.5 0 0 1 0 9.5v-3z"/>
                    </svg> 
                    {{$property->numBedrooms}} Bedrooms </p>
                    
                  

        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bath mr-1" viewBox="0 0 16 16">
                        <path d="M5 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-2zM3 5V3h1v2H3zm10-2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-2zM11 5V3h1v2h-1zm-8 9a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1zm13-1.5V8h-1v3.5a.5.5 0 0 1-.5.5H2.5a.5.5 0 0 1-.5-.5V8H1v4.5a1.5 1.5 0 0 0 1.5 1.5h12a1.5 1.5 0 0 0 1.5-1.5z"/>
                    </svg>
                    {{$property->numBathrooms}} Bathrooms </p>

        <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0  0 0 6"/> 
                        </svg>
                         {{$property->location}} </p>
        <button type="submit" class=" text-white btn btn-info" disabled>Email Realtor</button>
        
      </div>
    </div>
  </div>
</div>

 @endsection
