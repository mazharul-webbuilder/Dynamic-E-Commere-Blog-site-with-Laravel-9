@extends('master')
@section('title')
    Home Page
@endsection

@section('main-content')
    <div class="carousel" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/image/banner1.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/image/banner2.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/image/banner3.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
@section('home-product')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-secondary mb-5 text-uppercase">Special Eid Offer</h2>

                @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('/image/'.$product['image']) }}" alt="" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h3 class="text-secondary">{{ $product['name'] }}</h3>
                        <h5 class="text-secondary">{{ $product['price'] }}</h5>
                        <hr>
                        <p class="text-secondary">{{$product['description']}}</p>
                        <hr>
                        <a href="{{ route('product-detail',['id' => $product['id']]) }}" class="btn btn-outline-success">Detail</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

