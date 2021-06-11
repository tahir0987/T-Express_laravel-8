@extends('main')
@section('content')

    <div class="trend-wrapper">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            @foreach ($products as $item)
                <div class="">
                    <a href="detail/{{$item['id']}}">
                        <img style="height:100px;" src="{{$item['gallery']}}">
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                            <h5>{{$item['description']}}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
            
    </div>

@endsection
