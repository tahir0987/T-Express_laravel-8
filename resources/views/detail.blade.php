@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products['gallery']}}">
            <a href="/">Go back</a>
        </div>
        <div class="col-sm-6">
            <h4><span style="margin-right:50px;">Name</span>: {{$products['name']}}</h4>
            <h4><span style="margin-right:58px;">Price</span>: Rs {{$products['price']}}</h4>
            <h4><span style="margin-right:26px;">Category</span>: {{$products['category']}}</h4>
            <h4><span style="margin-right:10px;">Description</span>: {{$products['description']}}</h4>
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$products['id']}}">
                @csrf
                <button class="btn btn-success">Add to cart</button>
            </form><br>
            <button class="btn btn-primary">Buy Now</button>
        </div>
        
    </div>
</div><br>
@endsection
