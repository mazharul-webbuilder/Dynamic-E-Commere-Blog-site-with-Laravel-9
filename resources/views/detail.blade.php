@extends('master')
@section('title')
    Product Detail
@endsection
@section('main-content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset('/image/'. $product['image']) }}" alt="" class="card-img-top">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $product['name'] }}</h2>
                            <p>{{ $product['description'] }}</p>
                            <hr>
                            <h6>{{ $product['price'] }}</h6>
                            <hr>
                            <a href="" class="btn btn-success form-control">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
