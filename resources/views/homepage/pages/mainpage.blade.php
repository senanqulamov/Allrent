@extends('homepage.assets.body')

@section('page')
    <div class="page">
        <x-search search="search title" />

        <div class="page-content">
            <div class="page-section">
                <div class="page-title">
                    <p>Populyar ərazilər</p>
                </div>
                <div class="page-section-content">
                    <div id="splide" class="splide" role="group" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="slider-div-w-image">
                                        <img src="{{ asset('/') }}homepage/images/homepage/slider_page.png"
                                            alt="">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-image">
                                        <img src="{{ asset('/') }}homepage/images/homepage/slider_page.png"
                                            alt="">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-image">
                                        <img src="{{ asset('/') }}homepage/images/homepage/slider_page.png"
                                            alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <div class="page-title">
                    <p>Kateqoriyalar</p>
                </div>
                <div class="page-section-content">
                    <div id="splide-svg" class="splide" role="group" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_1.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>Villa</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_2.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>Lüks villa</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_3.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>Hovuzlu villa</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_1.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>Hotel</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_1.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>A-frame</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_1.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>Konteyner</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_1.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>Şənlik üçün ev</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_1.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>Kooperativ</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_1.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>Kənd evi</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="slider-div-w-svg-holder">
                                        <div class="slider-div-w-svg">
                                            <img src="{{ asset('/') }}homepage/images/svg/slider/slider_svg_1.svg"
                                                alt="">
                                        </div>
                                        <div class="slider-title-w-svg">
                                            <p>Bina evi</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <div class="page-title">
                    <p>Bütün evlər</p>
                    <a class="green-udline-hover" href="#">Hamısına bax</a>
                </div>
                <div class="page-section-content">
                    <div class="page-section-cards-holder">
                        @foreach ($homes as $home)
                            <x-card card="card title" :uuid="$home->uniq_id" />
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="page-section">
                <div class="page-title">
                    <p>Yaxınlıqda olan evlər</p>
                    <a class="green-udline-hover" href="#">Hamısına bax</a>
                </div>
                <div class="page-section-content">
                    <div class="page-section-cards-holder">
                        @foreach ($homes as $home)
                            <x-card card="card title" :uuid="$home->uniq_id" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/') }}homepage/js/userpanel/sliders.js"></script>
@endsection
