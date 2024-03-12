<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
     // Method for displaying the form to add a new property
     public function createForm()
     {
         return view('properties.create');
     }
 
     // Method for displaying a list of all properties
     public function index()
     {
         $properties = Property::all();
         return view('properties.index', compact('properties'));
     }
 
     
}
