@extends('layouts.custom')
@section('content')
<div class="container">
    <h1 class="text-center">This is Products page</h1>
    @foreach($products as $product)
    <h6 class="text-center">{{$product}}</h6>  
    @endforeach
</div>
@endsection