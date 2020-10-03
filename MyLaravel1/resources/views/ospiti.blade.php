@extends('layouts.main-layout')
@section('content')
  <h1>OSPITI</h1>
  <div class="ul-container">
    <ul>
      @foreach ($ospiti as $ospite)
        <li>&#8226; {{$ospite -> name}} {{$ospite -> lastname}}</li>
      @endforeach
    </ul>
  </div>
  <div class="links">
    <a href="{{route('paganti-index')}}">Go to Paganti</a>
  </div>
@endsection
