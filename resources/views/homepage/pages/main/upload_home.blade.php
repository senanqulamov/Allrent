<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>

    {{-- --------------------- External links  --------------------- --}}
    {{-- TODO Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- TODO Bootstrap --}}

    {{-- TODO Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- TODO Jquery --}}


    {{-- --------------------- External links  --------------------- --}}


    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('/') }}homepage/css/main.css">
    <link rel="stylesheet" href="{{ asset('/') }}homepage/css/assets.css">
    <link rel="stylesheet" href="{{ asset('/') }}homepage/css/hovers.css">
    <link rel="stylesheet" href="{{ asset('/') }}homepage/css/components.css">
    <link rel="stylesheet" href="{{ asset('/') }}homepage/css/responsive.css" media="screen and (max-width: 1500px)">
    <link rel="stylesheet" href="{{ asset('/') }}homepage/css/pages.css">
    {{-- Styles --}}
</head>

<body>
    <header>
        <div class="header-holder">
            <div class="header-left">
                <div class="header-left-element">
                    <img src="{{ asset('/') }}homepage/images/svg/logo.svg" alt="BrandLogo"
                        onclick="window.open('{{ route('mainpage') }}' , '_self')">
                </div>
            </div>
            <div class="header-right tagged-visibility-div visible-div">
                <div class="header-right-element">
                    <div class="header-item">
                        <div class="select-div" onclick="custom_select(this)">
                            <div class="select-opt" value="deault" d-select-selected>
                                <img src="{{ asset('/') }}homepage/images/svg/world.svg" alt="Language Svg">
                            </div>
                            <div class="select-opt" value="AZE">AZE</div>
                            <div class="select-opt" value="ENG">ENG</div>
                        </div>
                    </div>

                    @if (Auth::user())
                        <div class="header-item">
                            <div class="header-notification-button">
                                <img src="{{ asset('/') }}homepage/images/svg/notf.svg" alt="Notification Svg">
                            </div>
                        </div>
                    @endif

                    @guest
                        <div class="header-item login-button-header">
                            <a href="{{ route('show_login') }}" class="e-h-link e-h-link-pink green-udline-hover">Daxil
                                ol</a>
                        </div>
                        <div class="header-item register-button-header">
                            <a href="{{ route('show_register') }}" class="e-h-link">Hesab yarat</a>
                        </div>
                    @else
                        <div class="header-item profile-button-header">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 2C6.79086 2 5 3.79086 5 6C5 8.20914 6.79086 10 9 10C11.2091 10 13 8.20914 13 6C13 3.79086 11.2091 2 9 2ZM3 6C3 2.68629 5.68629 0 9 0C12.3137 0 15 2.68629 15 6C15 9.31371 12.3137 12 9 12C5.68629 12 3 9.31371 3 6ZM5 16C3.34315 16 2 17.3431 2 19C2 19.5523 1.55228 20 1 20C0.447715 20 0 19.5523 0 19C0 16.2386 2.23858 14 5 14H13C15.7614 14 18 16.2386 18 19C18 19.5523 17.5523 20 17 20C16.4477 20 16 19.5523 16 19C16 17.3431 14.6569 16 13 16H5Z"
                                    fill="#FEFEFE" />
                            </svg>
                        </div>
                    @endguest
                </div>
                <div class="header-right-element">
                    <div class="header-item">
                        <a class="green-udline-hover" href="{{ route('mainpage') }}">Ana səhifə</a>
                    </div>
                    <div class="header-item">
                        <a class="green-udline-hover" href="{{ route('mainpage') }}">Rezervasiyalar</a>
                    </div>
                    <div class="header-item">
                        <a class="green-udline-hover" href="{{ route('mainpage') }}">Xəritə</a>
                    </div>
                    <div class="header-item">
                        <a class="green-udline-hover" href="{{ route('mainpage') }}">Detallar</a>
                    </div>
                    <div class="header-item">
                        <a class="green-udline-hover" href="{{ route('mainpage') }}">Seçilənlər</a>
                    </div>
                    <div class="header-item">
                        <a class="green-udline-hover" href="{{ route('mainpage') }}">Profil</a>
                    </div>
                    <div class="header-item header-item-blue">
                        @if (Auth::user())
                            <a href="{{ route('upload_home_view') }}"
                                class="e-h-link e-h-link-blue green-udline-hover">Ev
                                paylaş
                            </a>
                        @else
                            <a href="#" class="e-h-link e-h-link-blue green-udline-hover"
                                onclick="OpenModal(this)" data-target="get-login-popup">Ev
                                paylaş
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="upload-home-page-holder">
        <div class="upload-home-page-holder-ent d-flex a-center tagged-visibility-div visible-div">
            <div class="upload-home-page-ent d-flex a-center">
                <div class="upload-home-page-text-holder-ent d-flex">
                    <p class="tagged-visibility-div non-visible-div custom-appear-text-upload-home">
                        Tələs, səyahət sevənlər səni gözləyir
                    </p>
                    <div class="upload-home-page-title-ent">
                        <p>Obyektinizi Allrent-də paylaşın</p>
                    </div>
                    <div class="upload-home-page-text-ent">
                        <p>
                            Mənzilini yerləşdirməyə elə indi başla. Uzun çəkməyəcək və detalları əlavə etdikcə necə
                            rahat
                            olduğunu
                            görəcəksən. Allrent sənə bir neçə rahatlıq təklif edir.
                        </p>
                    </div>
                    <div class="upload-home-page-text-list-ent">
                        <div class="upload-home-page-text-list-item-ent">
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.2203 0.377493C15.5643 0.683258 15.5953 1.20999 15.2895 1.55397L6.40063 11.554C6.24249 11.7319 6.01582 11.8337 5.77779 11.8337C5.53975 11.8337 5.31309 11.7319 5.15495 11.554L0.710501 6.55397C0.404736 6.20998 0.43572 5.68326 0.779706 5.37749C1.12369 5.07173 1.65042 5.10271 1.95618 5.4467L5.77779 9.746L14.0438 0.446698C14.3496 0.102712 14.8763 0.0717284 15.2203 0.377493Z"
                                    fill="#FE4343" />
                            </svg>
                            <p>Rahat mənzil yerləşdirmə imkanı</p>
                        </div>
                        <div class="upload-home-page-text-list-item-ent">
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.2203 0.377493C15.5643 0.683258 15.5953 1.20999 15.2895 1.55397L6.40063 11.554C6.24249 11.7319 6.01582 11.8337 5.77779 11.8337C5.53975 11.8337 5.31309 11.7319 5.15495 11.554L0.710501 6.55397C0.404736 6.20998 0.43572 5.68326 0.779706 5.37749C1.12369 5.07173 1.65042 5.10271 1.95618 5.4467L5.77779 9.746L14.0438 0.446698C14.3496 0.102712 14.8763 0.0717284 15.2203 0.377493Z"
                                    fill="#FE4343" />
                            </svg>
                            <p>Təqvimin idarəsi</p>
                        </div>
                        <div class="upload-home-page-text-list-item-ent">
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.2203 0.377493C15.5643 0.683258 15.5953 1.20999 15.2895 1.55397L6.40063 11.554C6.24249 11.7319 6.01582 11.8337 5.77779 11.8337C5.53975 11.8337 5.31309 11.7319 5.15495 11.554L0.710501 6.55397C0.404736 6.20998 0.43572 5.68326 0.779706 5.37749C1.12369 5.07173 1.65042 5.10271 1.95618 5.4467L5.77779 9.746L14.0438 0.446698C14.3496 0.102712 14.8763 0.0717284 15.2203 0.377493Z"
                                    fill="#FE4343" />
                            </svg>
                            <p>Ödənişin birbaşa hesaba köçürülməsi</p>
                        </div>
                    </div>
                </div>
                <div class="upload-home-page-image-holder-ent d-flex j-center a-center">
                    <img src="{{ asset('/') }}homepage/images/home_upload/static/banner_home_upload.jpg"
                        alt="Banner" loading="lazy">
                </div>
            </div>

            <div class="upload-home-page-holder-ent-footer upload-home-page-holder-footer">
                <button type="button" class="start-button-home-upload" onclick="startUpload()">Obyekt
                    paylaş</button>
            </div>
        </div>

        <div class="upload-home-page-holder-one tagged-visibility-div non-visible-div">
            <div class="upload-home-page-inputs-holder-one" onkeyup="CheckIputsHomeUpload(this)">
                <div class="upload-home-page-input-holder-one">
                    <div class="upload-home-page-input-title-one">
                        <p>Obyekt başlığı</p>
                    </div>
                    <div class="upload-home-page-input-elm-one input-holder"
                        data-info="Obyektin başlığı qeyd edilməyib , zəhmət olmasa məlumatı yerləşdirin">
                        <textarea class="checked-input" name="object_title" id="object_title" cols="30" rows="2"
                            placeholder="Obyekt başlığını daxil edin" required></textarea>
                    </div>
                </div>
                <div class="upload-home-page-input-holder-one">
                    <div class="upload-home-page-input-title-one">
                        <p>Obyektin ətraflı təsvirini verin</p>
                    </div>
                    <div class="upload-home-page-input-elm-one input-holder"
                        data-info="Obyektin təsviri qeyd edilməyib , zəhmət olmasa məlumatı yerləşdirin">
                        <textarea class="checked-input" name="object_description" id="object_description" cols="30" rows="5"
                            placeholder="Obyektin ətraflı təsvirini verin" required></textarea>
                    </div>
                </div>
                <div class="upload-home-page-category-holder-one">
                    <div class="upload-home-page-input-title-one">
                        <p>Uyğun kateqoriyanı seçin</p>
                    </div>
                    <input type="hidden" class="checked-input" name="category_value" value="">
                    <div class="upload-home-page-category-div-one">
                        <div class="upload-home-page-category-elm-one" data-value="Villa"
                            onclick="SelectCategory(this)"
                            data-image-src="{{ asset('/') }}homepage/images/home_upload/static/villa.svg">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/villa.svg" alt="Banner"
                                loading="lazy">
                            <p>Villa</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/villa.svg" alt="Banner"
                                class="hided-image-category-elm">
                        </div>
                        <div class="upload-home-page-category-elm-one" data-value="Lüks villa"
                            onclick="SelectCategory(this)">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/lux_villa.svg"
                                alt="Banner" loading="lazy">
                            <p>Lüks villa</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/lux_villa.svg"
                                alt="Banner">
                        </div>
                        <div class="upload-home-page-category-elm-one" data-value="Hovuzlu villa"
                            onclick="SelectCategory(this)">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/pool_villa.svg"
                                alt="Banner" loading="lazy">
                            <p>Hovuzlu villa</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/pool_villa.svg"
                                alt="Banner">
                        </div>
                        <div class="upload-home-page-category-elm-one" data-value="A-frame"
                            onclick="SelectCategory(this)">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/A-frame.svg"
                                alt="Banner" loading="lazy">
                            <p>A-frame</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/A-frame.svg"
                                alt="Banner">
                        </div>
                        <div class="upload-home-page-category-elm-one" data-value="Konteyner"
                            onclick="SelectCategory(this)">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/containeer.svg"
                                alt="Banner" loading="lazy">
                            <p>Konteyner</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/containeer.svg"
                                alt="Banner">
                        </div>
                        <div class="upload-home-page-category-elm-one" data-value="Şənlik üçün ev"
                            onclick="SelectCategory(this)">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/party_house.svg"
                                alt="Banner" loading="lazy">
                            <p>Şənlik üçün ev</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/party_house.svg"
                                alt="Banner">
                        </div>
                        <div class="upload-home-page-category-elm-one" data-value="Kənd evi"
                            onclick="SelectCategory(this)">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/village_house.svg"
                                alt="Banner" loading="lazy">
                            <p>Kənd evi</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/village_house.svg"
                                alt="Banner">
                        </div>
                        <div class="upload-home-page-category-elm-one" data-value="Bina evi"
                            onclick="SelectCategory(this)">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/city_house.svg"
                                alt="Banner" loading="lazy">
                            <p>Bina evi</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/city_house.svg"
                                alt="Banner">
                        </div>
                        <div class="upload-home-page-category-elm-one" data-value="Kooperativ"
                            onclick="SelectCategory(this)">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/cooperative_hoouse.svg"
                                alt="Banner" loading="lazy">
                            <p>Kooperativ</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/cooperative_hoouse.svg"
                                alt="Banner">
                        </div>
                        <div class="upload-home-page-category-elm-one" data-value="Hotel"
                            onclick="SelectCategory(this)">
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/hotel.svg" alt="Banner"
                                loading="lazy">
                            <p>Hotel</p>
                            <img src="{{ asset('/') }}homepage/images/home_upload/static/hotel.svg"
                                alt="Banner">
                        </div>
                    </div>
                </div>
            </div>

            <div class="upload-home-page-holder-one-footer upload-home-page-holder-footer">
                <button type="button" class="back-button-reservation"
                    onclick="ToBackPage('upload-home-page-holder-ent' , 'upload-home-page-holder-one')">Geri</button>
                <div class="input-holder" data-error-tip="Formu təsdiqləmək üçün bütün inputlar doldurulmalıdır">
                    <button type="button" class="submit-button-reservation submit-button-form"
                        onclick="SecondPage('{{ route('post_one_page_home') }}')" disabled>Davam et</button>
                </div>
            </div>
        </div>

        <div class="upload-home-page-holder-sec d-flex a-center tagged-visibility-div non-visible-div">
            <div class="upload-home-page-inputs-holder-sec">
                <div class="upload-home-page-inputs-title-sec">
                    <p>Obyekt haqqında bəzi əsas məlumatları qeyd edin</p>
                </div>
                <div class="upload-home-page-inputs-sec">

                    <div class="upload-home-page-input-sec">
                        <p>Maksimum qonaq sayı</p>
                        <div class="upload-home-page-count-input-holder-sec">
                            <div class="upload-home-page-count-min-input not-active-minus-count-sec"
                                onclick="MinusCount(this)">
                                <svg width="24" height="4" viewBox="0 0 24 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.800049 2.00059C0.800049 1.22739 1.42685 0.600586 2.20005 0.600586H21.8C22.5732 0.600586 23.2 1.22739 23.2 2.00059C23.2 2.77378 22.5732 3.40059 21.8 3.40059H2.20005C1.42685 3.40059 0.800049 2.77378 0.800049 2.00059Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                            <p class="upload-home-page-count-input counter-text-sec">
                                0
                            </p>
                            <input type="hidden" class="counter-input-sec checked-input" name="guest_count"
                                value="0">
                            <div class="upload-home-page-count-plus-input" onclick="PlusCount(this)">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 0.799805C12.7732 0.799805 13.4 1.42661 13.4 2.1998V10.5998H21.8C22.5732 10.5998 23.2 11.2266 23.2 11.9998C23.2 12.773 22.5732 13.3998 21.8 13.3998H13.4V21.7998C13.4 22.573 12.7732 23.1998 12 23.1998C11.2269 23.1998 10.6 22.573 10.6 21.7998V13.3998H2.20005C1.42685 13.3998 0.800049 12.773 0.800049 11.9998C0.800049 11.2266 1.42685 10.5998 2.20005 10.5998H10.6V2.1998C10.6 1.42661 11.2269 0.799805 12 0.799805Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="upload-home-page-input-sec">
                        <p>Bir nəfərlik çarpayı</p>
                        <div class="upload-home-page-count-input-holder-sec">
                            <div class="upload-home-page-count-min-input not-active-minus-count-sec"
                                onclick="MinusCount(this)">
                                <svg width="24" height="4" viewBox="0 0 24 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.800049 2.00059C0.800049 1.22739 1.42685 0.600586 2.20005 0.600586H21.8C22.5732 0.600586 23.2 1.22739 23.2 2.00059C23.2 2.77378 22.5732 3.40059 21.8 3.40059H2.20005C1.42685 3.40059 0.800049 2.77378 0.800049 2.00059Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                            <p class="upload-home-page-count-input counter-text-sec">
                                0
                            </p>
                            <input type="hidden" class="counter-input-sec checked-input" name="bed_count"
                                value="0">
                            <div class="upload-home-page-count-plus-input" onclick="PlusCount(this)">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 0.799805C12.7732 0.799805 13.4 1.42661 13.4 2.1998V10.5998H21.8C22.5732 10.5998 23.2 11.2266 23.2 11.9998C23.2 12.773 22.5732 13.3998 21.8 13.3998H13.4V21.7998C13.4 22.573 12.7732 23.1998 12 23.1998C11.2269 23.1998 10.6 22.573 10.6 21.7998V13.3998H2.20005C1.42685 13.3998 0.800049 12.773 0.800049 11.9998C0.800049 11.2266 1.42685 10.5998 2.20005 10.5998H10.6V2.1998C10.6 1.42661 11.2269 0.799805 12 0.799805Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="upload-home-page-input-sec">
                        <p>Yataq Otağı</p>
                        <div class="upload-home-page-count-input-holder-sec">
                            <div class="upload-home-page-count-min-input not-active-minus-count-sec"
                                onclick="MinusCount(this)">
                                <svg width="24" height="4" viewBox="0 0 24 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.800049 2.00059C0.800049 1.22739 1.42685 0.600586 2.20005 0.600586H21.8C22.5732 0.600586 23.2 1.22739 23.2 2.00059C23.2 2.77378 22.5732 3.40059 21.8 3.40059H2.20005C1.42685 3.40059 0.800049 2.77378 0.800049 2.00059Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                            <p class="upload-home-page-count-input counter-text-sec">
                                0
                            </p>
                            <input type="hidden" class="counter-input-sec checked-input" name="bedroom_count"
                                value="0">
                            <div class="upload-home-page-count-plus-input" onclick="PlusCount(this)">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 0.799805C12.7732 0.799805 13.4 1.42661 13.4 2.1998V10.5998H21.8C22.5732 10.5998 23.2 11.2266 23.2 11.9998C23.2 12.773 22.5732 13.3998 21.8 13.3998H13.4V21.7998C13.4 22.573 12.7732 23.1998 12 23.1998C11.2269 23.1998 10.6 22.573 10.6 21.7998V13.3998H2.20005C1.42685 13.3998 0.800049 12.773 0.800049 11.9998C0.800049 11.2266 1.42685 10.5998 2.20005 10.5998H10.6V2.1998C10.6 1.42661 11.2269 0.799805 12 0.799805Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="upload-home-page-input-sec">
                        <p>Əlavə yataq</p>
                        <div class="upload-home-page-count-input-holder-sec">
                            <div class="upload-home-page-count-min-input not-active-minus-count-sec"
                                onclick="MinusCount(this)">
                                <svg width="24" height="4" viewBox="0 0 24 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.800049 2.00059C0.800049 1.22739 1.42685 0.600586 2.20005 0.600586H21.8C22.5732 0.600586 23.2 1.22739 23.2 2.00059C23.2 2.77378 22.5732 3.40059 21.8 3.40059H2.20005C1.42685 3.40059 0.800049 2.77378 0.800049 2.00059Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                            <p class="upload-home-page-count-input counter-text-sec">
                                0
                            </p>
                            <input type="hidden" class="counter-input-sec checked-input"
                                name="additional_room_count" value="0">
                            <div class="upload-home-page-count-plus-input" onclick="PlusCount(this)">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 0.799805C12.7732 0.799805 13.4 1.42661 13.4 2.1998V10.5998H21.8C22.5732 10.5998 23.2 11.2266 23.2 11.9998C23.2 12.773 22.5732 13.3998 21.8 13.3998H13.4V21.7998C13.4 22.573 12.7732 23.1998 12 23.1998C11.2269 23.1998 10.6 22.573 10.6 21.7998V13.3998H2.20005C1.42685 13.3998 0.800049 12.773 0.800049 11.9998C0.800049 11.2266 1.42685 10.5998 2.20005 10.5998H10.6V2.1998C10.6 1.42661 11.2269 0.799805 12 0.799805Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="upload-home-page-input-sec">
                        <p>İki nəfərlik çarpayı</p>
                        <div class="upload-home-page-count-input-holder-sec">
                            <div class="upload-home-page-count-min-input not-active-minus-count-sec"
                                onclick="MinusCount(this)">
                                <svg width="24" height="4" viewBox="0 0 24 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.800049 2.00059C0.800049 1.22739 1.42685 0.600586 2.20005 0.600586H21.8C22.5732 0.600586 23.2 1.22739 23.2 2.00059C23.2 2.77378 22.5732 3.40059 21.8 3.40059H2.20005C1.42685 3.40059 0.800049 2.77378 0.800049 2.00059Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                            <p class="upload-home-page-count-input counter-text-sec">
                                0
                            </p>
                            <input type="hidden" class="counter-input-sec checked-input" name="double_bed_count"
                                value="0">
                            <div class="upload-home-page-count-plus-input" onclick="PlusCount(this)">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 0.799805C12.7732 0.799805 13.4 1.42661 13.4 2.1998V10.5998H21.8C22.5732 10.5998 23.2 11.2266 23.2 11.9998C23.2 12.773 22.5732 13.3998 21.8 13.3998H13.4V21.7998C13.4 22.573 12.7732 23.1998 12 23.1998C11.2269 23.1998 10.6 22.573 10.6 21.7998V13.3998H2.20005C1.42685 13.3998 0.800049 12.773 0.800049 11.9998C0.800049 11.2266 1.42685 10.5998 2.20005 10.5998H10.6V2.1998C10.6 1.42661 11.2269 0.799805 12 0.799805Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="upload-home-page-input-sec">
                        <p>Hamam otağı</p>
                        <div class="upload-home-page-count-input-holder-sec">
                            <div class="upload-home-page-count-min-input not-active-minus-count-sec"
                                onclick="MinusCount(this)">
                                <svg width="24" height="4" viewBox="0 0 24 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.800049 2.00059C0.800049 1.22739 1.42685 0.600586 2.20005 0.600586H21.8C22.5732 0.600586 23.2 1.22739 23.2 2.00059C23.2 2.77378 22.5732 3.40059 21.8 3.40059H2.20005C1.42685 3.40059 0.800049 2.77378 0.800049 2.00059Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                            <p class="upload-home-page-count-input counter-text-sec">
                                0
                            </p>
                            <input type="hidden" class="counter-input-sec checked-input" name="bathroom_count"
                                value="0">
                            <div class="upload-home-page-count-plus-input" onclick="PlusCount(this)">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 0.799805C12.7732 0.799805 13.4 1.42661 13.4 2.1998V10.5998H21.8C22.5732 10.5998 23.2 11.2266 23.2 11.9998C23.2 12.773 22.5732 13.3998 21.8 13.3998H13.4V21.7998C13.4 22.573 12.7732 23.1998 12 23.1998C11.2269 23.1998 10.6 22.573 10.6 21.7998V13.3998H2.20005C1.42685 13.3998 0.800049 12.773 0.800049 11.9998C0.800049 11.2266 1.42685 10.5998 2.20005 10.5998H10.6V2.1998C10.6 1.42661 11.2269 0.799805 12 0.799805Z"
                                        fill="#6C6C6C" />
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="upload-home-page-holder-one-footer upload-home-page-holder-footer">
                <button type="button" class="back-button-reservation"
                    onclick="ToBackPage('upload-home-page-holder-one' , 'upload-home-page-holder-sec')">Geri</button>
                <div class="input-holder">
                    <button type="button" class="submit-button-reservation submit-button-form"
                        onclick="ThirdPage('{{ route('post_second_page_home') }}')">Davam et</button>
                </div>
            </div>
        </div>

        <div class="upload-home-page-holder-third d-flex a-center tagged-visibility-div non-visible-div">

            <div class="upload-home-page-inputs-holder-third">
                <div class="upload-home-page-inputs-title-sec">
                    <p>Obyektdə olan şərait</p>
                </div>
                <div class="upload-home-page-checkboxes-third">
                    <x-home-checkboxes home-checkboxes="home-checkboxes title" />
                </div>

                <div class="upload-home-page-inputs-title-sec">
                    <p>İcazələr</p>
                </div>

                <div class="upload-home-page-checkboxes-third_n">
                    <x-permision-checkboxes permision-checkboxes="permision-checkboxes title" />
                </div>

                <div class="upload-home-page-inputs-title-sec">
                    <p>Obyektə daxil olma vaxtı üçün uyğun aralığı təyin edin</p>
                </div>

                <div class="upload-home-page-time-selects-third">
                    <select class="upload-home-custom-select dropdown" id="entrance_time_1" name="entrance_time_1" onchange="SetEntranceTime(this)">
                        <option>01:00</option>
                        <option>02:00</option>
                        <option>03:00</option>
                        <option>04:00</option>
                        <option>05:00</option>
                        <option>06:00</option>
                        <option>07:00</option>
                        <option>08:00</option>
                        <option>09:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                        <option>20:00</option>
                        <option>21:00</option>
                        <option>22:00</option>
                        <option>23:00</option>
                        <option>00:00</option>
                    </select>
                    <select class="upload-home-custom-select dropdown" id="entrance_time_2" name="entrance_time_2" onchange="SetEntranceTime(this)">
                        <option>01:00</option>
                        <option>02:00</option>
                        <option>03:00</option>
                        <option>04:00</option>
                        <option>05:00</option>
                        <option>06:00</option>
                        <option>07:00</option>
                        <option>08:00</option>
                        <option>09:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                        <option>20:00</option>
                        <option>21:00</option>
                        <option>22:00</option>
                        <option>23:00</option>
                        <option>00:00</option>
                    </select>
                </div>

                <div class="upload-home-page-inputs-title-sec">
                    <p>Obyekti tərk etmə vaxtı üçün uyğun aralığı təyin edin</p>
                </div>

                <div class="upload-home-page-time-selects-third">
                    <select class="upload-home-custom-select dropdown" id="exit_time_1" name="exit_time_1" onchange="SetExitTime(this)">
                        <option>01:00</option>
                        <option>02:00</option>
                        <option>03:00</option>
                        <option>04:00</option>
                        <option>05:00</option>
                        <option>06:00</option>
                        <option>07:00</option>
                        <option>08:00</option>
                        <option>09:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                        <option>20:00</option>
                        <option>21:00</option>
                        <option>22:00</option>
                        <option>23:00</option>
                        <option>00:00</option>
                    </select>
                    <select class="upload-home-custom-select dropdown" id="exit_time_2" name="exit_time_2" onchange="SetExitTime(this)">
                        <option>01:00</option>
                        <option>02:00</option>
                        <option>03:00</option>
                        <option>04:00</option>
                        <option>05:00</option>
                        <option>06:00</option>
                        <option>07:00</option>
                        <option>08:00</option>
                        <option>09:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                        <option>20:00</option>
                        <option>21:00</option>
                        <option>22:00</option>
                        <option>23:00</option>
                        <option>00:00</option>
                    </select>
                </div>

            </div>

            <div class="upload-home-page-holder-one-footer upload-home-page-holder-footer">
                <button type="button" class="back-button-reservation"
                    onclick="ToBackPage('upload-home-page-holder-sec' , 'upload-home-page-holder-third')">Geri</button>
                <div class="input-holder">
                    <button type="button" class="submit-button-reservation submit-button-form"
                        onclick="MapPage('{{ route('post_third_page_home') }}')">Davam et</button>
                </div>
            </div>
        </div>

        <div class="upload-home-page-holder-map d-flex a-center tagged-visibility-div non-visible-div">

            <div class="upload-home-page-holder-one-footer upload-home-page-holder-footer">
                <button type="button" class="back-button-reservation"
                    onclick="ToBackPage('upload-home-page-holder-third' , 'upload-home-page-holder-map')">Geri</button>
                <div class="input-holder" data-error-tip="Formu təsdiqləmək üçün bütün inputlar doldurulmalıdır">
                    <button type="button" class="submit-button-reservation submit-button-form"
                        onclick="DetailsPage()" disabled>Davam et</button>
                </div>
            </div>
        </div>

        <div class="upload-home-page-holder-details d-flex a-center tagged-visibility-div non-visible-div"></div>

        <div class="upload-home-page-holder-end d-flex a-center tagged-visibility-div non-visible-div"></div>

    </main>


    <div class="modal-holder modal-holder-inactive" id="get-login-popup">
        <div class="modal modal-blurred-white modal-size-6-3">
            <div class="modal-body flex j-center a-center">
                <p>
                    Allrent-də ev paylaşa bilmək üçün hesabınıza daxil
                    olmalısınız
                </p>
            </div>
            <div class="modal-footer flex j-center g-05">
                <button class="modal-btn modal-green-btn"
                    onclick="window.open('{{ route('show_login') }}' , '_self')">
                    Daxil ol
                </button>
                <button class="modal-btn modal-red-btn" onclick="CloseModal(this)" data-target="get-login-popup">
                    Bağla
                </button>
            </div>
        </div>
    </div>

    <x-context-menu context-menu="context-menu title" />

    <script src="{{ asset('/') }}homepage/js/userpanel/main.js"></script>
    <script src="{{ asset('/') }}homepage/js/userpanel/form-checker.js"></script>
    <script src="{{ asset('/') }}homepage/js/userpanel/upload-home.js"></script>
</body>

</html>
