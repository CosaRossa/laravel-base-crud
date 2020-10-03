@extends('layouts.main-layout')
@section('content')
  <h2>PAGAMENTO</h2>
  <form action="{{route('pagamenti-update', $pagamento -> id)}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="status">Status</label> <br>
      <input type="text" name="status" value="{{$pagamento -> status}}">
    </div>
    <div class="form-group">
      <label for="price">Price</label> <br>
      <input type="number" name="price" max="1264" value="{{$pagamento -> price}}">
    </div>
    <br>
    <button type="submit" name="button">UPDATE</button>
  </form>
@endsection
