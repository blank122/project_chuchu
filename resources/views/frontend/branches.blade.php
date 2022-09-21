@extends('layouts.app')

@section('content')

<section>
    <div class="container d-flex flex-wrap ">
        <div class="card card-min-width mx-5">
            <img src="https://fastly.4sqi.net/img/general/600x600/MdYs4Tbu0xblC-HLsV9FjLZWZdQxPUy2LxvJyMQfNGA.jpg" 
                class="img-350" 
                alt="Cap Auditorium">
            <div class="card-body">
                <h3 class="card-title">Tagum City</h5>
                <p class="card-text">Cap Auditorium, National Highway, Tagum City - Walking distance from Citi
                    Mall of Tagum
                </p>
                <a href="https://www.google.com/maps/search/Cap+Auditorium,+National+Highway,+Tagum+City/@7.4585193,125.7963408,14z?hl=en-US" target=_blank class="btn btn-primary m-auto">View Map</a>
            </div>
        </div>
    
        <div class="card card-min-width mx-5">
            <img src="https://ph.placedigger.com/imz/208217709315733" 
            class="img-350"
            alt="Cap Auditorium">
            <div class="card-body">
                <h3 class="card-title">Davao City</h5>
                <p class="card-text">3rd Floor, Anda St. Davao City</p>
                <a href="https://www.google.com/maps/place/CAP+Auditorium/@7.0671113,125.6071141,18z/data=!4m12!1m6!3m5!1s0x32f96d78226a6877:0xb02959aeecaefc8f!2sCAP+Auditorium!8m2!3d7.0673955!4d125.6080348!3m4!1s0x32f96d78226a6877:0xb02959aeecaefc8f!8m2!3d7.0673955!4d125.6080348?hl=en-US" target=_blank class="btn btn-primary mx-auto">View Map</a>
            </div>
        </div>
        
        <div class="card card-min-width mx-2">
            <img src="data:image/jpeg;base64,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" 
            class="img-350"
            alt="Maritime School">
            <div class="card-body">
                <h3 class="card-title">Mati City</h5>
                <p class="card-text">Maritime School, Fronting Phoenix Gasoline Station</p>
                <a href="https://www.google.com/maps/place/Maritime+Technical+School+of+Davao+Oriental+(MTSDO),+Mati,+Davao+Oriental,+Philippines/@6.9440638,126.2419224,17z/data=!3m1!4b1!4m5!3m4!1s0x32fbc9ec8a00f161:0x543af295402d7076!8m2!3d6.9441049!4d126.2441852?hl=en-US"  target=_blank class="btn btn-primary m-auto">View Map</a>
            </div>
        </div>
    </section>
    
    <footer class="text-center  text-muted">
        <div class="d-lg-block">
          <span>Get connected with us on facebook:</span>
        </div>
        <div>
          <a href="https://www.facebook.com/profile.php?id=100057347173925" target=_blank class="me-4 text-reset"><i class="fab fa-facebook-f"></i></a>
        </div>
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);"> © 2022 Copyright:
        <a class="text-reset fw-bold" href={{ url('/HomePage') }}>WrestleMind Review Center</a>
      </div>
    </footer>

@endsection