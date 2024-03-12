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
         return view('properties.create');
     }
 
     public function postform(Request $request): RedirectResponse{
        $validated = $request->validate([
            'name' => 'required'
        ]);

        return redirect("/properties");
     }

     // Method for displaying a list of all properties
     public function index()
     {
         $properties = Property::all();
         return view('properties.index', compact('properties'));
     }
 
     // Method for viewing an individual property by the specific property id
     public function show($property_id)
     {
         $property = Property::findOrFail($property_id);
         return view('properties.show', compact('property'));
     }

     
}
