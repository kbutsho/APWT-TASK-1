@extends('layouts.custom')
@section('content')
<div class="container text-center">
    <h1>This is Service page</h1>
    <div>
    <a href="{{route ('service/products')}}"  class="btn btn-danger">See Products</a>
    </div>
</div>
@endsection