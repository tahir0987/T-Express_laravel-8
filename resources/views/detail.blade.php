@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products['gallery']}}">
            <a href="/">Go back</a>
        </div>
        <div class="col-sm-6">
            <h3>Name : {{$products['name']}}</h3>
            <h4>Price : {{$products['price']}}</h4>
            <h4>Category : {{$products['category']}}</h4>
            <h4>Description : {{$products['description']}}</h4>
        </div>
        <button class="btn btn-success">Add to cart</button>
        <button class="btn btn-primary">Buy Now</button>
    </div>
</div>
@endsection
