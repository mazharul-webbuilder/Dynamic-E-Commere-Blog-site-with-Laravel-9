@extends('master')
@section('title')
    Full Blog
@endsection
@section('main-content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="card">
                                <img src="{{ asset('/image/'.$blog['image']) }}" alt="" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card border-0">
                                <h3 class="card-header" style="margin-top: 100px;">{{ $blog['title'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body border-0">
                        <p class="card-text" style="text-align:justify;">
                            {{$blog['full-des']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
