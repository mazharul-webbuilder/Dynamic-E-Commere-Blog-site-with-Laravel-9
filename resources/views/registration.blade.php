@extends('master')
@section('title')
    Registration
@endsection
@section('main-content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-uppercase text-success">registration</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="name" class="form-label">Full Name*</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="name" name="full_name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="mobile" class="form-label">Phone Number*</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" id="mobile" name="mobile">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="address" class="form-label">Address</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea id="address" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="email" class="form-label">Email*</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="password" class="form-label">Password*</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9 me-auto">
                                        <input type="submit" class="btn-success btn" name="regBtn">
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
