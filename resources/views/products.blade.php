@extends('master')
@section('title')
    Products
@endsection
@section('main-content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                @foreach($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('/image/'.$product['image']) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">{{ $product['name'] }}</h3>
                            <h5>{{ $product['price'] }}</h5>
                            <hr>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <hr>
                            <a href="{{ route('product-detail',['id' => $product['id']]) }}" class="btn btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

