@extends('layouts.master')

@section('content')
    <div class="row">
        @foreach($units as $unit)
            <div class="col-3 border mt-5">
                <h3 class="text-primary">Name: {{$unit->name}}</h3>
                <h4 class="text-success">Price: ${{$unit->price}}</h4>
                <h5 class="text-info">{{$unit->special_price_qty ? $unit->special_price_qty . ' for ' . $unit->special_price : ''}}</h5>
                <a href="{{url('/add-to-cart/' . $unit->id)}}" class="success">Add to Cart</a>
            </div>
        @endforeach
    </div>
@endsection

