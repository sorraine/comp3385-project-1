@extends('layouts.app')


@section('content')

<form action="/properties" enctype="multipart/form-data" method="post">            
    @csrf
    <input type="hidden" name="_token" value="{{  csrf_token() }}">
    <div class="mb-3">
        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
    </div>
    <div class="mb-3">
        <label for="numBedrooms" class="form-label">Number of Bedrooms <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="numBedrooms" id="numBedrooms" value="{{ old('numBedrooms') }}">
    </div>
    <div class="mb-3">
        <label for="numBathrooms" class="form-label">Number of Bathrooms <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="numBathrooms" id="numBathrooms" value="{{ old('numBathrooms') }}">
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="location" id="location" value="{{ old('location') }}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
        <select class="form-select" name="type" id="type">
            <option value="house">House</option>
            <option value="apartment">Apartment</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="4">{{ old('description') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Photo <span class="text-danger">*</span></label>
        <input type="file" name="photo" id="photo" class="form-control">
        <p class="form-text text-body-secondary">Only image files (e.g. jpg, png) are allowed and files must be less than 2MB</p>
    </div>

    <div>
        <button type="submit" class="btn btn-primary"> Create </button>
    </div>
</form>

@endsection