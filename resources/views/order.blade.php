@extends('main')
@section('content')
<h2>Order and Payment</h2>
<div class="col-sm-6">
    <table class="table table-hover">
        <tbody>
            <tr>
                <th>Price</th>
                <td>{{$total}}</td>
            </tr>
            <tr>
                <th>Tax</th>
                <td>Rs 0</td>
            </tr>
            <tr>
                <th>Delivery</th>
                <td>Rs 100</td>
            </tr>
            <tr>
                <th>Total amount</th>
                <td>{{$total+100}}</td>
            </tr>
        </tbody>
    </table>

    <form action="orderplace" method="POST">
        @csrf
        <div class="form-group">
            <textarea name="address" class="form-control" placeholder="Address"></textarea>
        </div>
        <div class="form-group">
            <label for="">Payment Method</label>
            <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
            <p><input type="radio" value="cash" name="payment"> <span>Installment Payment</span></p>
            <p><input type="radio" value="cash" name="payment"> <span>Cash on Delivery</span></p>
        </div>
        <button type="submit" class="btn btn-success">Order Now</button>
    </form>
</div>

@endsection
