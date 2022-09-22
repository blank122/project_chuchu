@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="container-fluid bg-gray shadow p-3 m-3 bg-body rounded">
        <div class="text-center">
            <div class="fs-1 my-2 text">WRESTLEMIND REVIEW CENTER</div>
            <h1 class="fs-3 my-2 text">OUR PROGRAM</h1>
            <div class="line"></div>
            <div>
                <h2 class="text my-5">Review in Criminology</h2>
            </div>
        </div>
        <div>
            <img class="front-page " src="{{ asset('images/frontpage1.webp') }}" alt="">
        </div>
        <p class="content-body mt-5">The main audience for Criminology Board Examination Reviewer
            is individuals who plan to take the criminologists'
            licensing exam, as well as those who are interested
            in solving crimes and the study of criminology.</p>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide mt-5 shadow p-3 m-3 bg-body rounded" data-bs-ride="carousel">
        <h3 class="text-center">Topnotchers</h3>
        <div class="carousel-inner carousel-dark">
            @foreach ($sliders as $key => $item)
                <div class="carousel-item active">
                    <img src="{{ asset('uploads/slider/' . $item->image) }}" class="d-block img-fluid" alt="images">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon text-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon text-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
