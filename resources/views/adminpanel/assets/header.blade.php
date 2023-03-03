<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    {{-- Styles --}}

</head>

<body>
    <header>
        <div class="header-holder">
            <div class="header-left">
                <div class="header-left-element">
                    <img src="{{ asset('/') }}homepage/images/svg/logo.svg" alt="BrandLogo">
                </div>
            </div>
            <div class="header-right">
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

                    @guest
                        <div class="header-item login-button-header">
                            <a href="{{ route('show_login') }}" class="e-h-link e-h-link-pink green-udline-hover">Daxil
                                ol</a>
                        </div>
                        <div class="header-item register-button-header">
                            <a href="{{ route('show_register') }}" class="e-h-link green-udline-hover">Hesab yarat</a>
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
                        <a href="{{ route('mainpage') }}" class="e-h-link e-h-link-blue green-udline-hover">Partnyor
                            ol</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (session()->has('message'))
        <x-notification notification="notification title" :type="session()->get('type')" :content="session()->get('message')" />
    @endif
