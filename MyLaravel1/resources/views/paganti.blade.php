@extends('layouts.main-layout')
@section('content')
  <h1>PAGANTI</h1>
  <div class="ul-container">
    <ul>
      @foreach ($paganti as $pagante)
        <li>&#8226; {{$pagante -> name}} {{$pagante -> lastname}}</li>
      @endforeach
    </ul>
  </div>
  <div class="links">
    <a href="{{route('ospiti-index')}}">Go to Ospiti</a>
  </div>
@endsection
