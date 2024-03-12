@extends('layouts.app')

<form action="" enctype="multipart/form-data" method="post"></form>
@section('content')
    @csrf
    <input type="hidden" name="_token" value="{{  csrf_token() }}">
    
@endsection