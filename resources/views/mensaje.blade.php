@extends('layout')
@section('content') 

  <div class="container box text-center">
   <h1> {{ $data['name'] }} </h1>
   <h3 align="center">{{ $data['message'] }}</h3>
  </div>
@endsection 