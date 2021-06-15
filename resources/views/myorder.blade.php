@extends('main')
@section('content')
<div class="col-sm-9">
    <div class="trend-wrapper">
        <h2>Order List</h2>
            
            @foreach ($orders as $item)
                <div class="row cart_list_divider">
                    <div class='col-sm-3'>
                        <a href="detail/{{$item->id}}">
                        <img style="height:100px;" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <h3>{{$item->name}}</h3>
                        <h5>Delivery status : {{$item->status}}</h5>
                        <h5>Payment status : {{$item->payment_status}}</h5>
                        <h5>Payment method : {{$item->payment_method}}</h5>
                        <h5>Delivery Address : {{$item->address}}</h5>

                    </div>
                    <div class="col-sm-3">
                    
                    </div>
                </div>
            @endforeach
            

    </div>      
</div>

@endsection
