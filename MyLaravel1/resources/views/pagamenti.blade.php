@extends('layouts.main-layout')
@section('content')
  <h2>PAGAMENTI</h2>
  <div class="ul-container">
    <ul>
      @foreach ($pagamenti as $pagamento)
        <li>
          &#8226;
          <a href="{{route('pagamenti-show', $pagamento -> id)}}">
            {{$pagamento -> price}}€
            {{$pagamento -> status}}
          </a>
          <br>
          <a href="{{route('pagamenti-edit', $pagamento -> id)}}">Edit</a>
          <a href="{{route('pagamenti-destroy', $pagamento -> id)}}">X</a>
        </li>
        <br>
      @endforeach
    </ul>
  </div>
@endsection
