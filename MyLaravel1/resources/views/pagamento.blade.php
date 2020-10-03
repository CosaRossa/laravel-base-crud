@extends('layouts.main-layout')
@section('content')
  <h2>PAGAMENTO</h2>
  <div class="ul-container">
    <ul>
      <li>
        &#8226; Price:
          {{$pagamento -> price}}€
      </li>
      <li>
        &#8226; Status:
          {{$pagamento -> status}}
      </li>
      <li>
        &#8226; Updated at:
          {{$pagamento -> updated_at}}
      </li>
    </ul>
  </div>
@endsection
