@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/homepage.css') }}">
@endpush

@section('content')
    <div class="wrapper">
        <section class="hero-section">
            <div class="container main-container">
                <div class="row">
                    <div class="col-12">
                        <div class="logo">
                            <svg width="225" height="48"><use xlink:href="#logo"></use></svg>
                        </div>
                        <h1 class="main-heading desktop">Golden week sale <span>Golde deals for a limit time</span></h1>
                        <h1 class="main-heading mobile">Golden week <span>Free android sex games</span></h1>
                        <div class="button-container d-flex justify-content-center">
                            <a href="#"class="main-btn open-popup">Play for free <span>limited time offerr</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="main-content">
            <section class="cards-section">
                <div class="container main-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cards-wrapper">
                                <div class="card-content order2">
                                    <div class="heading">Play free now!</div>
                                    <div class="inner">
                                        <picture class="image">
                                            <source media="(min-width:768px)" srcset="{{asset('img/card1.jpg')}}">
                                            <img src="{{asset('img/card1-mobile.jpg')}}" alt="card1">
                                        </picture>
                                        <div class="name">Crystal maidens <span>Thtilling Real-time action</span></div>
                                    </div>
                                </div>
                                <div class="card-content order1">
                                    <div class="heading">Play free now!</div>
                                    <div class="inner">
                                        <picture class="image">
                                            <source media="(min-width:768px)" srcset="{{asset('img/card2.jpg')}}">
                                            <img src="{{asset('img/card2-mobile.jpg')}}" alt="card2">
                                        </picture>
                                        <div class="name">Kamihime project <span>Elaborate turn-based strategy</span></div>
                                    </div>
                                </div>
                                <div class="card-content order4 ">
                                    <div class="heading">Play free now!</div>
                                    <div class="inner">
                                        <picture class="image">
                                            <source media="(min-width:768px)" srcset="{{asset('img/card3.jpg')}}">
                                            <img src="{{asset('img/card3-mobile.jpg')}}" alt="card3">
                                        </picture>
                                        <div class="name">Attack on moe h <span>one handed action game</span></div>
                                    </div>
                                </div>
                                <div class="card-content order3">
                                    <div class="heading">Play free now!</div>
                                    <div class="inner">
                                        <picture class="image">
                                            <source media="(min-width:768px)" srcset="{{asset('img/card4.jpg')}}">
                                            <img src="{{asset('img/card4-mobile.jpg')}}" alt="card4">
                                        </picture>
                                        <div class="name">Pocket Waifu <span>Sexy dating sim</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-container">
                                <a class="main-btn w-full" href="#">More free games</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about">
                <div class="container second-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="advantages">
                                <div class="advantage">
                                    <div class="circle">
                                        <svg width="44" height="46"><use xlink:href="#gift"></use></svg>
                                    </div>
                                    <p>limited time use free bonuses</p>
                                </div>
                                <div class="advantage">
                                    <div class="circle">
                                        <svg width="68" height="30"><use xlink:href="#18+"></use></svg>
                                    </div>
                                    <p>completely uncensored</p>
                                </div>
                                <div class="advantage">
                                    <div class="circle">
                                        <svg width="50" height="48"><use xlink:href="#no-card"></use></svg>
                                    </div>
                                    <p>free sign up no credit card</p>
                                </div>
                                <div class="advantage">
                                    <div class="circle">
                                        <svg width="53" height="47" ><use xlink:href="#desktop"></use></svg>
                                    </div>
                                    <p>free browser games</p>
                                </div>
                                <div class="advantage">
                                    <div class="circle">
                                        <svg width="37" height="44"><use xlink:href="#download"></use></svg>
                                    </div>
                                    <p>free computer games</p>
                                </div>
                                <div class="advantage">
                                    <div class="circle">
                                        <svg width="28" height="44"><use xlink:href="#phone"></use></svg>
                                    </div>
                                    <p>free mobile games</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('layouts.includes.popup')

@endsection

@push('scripts')
    <script src="{{ asset('js/pages/homepage.js') }}"></script>
@endpush
