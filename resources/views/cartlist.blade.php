@extends('main')
@section('content')
<div class="col-sm-9">
    <div class="trend-wrapper">
        <h2>Cart List</h2>
            <a href="order" class="btn btn-warning">Order now</a>
            @foreach ($products as $item)
                <div class="row cart_list_divider">
                    <div class='col-sm-3'>
                        <a href="detail/{{$item->id}}">
                        <img style="height:100px;" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <h3>{{$item->name}}</h3>
                        <h3>Rs {{$item->price}}</h3>
                        <h5>{{$item->description}}</h5>
                    </div>
                    <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove from cart</a>
                    </div>
                </div>
            @endforeach
            <a href="order" class="btn btn-warning">Order now</a>

    </div>      
</div>

@endsection
