<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
     // Method for displaying the form to add a new property
     public function createForm()
     {
         return view('propertyform');
     }
 
     public function postform(Request $request): RedirectResponse{
        $validated = $request->validate([
            'title' => 'required',
            'numBedrooms' => 'required',
            'numBathrooms' => 'required',
            'location' => 'required',
            'price' => 'required',
            'type'  => 'required',
            'description' => 'required',
            'photo' => 'required | file | image | max:2048', 



        ]);

        $photo = $request ->file('photo');
        $filename = time () . '.' .  $photo->getClientOriginalExtension();
        $path = $photo->storeAs('property-photo', $filename, 'public');
    
        $property = new Property();
        $property->title = $request->input('title');
        $property->numBedrooms = $request->input('numBedrooms');
        $property->numBathrooms = $request->input('numBathrooms');
        $property->location = $request->input('location');
        $property->price = $request->input('price');
        $property->type = $request->input('type');
        $property->description = $request->input('description');
        $property->propertyphoto = $path;
        $property->save();

        return redirect("/property") -> with ('success', 'Property registered successfully');
     }

     // Method for displaying a list of all properties
     public function index()
     {
         $properties = Property::all(); 
         return view('property', ['properties' => $properties]);
     }
 
     // Method for viewing an individual property by the specific property id
     public function show($property_id)
     {
         $property = Property::findOrFail($property_id);
         return view('properties.show', compact('property'));
     }

     
}
