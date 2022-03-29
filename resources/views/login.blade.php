@extends('master')
@section('title')
    Login
@endsection
@section('main-content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card border-0">
                        <div class="card-header">
                            <h3 class="text-center text-uppercase text-success">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" id="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="password" class="form-label">Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success btn" name="logBtn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
