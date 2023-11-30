@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark border-light" style="top: 20%;">
                <div class="card-header text-light border-bottom">
                    <h3>Overview</h3>
                </div>

                <div class="card-body text-light">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active gradient-overlay">
                            <img src="{{ asset('pictures/1stslide.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block" style="z-index: 10;">
                                <h5>Form Page</h5>
                                <p>The page to register your citizen data</p>
                            </div>
                            </div>
                            <div class="carousel-item gradient-overlay">
                            <img src="{{ asset('pictures/2ndslide.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block" style="z-index: 10;">
                                <h5>Database Page</h5>
                                <p>The page to view the datas</p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
                    <div class="mt-3">
                        <div class="container mt-5">
                            <h4 > Data Example </h4>
                            <div class="row">
                                @foreach($examples as $example)
                                    <div class="col-md-6">
                                        <div class="card mb-3 bg-dark border-light text-light" style="height: 15rem;">
                                            <div class="card-body">
                                                <h5 class="card-text">Name: {{ $example->name }}</h5>
                                                <p class="card-text">Nik: {{ $example->nik }}</p>
                                                <p class="card-text">Phone Number: {{ $example->phonenumber }}</p>
                                                <p class="card-text">Address: {{ $example->address }}</p>
                                                <p class="card-text">Age: {{ $example->age }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
