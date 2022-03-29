@extends('master')
@section('title')
    Blogs
@endsection
@section('main-content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                @foreach($blogs as $blog)
                <div class="col-md-6 mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('/image/'.$blog['image'])}}" alt="" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $blog['title'] }}</h4>
                                </div>
                                <div class="card-body">
                                    <p>{{ $blog['short-des'] }}</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <a href="{{ route('blog-details',['id' => $blog['id']]) }}" class="btn btn-outline-success">Read Full</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
