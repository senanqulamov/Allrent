@extends('homepage.assets.body')

@section('page')
    <div class="page-content home-details-page tagged-visibility-div visible-div">
        <div class="details-name-holder">
            <div class="details-name-title-holder">
                <p class="details-name-title">
                    {{ $home->title }}
                </p>
                <p class="details-name-rating">
                    {{ $home->rating }}
                    <img class="details-name-favorite" src="{{ asset('/') }}homepage/images/svg/details/active_fav.svg"
                        alt="favorite svg">
                </p>
            </div>

            <div class="details-name-buttons-holder">
                <div class="details-name-button">
                    <svg width="20" height="20" viewBox="0 0 20 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 1.52765C7.64418 -0.583106 4.02125 -0.506535 1.75736 1.75736C-0.585786 4.1005 -0.585786 7.8995 1.75736 10.2426L8.58579 17.0711C9.36684 17.8521 10.6332 17.8521 11.4142 17.0711L18.2426 10.2426C20.5858 7.8995 20.5858 4.1005 18.2426 1.75736C15.9787 -0.506535 12.3558 -0.583106 10 1.52765ZM8.82843 3.17157L9.29289 3.63604C9.68342 4.02656 10.3166 4.02656 10.7071 3.63604L11.1716 3.17157C12.7337 1.60948 15.2663 1.60948 16.8284 3.17157C18.3905 4.73367 18.3905 7.26633 16.8284 8.82843L10 15.6569L3.17157 8.82843C1.60948 7.26633 1.60948 4.73367 3.17157 3.17157C4.73367 1.60948 7.26633 1.60948 8.82843 3.17157Z"
                            fill="#1D1D1D" />
                    </svg>
                    <p>Save</p>
                </div>
                <div class="details-name-button">
                    <svg width="20" height="20" viewBox="0 0 23 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.08334 14.5464C7.76609 14.5464 9.13022 13.1823 9.13022 11.4995C9.13022 9.81677 7.76609 8.45264 6.08334 8.45264C4.4006 8.45264 3.03647 9.81677 3.03647 11.4995C3.03647 13.1823 4.4006 14.5464 6.08334 14.5464Z"
                            stroke="#1D1D1D" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M16.9167 19.9634C18.5994 19.9634 19.9635 18.5992 19.9635 16.9165C19.9635 15.2338 18.5994 13.8696 16.9167 13.8696C15.2339 13.8696 13.8698 15.2338 13.8698 16.9165C13.8698 18.5992 15.2339 19.9634 16.9167 19.9634Z"
                            stroke="#1D1D1D" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M16.9167 9.12988C18.5994 9.12988 19.9635 7.76575 19.9635 6.08301C19.9635 4.40027 18.5994 3.03613 16.9167 3.03613C15.2339 3.03613 13.8698 4.40027 13.8698 6.08301C13.8698 7.76575 15.2339 9.12988 16.9167 9.12988Z"
                            stroke="#1D1D1D" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.79166 10.1453L14.2083 7.43701M8.79166 12.8537L14.2083 15.562L8.79166 12.8537Z"
                            stroke="#1D1D1D" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p>Share</p>
                </div>
            </div>
        </div>

        <div class="details-slider-holder details-flex">
            <div class="details-big-image-holder" onclick="openSlider()">
<<<<<<< HEAD
                @php
                    $cover = collect($home_images);
                    $cover_image = $cover->where('image_type', 'cover_image')->first();
                    $cover_image_2 = $cover->where('image_type', 'cover_image')->last();
                @endphp
                <img width="100%" height="100%" src="{{ asset('storage/' . $cover_image->image_name) }}"
                    alt="Home Image">
            </div>
            <div class="details-images-holder">
                @php $limit = 0 @endphp

                @foreach ($home_images as $image)
                    @if ($limit < 3)
                        <div onclick="openSlider()">
                            <img width="100%" height="100%" src="{{ asset('storage/' . $image->image_name) }}"
                                alt="Home Image">
                        </div>
                    @endif

                    @php
                        $limit += 1;
                    @endphp
                @endforeach

                <div class="details-images-holder-blurred-image" data-image-count="+7 şəkil">
                    <img width="100%" height="100%" src="{{ asset('storage/' . $cover_image_2->image_name) }}"
=======
                <img width="100%" height="100%" src="{{ asset('/') }}homepage/images/details/home_1.jpg"
                    alt="Home Image">
            </div>
            <div class="details-images-holder">
                <div onclick="openSlider()">
                    <img width="100%" height="100%" src="{{ asset('/') }}homepage/images/details/home_2.jpg"
                        alt="Home Image">
                </div>
                <div onclick="openSlider()">
                    <img width="100%" height="100%" src="{{ asset('/') }}homepage/images/details/home_2.jpg"
                        alt="Home Image">
                </div>
                <div onclick="openSlider()">
                    <img width="100%" height="100%" src="{{ asset('/') }}homepage/images/details/home_2.jpg"
                        alt="Home Image">
                </div onclick="openSlider()">
                <div class="details-images-holder-blurred-image" data-image-count="+7 şəkil">
                    <img width="100%" height="100%" src="{{ asset('/') }}homepage/images/details/home_2.jpg"
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
                        alt="Home Image">
                </div>
            </div>
        </div>

        <div class="details-info-holder details-flex">

            <div class="details-info-text-holder">
<<<<<<< HEAD
                <p class="details-info-text-title">{{ $home->category }}</p>

                <div class="details-info-text-svg-holder">
                    @foreach (json_decode($home->home_has) as $key => $value)
                        @php
                            switch ($key) {
                                case 'guest_count':
                                    $name = ' Maksimum ' . $value . ' qonaq';
                                    break;
                                case 'bedroom_count':
                                    $name = $value . ' yataq otağı var';
                                    break;
                                case 'bathroom_count':
                                    $name = $value . ' ədəd hamam otağı var';
                                    break;
                                case 'bed_count':
                                    $name = $value . ' ədəd bir nəfərlik çarpayı var';
                                    break;
                                case 'double_bed_count':
                                    $name = $value . ' ədəd iki nəfərlik çarpayı var';
                                    break;
                                case 'additional_room_count':
                                    $name = $value . ' ədəd əlavə otaq var';
                                    break;
                                default:
                                    $name = null;
                                    break;
                            }
                        @endphp
                        <div class="details-svg-div" data-detail-svg-tip="{{ $name }}">
                            <img src="{{ asset('/') }}homepage/images/svg/details/{{ $key }}.svg"
                                alt="{{ $key }}">
                            {{ $value }}
                        </div>
                    @endforeach
=======
                <p class="details-info-text-title">Hovuzlu villa</p>

                <div class="details-info-text-svg-holder">
                    <div class="details-svg-div" data-detail-svg-tip="maksimum 8 otaq">
                        <img src="{{ asset('/') }}homepage/images/svg/details/human.svg" alt="Human">
                        8
                    </div>
                    <div class="details-svg-div" data-detail-svg-tip="4 yataq otağı var">
                        <img src="{{ asset('/') }}homepage/images/svg/details/room.svg" alt="Room">
                        4
                    </div>
                    <div class="details-svg-div" data-detail-svg-tip="3 ədəd iki nəfərlik otaq var">
                        <img src="{{ asset('/') }}homepage/images/svg/details/bed_1.svg" alt="Bed">
                        3
                    </div>
                    <div class="details-svg-div" data-detail-svg-tip="2 ədəd bir nəfərlik çarpayı var">
                        <img src="{{ asset('/') }}homepage/images/svg/details/bed_2.svg" alt="Bed">
                        2
                    </div>
                    <div class="details-svg-div" data-detail-svg-tip="2 ədəd hamam otağı var">
                        <img src="{{ asset('/') }}homepage/images/svg/details/bath.svg" alt="Bath">
                        2
                    </div>
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
                </div>

                <p class="info-p-in-details">
                    {{ $home->info }}
                </p>

                <div class="empty-div empty-div-bordered"></div>

                <div class="details-user-info-holder">
                    <div class="details-user-info-image">
                        <img src="{{ asset('/') }}homepage/images/details/user-profile.png" alt="User Profile">
                    </div>
                    <div class="details-user-info-text">
                        <p class="user-name-user-info">Sultan Əhmədli</p>
                        <div class="flex dir-row g-1">
                            <img class="details-name-favorite"
                                src="{{ asset('/') }}homepage/images/svg/details/active_fav.svg" alt="favorite svg">
                            5
                        </div>
                        <div class="flex dir-row g-1 details-user-info-label">
                            <p>
                                Dil : <span>Azərbaycan, Rus, İngilis</span>
                            </p>
                        </div>
                        <div class="flex dir-row g-1 details-user-info-label">
                            <p>
                                Xüsusi tələblər : <span>Evə daxil olub çıxma saatlarının nəzərə alınmasını xahiş
                                    edirəm.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="empty-div empty-div-bordered"></div>

                <p class="details-info-text-title">İcazələr</p>

                <div class="details-info-text-permission-svg-holder">
<<<<<<< HEAD
                    @foreach (json_decode($home->permissions) as $value => $key)
                        @php
                            switch ($value) {
                                case 'party_perm':
                                    if ($key == 'true') {
                                        $name = 'Şənliklərin keçirilməsinə icazə verilir';
                                    } else {
                                        $name = 'Şənliklərin keçirilməsinə icazə verilmir';
                                    }
                                    break;
                                case 'marriage_perm':
                                    if ($key == 'true') {
                                        $name = 'Nikah şəhadətnaməsi zəruri deyil';
                                    } else {
                                        $name = 'Nikah şəhadətnaməsi zəruridir';
                                    }
                                    break;
                                case 'children_perm':
                                    if ($key == 'true') {
                                        $name = 'Uşaqlarla gəlməyə icazə verilir';
                                    } else {
                                        $name = 'Uşaqlarla gəlməyə icazə verilmir';
                                    }
                                    break;
                                case 'cigarette_perm':
                                    if ($key == 'true') {
                                        $name = 'Ev daxilində tütün məmulatlarına icazə verilir';
                                    } else {
                                        $name = 'Ev daxilində tütün məmulatlarına icazə verilmir';
                                    }
                                    break;
                                case 'animal_perm':
                                    if ($key == 'true') {
                                        $name = 'Ev heyvanlarına icazə verilir';
                                    } else {
                                        $name = 'Ev heyvanlarına icazə verilmir';
                                    }
                                    break;
                                default:
                                    $name = null;
                                    break;
                            }
                        @endphp
                        <div class="details-permission-svg-div {{ $key === 'true' ? 'allowed-permission' : 'disallowed-permission' }}"
                            data-detail-svg-tip="{{ $name }}">
                            <img class="details-name-favorite"
                                src="{{ asset('/') }}homepage/images/svg/details/{{ $value }}_{{ $key }}.svg"
                                alt="animal svg">
                        </div>
                    @endforeach
=======
                    <div class="details-permission-svg-div allowed-permission"
                        data-detail-svg-tip="Ev heyvanlarına icazə verilir">
                        <img class="details-name-favorite"
                            src="{{ asset('/') }}homepage/images/svg/details/animal.svg" alt="animal svg">
                    </div>
                    <div class="details-permission-svg-div disallowed-permission"
                        data-detail-svg-tip="Ev daxilində tütün məmulatlarına icazə verilmir">
                        <img class="details-name-favorite"
                            src="{{ asset('/') }}homepage/images/svg/details/cigarette.svg" alt="animal svg">
                    </div>
                    <div class="details-permission-svg-div allowed-permission"
                        data-detail-svg-tip="Uşaqlarla gəlməyə icazə verilir">
                        <img class="details-name-favorite" src="{{ asset('/') }}homepage/images/svg/details/baby.svg"
                            alt="animal svg">
                    </div>
                    <div class="details-permission-svg-div allowed-permission"
                        data-detail-svg-tip="Şənliklərin keçirilməsinə icazə verilir">
                        <img class="details-name-favorite" src="{{ asset('/') }}homepage/images/svg/details/party.svg"
                            alt="animal svg">
                    </div>
                    <div class="details-permission-svg-div disallowed-permission"
                        data-detail-svg-tip="Nikah şəhadətnaməsi zəruridir">
                        <img class="details-name-favorite"
                            src="{{ asset('/') }}homepage/images/svg/details/couple.svg" alt="animal svg">
                    </div>
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
                </div>

                <p class="details-info-text-title">Şərait</p>

                <div class="details-params-holder">
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/kitchen.svg" alt="kitchen">
                        <p>Mətbəx</p>
                    </div>
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/Parkinq.svg" alt="Parkinq">
                        <p>Parkinq</p>
                    </div>
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/Soyuducu.svg" alt="Soyuducu">
                        <p>Soyuducu</p>
                    </div>
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/Netflix.svg" alt="Netflix">
                        <p>Netflix</p>
                    </div>
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/Paltaryuyan.svg" alt="Paltaryuyan">
                        <p>Paltaryuyan</p>
                    </div>
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/Hovuz.svg" alt="Hovuz">
                        <p>Hovuz</p>
                    </div>
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/Televizor.svg" alt="Televizor">
                        <p>Televizor</p>
                    </div>
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/Wi-Fi.svg" alt="Wi-Fi">
                        <p>Wi-Fi</p>
                    </div>
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/Saç quruducu.svg" alt="Saç quruducu">
                        <p>Saç quruducu</p>
                    </div>
                    <div class="details-param-div">
                        <img src="{{ asset('/') }}homepage/images/svg/details/Saç quruducu.svg" alt="Saç quruducu">
                        <p>Saç quruducu</p>
                    </div>
                </div>

                <div class="empty-div empty-div-bordered"></div>

                <p class="details-info-text-title">Quba-da 7 gecə</p>

                <div class="details-calendar-holder">
                    <x-calendar calendar="calendar title" />
                </div>

                <p class="details-info-text-title">İstifadəçi fikirləri</p>

                <div class="details-comments-holder reserv-holder-rating-div">
                    Tezliklə
                </div>

                <p class="details-info-text-title">Ünvan</p>

                <div class="details-map-holder details-comments-holder reserv-holder-rating-div">
                    Tezliklə
                </div>

            </div>

            @if ($reserved == true)
                <div class="reservation-info-element-holder">
                    <div class="reservation-info-element">
                        <div class="user-info-reservatin-info-elm">
                            <p>
                                @if (Auth::user())
                                    {{ Auth::user()->username }}
                                    <span>
                                        {{ Auth::user()->email }}
                                    </span>
                                @endif
                            </p>
                        </div>
                        <div class="home-info-reservatin-info-elm">
                            <div class="home-details-home-info-reservation">
                                <p>
                                    {{ $home->rating }}
                                    <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.99999 9.18314L3.23332 10.8498C3.1111 10.9276 2.98332 10.9609 2.84999 10.9498C2.71665 10.9387 2.59999 10.8942 2.49999 10.8165C2.39999 10.7387 2.32221 10.6416 2.26665 10.5251C2.2111 10.4082 2.19999 10.2776 2.23332 10.1331L2.96665 6.98314L0.516653 4.86647C0.405541 4.76647 0.336208 4.65247 0.308653 4.52447C0.280653 4.39692 0.288875 4.27203 0.333319 4.1498C0.377764 4.02758 0.44443 3.92758 0.533319 3.8498C0.622208 3.77203 0.74443 3.72203 0.899986 3.6998L4.13332 3.41647L5.38332 0.449805C5.43887 0.316472 5.5251 0.216471 5.64199 0.149805C5.75843 0.0831381 5.87776 0.0498047 5.99999 0.0498047C6.12221 0.0498047 6.24176 0.0831381 6.35865 0.149805C6.4751 0.216471 6.5611 0.316472 6.61665 0.449805L7.86665 3.41647L11.1 3.6998C11.2555 3.72203 11.3778 3.77203 11.4667 3.8498C11.5555 3.92758 11.6222 4.02758 11.6667 4.1498C11.7111 4.27203 11.7195 4.39692 11.692 4.52447C11.664 4.65247 11.5944 4.76647 11.4833 4.86647L9.03332 6.98314L9.76665 10.1331C9.79999 10.2776 9.78888 10.4082 9.73332 10.5251C9.67776 10.6416 9.59999 10.7387 9.49999 10.8165C9.39999 10.8942 9.28332 10.9387 9.14999 10.9498C9.01665 10.9609 8.88888 10.9276 8.76665 10.8498L5.99999 9.18314Z"
                                            fill="#40918B" />
                                    </svg>
                                </p>
                                <p>{{ $home->title }}</p>
                                <p class="d-flex dir-row g-05 f-wr">
                                    <span>8 qonaq</span>
                                    <span>4 yataq otağı</span>
                                    <span>6 çarpayı</span>
                                    <span>4 hamam otağı</span>
                                </p>
                            </div>
                            <div class="home-image-home-info-reservation">
                                <img width="100%" height="100%"
                                    src="{{ asset('/') }}homepage/images/details/home_1.jpg" alt="Home Image">
                            </div>
                        </div>
                        <div class="date-info-reservatin-info-elm">
                            <p class="d-flex j-spc-btw date-inside-date-box-start-2">
                                {{ $reservation->start_date }}
                                <span class="date-inside-date-box-start-count">{{ $reservation->days }} gecə</span>
                            </p>
                            <p class="date-inside-date-box-end-2">{{ $reservation->end_date }}</p>
                            <p>{{ $reservation->guests }}</p>
                        </div>
                        <div class="price-info-reservatin-info-elm">
                            <p class="price-info-reservation-days-info-elm">{{ $reservation->days }} gecə üçün məbləğ</p>
                            <div class="d-flex g-05 a-base">
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.83337 12.8332V6.99984C1.83337 5.89477 2.27236 4.83496 3.05376 4.05356C3.83516 3.27216 4.89497 2.83317 6.00004 2.83317C7.10511 2.83317 8.16492 3.27216 8.94632 4.05356C9.72772 4.83496 10.1667 5.89477 10.1667 6.99984V12.8332M6.00004 1.1665V12.8332"
                                        stroke="#1D1D1D" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="total-price-reservation">{{ $reservation->total_price }}</p>
                            </div>
                        </div>
                        <div class="price-total-info-reservatin-info-elm">
                            <p>Ümumi</p>
                            <div class="d-flex g-05 a-base">
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.83337 12.8332V6.99984C1.83337 5.89477 2.27236 4.83496 3.05376 4.05356C3.83516 3.27216 4.89497 2.83317 6.00004 2.83317C7.10511 2.83317 8.16492 3.27216 8.94632 4.05356C9.72772 4.83496 10.1667 5.89477 10.1667 6.99984V12.8332M6.00004 1.1665V12.8332"
                                        stroke="#1D1D1D" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="total-price-reservation">{{ $reservation->total_price }}</p>
                            </div>
                        </div>
                        <div class="rules-info-reservatin-info-elm">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5 12.4425L8.5575 10.5L7.5 11.5575L10.5 14.5575L16.5 8.5575L15.4425 7.5L10.5 12.4425Z"
                                    fill="#40918B" />
                                <path
                                    d="M12 22.5L7.368 20.0303C6.0475 19.3277 4.94323 18.2789 4.1737 16.9963C3.40416 15.7137 2.99842 14.2457 3 12.75V3C3.0004 2.6023 3.15856 2.221 3.43978 1.93978C3.721 1.65856 4.1023 1.5004 4.5 1.5H19.5C19.8977 1.5004 20.279 1.65856 20.5602 1.93978C20.8414 2.221 20.9996 2.6023 21 3V12.75C21.0016 14.2457 20.5958 15.7137 19.8263 16.9963C19.0568 18.2789 17.9525 19.3277 16.632 20.0303L12 22.5ZM4.5 3V12.75C4.49876 13.9739 4.83083 15.1749 5.46058 16.2243C6.09032 17.2737 6.99396 18.1318 8.0745 18.7065L12 20.7997L15.9255 18.7073C17.0062 18.1325 17.9099 17.2743 18.5396 16.2248C19.1694 15.1752 19.5014 13.974 19.5 12.75V3H4.5Z"
                                    fill="#40918B" />
                            </svg>
                            <p>
                                Rezervasiyanı ləğv etmək
                                <a href="#" class="blue-hyper-link green-udline-hover">şərtləri</a>
                                və
                                <a href="#" class="blue-hyper-link green-udline-hover">qaydaları</a>
                                ilə tanış olun
                            </p>
                        </div>
                    </div>
                </div>
            @else
                <div class="details-info-reserv-holder">
                    <div class="reserv-holder-details-holder">
                        <div class="reserv-holder-details-div">
                            <div class="reserv-holder-price-box">
                                <div class="price-box-1">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 15V8C1 6.67392 1.52678 5.40215 2.46447 4.46447C3.40215 3.52678 4.67392 3 6 3C7.32608 3 8.59785 3.52678 9.53553 4.46447C10.4732 5.40215 11 6.67392 11 8V15M6 1V15"
                                            stroke="#1D1D1D" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <p>
                                        {{ $home->min_price }}/<span>gecə</span>
                                    </p>

                                    <input type="hidden" name="home_price" value="{{ $home->min_price }}">
                                </div>
                                <div class="price-box-2">
                                    <p>
                                        {{ $home->rating }}
                                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99999 9.18314L3.23332 10.8498C3.1111 10.9276 2.98332 10.9609 2.84999 10.9498C2.71665 10.9387 2.59999 10.8942 2.49999 10.8165C2.39999 10.7387 2.32221 10.6416 2.26665 10.5251C2.2111 10.4082 2.19999 10.2776 2.23332 10.1331L2.96665 6.98314L0.516653 4.86647C0.405541 4.76647 0.336208 4.65247 0.308653 4.52447C0.280653 4.39692 0.288875 4.27203 0.333319 4.1498C0.377764 4.02758 0.44443 3.92758 0.533319 3.8498C0.622208 3.77203 0.74443 3.72203 0.899986 3.6998L4.13332 3.41647L5.38332 0.449805C5.43887 0.316472 5.5251 0.216471 5.64199 0.149805C5.75843 0.0831381 5.87776 0.0498047 5.99999 0.0498047C6.12221 0.0498047 6.24176 0.0831381 6.35865 0.149805C6.4751 0.216471 6.5611 0.316472 6.61665 0.449805L7.86665 3.41647L11.1 3.6998C11.2555 3.72203 11.3778 3.77203 11.4667 3.8498C11.5555 3.92758 11.6222 4.02758 11.6667 4.1498C11.7111 4.27203 11.7195 4.39692 11.692 4.52447C11.664 4.65247 11.5944 4.76647 11.4833 4.86647L9.03332 6.98314L9.76665 10.1331C9.79999 10.2776 9.78888 10.4082 9.73332 10.5251C9.67776 10.6416 9.59999 10.7387 9.49999 10.8165C9.39999 10.8942 9.28332 10.9387 9.14999 10.9498C9.01665 10.9609 8.88888 10.9276 8.76665 10.8498L5.99999 9.18314Z"
                                                fill="#40918B" />
                                        </svg>
                                    </p>
                                    <span> / 21 rəy</span>
                                </div>
                            </div>
                            <div class="reserv-holder-date-box">
                                <div class="date-box-start-end-div">
                                    <div class="date-box-start-div pd-10">
                                        <p class="reserv-holder-title">Giriş</p>
                                        <div class="without-date-inside-date-box date-inside-date-box-start">Kalendardan
                                            tarix seçin</div>
                                    </div>
                                    <div class="date-box-end-div pd-10">
                                        <p class="reserv-holder-title">Çıxış</p>
                                        <div class="without-date-inside-date-box date-inside-date-box-end">Kalendardan
                                            tarix seçin</div>
                                    </div>
                                </div>
                                <div class="date-box-guests-div">
                                    <p class="reserv-holder-title pd-10">Qonaqlar</p>
                                    <select data-menu id="user_guests" name="user_guests" onchange="ShowGuests(this)">
                                        <option>1 qonaq</option>
                                        <option selected>2 qonaq</option>
                                        <option>3 qonaq</option>
                                        <option>4 qonaq</option>
                                        <option>5 qonaq</option>
                                    </select>
                                </div>
                                <div class="date-box-price-div pd-10">
                                    <p class="reserv-holder-title">Ümumi məbləğ</p>
                                    <div class="price-p-reserv-holder">
                                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.83331 12.8332V6.99984C1.83331 5.89477 2.2723 4.83496 3.0537 4.05356C3.8351 3.27216 4.89491 2.83317 5.99998 2.83317C7.10505 2.83317 8.16486 3.27216 8.94626 4.05356C9.72766 4.83496 10.1666 5.89477 10.1666 6.99984V12.8332M5.99998 1.1665V12.8332"
                                                stroke="#1D1D1D" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <p class="total-price-reservation">0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="reserv-holder-submit-box">
                                <button class="red-submit-button" type="button"
                                    @if (!Auth::user()) onclick="OpenModal(this)" data-target="get-login-popup-reserv" @else onclick="OpenReservation(this)" @endif>
                                    Rezerv et
                                </button>
                            </div>
                        </div>
                        <div class="reserv-holder-rating-div">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.00001 14.2752L4.85001 16.7752C4.66668 16.8919 4.47501 16.9419 4.27501 16.9252C4.07501 16.9085 3.90001 16.8419 3.75001 16.7252C3.60001 16.6085 3.48334 16.4629 3.40001 16.2882C3.31668 16.1129 3.30001 15.9169 3.35001 15.7002L4.45001 10.9752L0.775009 7.8002C0.608343 7.6502 0.504343 7.4792 0.463009 7.2872C0.421009 7.09586 0.433343 6.90853 0.500009 6.7252C0.566676 6.54186 0.666676 6.39186 0.800009 6.2752C0.933343 6.15853 1.11668 6.08353 1.35001 6.0502L6.20001 5.6252L8.07501 1.1752C8.15834 0.975196 8.28768 0.825195 8.46301 0.725195C8.63768 0.625195 8.81668 0.575195 9.00001 0.575195C9.18334 0.575195 9.36268 0.625195 9.53801 0.725195C9.71268 0.825195 9.84168 0.975196 9.92501 1.1752L11.8 5.6252L16.65 6.0502C16.8833 6.08353 17.0667 6.15853 17.2 6.2752C17.3333 6.39186 17.4333 6.54186 17.5 6.7252C17.5667 6.90853 17.5793 7.09586 17.538 7.2872C17.496 7.4792 17.3917 7.6502 17.225 7.8002L13.55 10.9752L14.65 15.7002C14.7 15.9169 14.6833 16.1129 14.6 16.2882C14.5167 16.4629 14.4 16.6085 14.25 16.7252C14.1 16.8419 13.925 16.9085 13.725 16.9252C13.525 16.9419 13.3333 16.8919 13.15 16.7752L9.00001 14.2752Z"
                                    fill="#40918B" />
                            </svg>
                            <p>
                                Qonaqlar bu mənzili bəyənir
                                <span>Reytinq {{ $home->rating }}-dir</span>
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    {{-- Reservation page --}}
    @if (Auth::user())
        <div class="page-content home-reservation-page tagged-visibility-div non-visible-div">
            <div class="details-flex">
                <div class="reservation-inputs-holder">
                    <div class="steps-holder-reservation">
                        <div class="circle-step-item step-1-reservation step-item-active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" />
                                <rect x="6" y="6" width="12" height="12" rx="6" />
                            </svg>
                            <p>Şəxsi məlumatlar</p>
                        </div>
                        <div class="line-step-item line-step-item-1"></div>
                        <div class="circle-step-item step-2-reservation step-item-inactive">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" />
                                <rect x="6" y="6" width="12" height="12" rx="6" />
                            </svg>
                            <p>Ödəniş məlumatları</p>
                        </div>
                        <div class="line-step-item"></div>
                        <div class="circle-step-item step-3-reservation step-item-inactive">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" />
                                <rect x="6" y="6" width="12" height="12" rx="6" />
                            </svg>
                            <p>Təsdiq</p>
                        </div>
                    </div>

                    <div class="form-holder-reservation visible-div">
                        <p class="form-title-reservation">
                            Rezervasiyanıza başlayın
                            <span>Zəhmət olmasa şəxsi məlumatlarınızı qeyd edin</span>
                        </p>

                        <div class="radio-buttons-reservation">
                            <input type="hidden" name="user_gender" value="woman">
                            <div class="radio-button-element-reservation inactive-radio-reservation"
                                onclick="ChangeGender(this , 'man')">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="32" height="32" rx="16" fill="#40918B" />
                                    <rect x="8" y="8" width="16" height="16" rx="8"
                                        fill="#FEFEFE" />
                                </svg>
                                <p>Kişi</p>
                            </div>
                            <div class="radio-button-element-reservation active-radio-reservation"
                                onclick="ChangeGender(this , 'woman')">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="32" height="32" rx="16" fill="#40918B" />
                                    <rect x="8" y="8" width="16" height="16" rx="8"
                                        fill="#FEFEFE" />
                                </svg>
                                <p>Qadın</p>
                            </div>
                        </div>

                        <div class="form-inputs-reservation" onkeyup="checkForm(this)">
                            <div class="input-holder" data-info="Ad və Soyad" data-helper="Samir Samirov">
                                <input class="checked-input" type="text" name="user_name" placeholder="Ad Soyad"
                                    pattern="([a-zA-Z]{3,30}\s*)+">
                            </div>
                            <div class="input-holder" data-info="Mobil nömrə" data-helper="+994123456789">
                                <input class="checked-input" type="text" name="user_phone"
                                    placeholder="Əlaqə nömrəsi" pattern="[+]{1}[0-9]{12}">
                            </div>
                            <div class="input-holder" data-info="E-mail" data-helper="flankəsflankəsov@gmail.com">
                                <input class="checked-input" type="email" name="user_email"
                                    placeholder="Elektron poçt">
                            </div>
                            <div class="input-holder">
                                <textarea name="user_wish" cols="30" rows="4" placeholder="Xüsusi istək"></textarea>
                            </div>
                        </div>

                        <p class="input-page-div-footer-text">
                            <input type="checkbox" name="user_accept_rules" hidden value="off">
                            <label for="accept_rules" class="accept-rules-reservation" onclick="AcceptRules(this)">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.6644 5.2526C21.0772 5.61952 21.1143 6.25159 20.7474 6.66437L10.0808 18.6644C9.89099 18.8779 9.61898 19 9.33334 19C9.04771 19 8.7757 18.8779 8.58593 18.6644L3.2526 12.6644C2.88568 12.2516 2.92286 11.6195 3.33565 11.2526C3.74843 10.8857 4.3805 10.9229 4.74742 11.3356L9.33334 16.4948L19.2526 5.33565C19.6195 4.92286 20.2516 4.88568 20.6644 5.2526Z"
                                        fill="#FEFEFE" />
                                </svg>
                            </label>
                            Allrent
                            <a href="#" class="blue-hyper-link green-udline-hover">şərtlər & qaydalar</a>
                            və
                            <a href="#" class="blue-hyper-link green-udline-hover">gizlilik siyasəti</a>
                            razılaşıram
                        </p>
                    </div>

                    <div class="reservation-page-card-details non-visible-div">
                        <p class="form-title-reservation">
                            Kart Məlumatları
                        </p>

                        <form action="{{ route('home_reservation') }}" method="POST">
                            @csrf

                            <input type="hidden" name="home_id" value="{{ $home->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->ID }}">
<<<<<<< HEAD
                            <input type="hidden" name="status" value="active">
=======
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
                            <input type="hidden" name="name">
                            <input type="hidden" name="phone">
                            <input type="hidden" name="email">
                            <input type="hidden" name="wish">
                            <input type="hidden" name="gender">
                            <input type="hidden" name="accept_rules">
                            <input type="hidden" name="start_date">
                            <input type="hidden" name="end_date">
                            <input type="hidden" name="guests">
                            <input type="hidden" name="days">
                            <input type="hidden" name="total_price">

                            <div class="form-inputs-reservation" onkeyup="checkCardForm(this)">
                                <div class="input-holder" data-info="Kart nömrəsi" data-helper="1234 5678 1234 5678">
                                    <input class="checked-input cc-number" maxlength="19" name="card_number"
                                        placeholder="1234 5678 1234 5678" type="tel">
                                </div>
                                <div class="d-flex dir-row g-1 flex-divided-card-form-reservation">
                                    <div class="input-holder" data-info="Kart tarixi" data-helper="01/21">
                                        <input class="checked-input cc-expires" name="card_date" placeholder="AA/YY"
                                            maxlength="7" type="tel">
                                    </div>
                                    <div class="input-holder" data-info="CVC" data-helper="123">
                                        <input class="checked-input cc-cvc" maxlength="4" name="card_cvc"
                                            pattern="\d*" placeholder="CVC" type="tel">
                                    </div>
                                </div>
                                <div class="input-holder" data-info="Ad Soyad" data-helper="Flankəs Flankəsov">
                                    <label for="card_user_name">Kart üzərindəki ad</label>
                                    <input class="checked-input" type="text" name="card_user_name"
                                        placeholder="Ad Soyad" pattern="([a-zA-Z]{3,30}\s*)+">
                                </div>
                                <div class="input-holder"
                                    data-error-tip="Formu təsdiqləmək üçün bütün inputlar doldurulmalıdır">
                                    <button type="submit" class="submit-button-card-form pay-button-reservation"
                                        onclick="OpenCardDetails()" disabled>Ödə</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="reservation-info-element-holder">
                    <div class="reservation-info-element">
                        <div class="user-info-reservatin-info-elm">
                            <p>
                                @if (Auth::user())
                                    {{ Auth::user()->username }}
                                    <span>
                                        {{ Auth::user()->email }}
                                    </span>
                                @endif
                            </p>
                        </div>
                        <div class="home-info-reservatin-info-elm">
                            <div class="home-details-home-info-reservation">
                                <p>
                                    {{ $home->rating }}
                                    <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.99999 9.18314L3.23332 10.8498C3.1111 10.9276 2.98332 10.9609 2.84999 10.9498C2.71665 10.9387 2.59999 10.8942 2.49999 10.8165C2.39999 10.7387 2.32221 10.6416 2.26665 10.5251C2.2111 10.4082 2.19999 10.2776 2.23332 10.1331L2.96665 6.98314L0.516653 4.86647C0.405541 4.76647 0.336208 4.65247 0.308653 4.52447C0.280653 4.39692 0.288875 4.27203 0.333319 4.1498C0.377764 4.02758 0.44443 3.92758 0.533319 3.8498C0.622208 3.77203 0.74443 3.72203 0.899986 3.6998L4.13332 3.41647L5.38332 0.449805C5.43887 0.316472 5.5251 0.216471 5.64199 0.149805C5.75843 0.0831381 5.87776 0.0498047 5.99999 0.0498047C6.12221 0.0498047 6.24176 0.0831381 6.35865 0.149805C6.4751 0.216471 6.5611 0.316472 6.61665 0.449805L7.86665 3.41647L11.1 3.6998C11.2555 3.72203 11.3778 3.77203 11.4667 3.8498C11.5555 3.92758 11.6222 4.02758 11.6667 4.1498C11.7111 4.27203 11.7195 4.39692 11.692 4.52447C11.664 4.65247 11.5944 4.76647 11.4833 4.86647L9.03332 6.98314L9.76665 10.1331C9.79999 10.2776 9.78888 10.4082 9.73332 10.5251C9.67776 10.6416 9.59999 10.7387 9.49999 10.8165C9.39999 10.8942 9.28332 10.9387 9.14999 10.9498C9.01665 10.9609 8.88888 10.9276 8.76665 10.8498L5.99999 9.18314Z"
                                            fill="#40918B" />
                                    </svg>
                                </p>
<<<<<<< HEAD
                                <p>{{ $home->title }}</p>
                                <p class="d-flex dir-row g-05 f-wr">
                                    @foreach (json_decode($home->home_has) as $key => $value)
                                        @php
                                            switch ($key) {
                                                case 'guest_count':
                                                    $name = $value . ' qonaq';
                                                    break;
                                                case 'bed_count':
                                                    $name = $value . ' çarpayı';
                                                    break;
                                                case 'bedroom_count':
                                                    $name = $value . ' otaq';
                                                    break;
                                                case 'bathroom_count':
                                                    $name = $value . ' tualet';
                                                    break;
                                                default:
                                                    $name = null;
                                                    break;
                                            }
                                        @endphp
                                        @if ($name != null)
                                            <span>{{ $name }}</span>
                                        @endif
                                    @endforeach
=======
                                <p>Quba , Fətəli xan k. 24</p>
                                <p class="d-flex dir-row g-05 f-wr">
                                    <span>8 qonaq</span>
                                    <span>4 yataq otağı</span>
                                    <span>6 çarpayı</span>
                                    <span>4 hamam otağı</span>
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
                                </p>
                            </div>
                            <div class="home-image-home-info-reservation">
                                <img width="100%" height="100%"
<<<<<<< HEAD
                                    src="{{ asset('storage/' . $cover_image->image_name) }}" alt="Home Image">
=======
                                    src="{{ asset('/') }}homepage/images/details/home_1.jpg" alt="Home Image">
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
                            </div>
                        </div>
                        <div class="date-info-reservatin-info-elm">
                            <p class="d-flex j-spc-btw date-inside-date-box-start-2">
                                <span class="date-inside-date-box-start-count">7 gecə</span>
                            </p>
                            <p class="date-inside-date-box-end-2"></p>
                            <p>2 qonaq ( 2 yetkin , 0 uşaq )</p>
                        </div>
                        <div class="price-info-reservatin-info-elm">
                            <p class="price-info-reservation-days-info-elm">7 gecə üçün məbləğ</p>
                            <div class="d-flex g-05 a-base">
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.83337 12.8332V6.99984C1.83337 5.89477 2.27236 4.83496 3.05376 4.05356C3.83516 3.27216 4.89497 2.83317 6.00004 2.83317C7.10511 2.83317 8.16492 3.27216 8.94632 4.05356C9.72772 4.83496 10.1667 5.89477 10.1667 6.99984V12.8332M6.00004 1.1665V12.8332"
                                        stroke="#1D1D1D" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="total-price-reservation">0</p>
                            </div>
                        </div>
                        <div class="price-total-info-reservatin-info-elm">
                            <p>Ümumi</p>
                            <div class="d-flex g-05 a-base">
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.83337 12.8332V6.99984C1.83337 5.89477 2.27236 4.83496 3.05376 4.05356C3.83516 3.27216 4.89497 2.83317 6.00004 2.83317C7.10511 2.83317 8.16492 3.27216 8.94632 4.05356C9.72772 4.83496 10.1667 5.89477 10.1667 6.99984V12.8332M6.00004 1.1665V12.8332"
                                        stroke="#1D1D1D" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="total-price-reservation">0</p>
                            </div>
                        </div>
                        <div class="rules-info-reservatin-info-elm">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5 12.4425L8.5575 10.5L7.5 11.5575L10.5 14.5575L16.5 8.5575L15.4425 7.5L10.5 12.4425Z"
                                    fill="#40918B" />
                                <path
                                    d="M12 22.5L7.368 20.0303C6.0475 19.3277 4.94323 18.2789 4.1737 16.9963C3.40416 15.7137 2.99842 14.2457 3 12.75V3C3.0004 2.6023 3.15856 2.221 3.43978 1.93978C3.721 1.65856 4.1023 1.5004 4.5 1.5H19.5C19.8977 1.5004 20.279 1.65856 20.5602 1.93978C20.8414 2.221 20.9996 2.6023 21 3V12.75C21.0016 14.2457 20.5958 15.7137 19.8263 16.9963C19.0568 18.2789 17.9525 19.3277 16.632 20.0303L12 22.5ZM4.5 3V12.75C4.49876 13.9739 4.83083 15.1749 5.46058 16.2243C6.09032 17.2737 6.99396 18.1318 8.0745 18.7065L12 20.7997L15.9255 18.7073C17.0062 18.1325 17.9099 17.2743 18.5396 16.2248C19.1694 15.1752 19.5014 13.974 19.5 12.75V3H4.5Z"
                                    fill="#40918B" />
                            </svg>
                            <p>
                                Rezervasiyanı ləğv etmək
                                <a href="#" class="blue-hyper-link green-udline-hover">şərtləri</a>
                                və
                                <a href="#" class="blue-hyper-link green-udline-hover">qaydaları</a>
                                ilə tanış olun
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex dir-row j-spc-btw w-100 reservation-page-nav-buttons visible-div">
                <button type="button" class="back-button-reservation" onclick="BackToDetails()">Geri</button>
                <div class="input-holder" data-error-tip="Formu təsdiqləmək üçün bütün inputlar doldurulmalıdır">
                    <button type="button" class="submit-button-form submit-button-reservation"
                        onclick="OpenCardDetails()" disabled>Davam et</button>
                </div>
            </div>
            <div class="d-flex dir-row j-spc-btw w-100 reservation-page-card-nav-buttons non-visible-div">
                <button type="button" class="back-button-reservation" onclick="BackToUserDetails()">Geri</button>
            </div>
        </div>
    @endif


    {{-- Slider --}}
    <div class="details-slider-element details-slider-element-inactive">
        <div class="details-slider-close-btn-holder" onclick="closeSlider(this)">
            <div class="close-button-slider">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.93934 0.93934C1.52513 0.353553 2.47487 0.353553 3.06066 0.93934L11 8.87868L18.9393 0.93934C19.5251 0.353553 20.4749 0.353553 21.0607 0.93934C21.6464 1.52513 21.6464 2.47487 21.0607 3.06066L13.1213 11L21.0607 18.9393C21.6464 19.5251 21.6464 20.4749 21.0607 21.0607C20.4749 21.6464 19.5251 21.6464 18.9393 21.0607L11 13.1213L3.06066 21.0607C2.47487 21.6464 1.52513 21.6464 0.93934 21.0607C0.353553 20.4749 0.353553 19.5251 0.93934 18.9393L8.87868 11L0.93934 3.06066C0.353553 2.47487 0.353553 1.52513 0.93934 0.93934Z"
                        fill="#1E4B4A" />
                </svg>
            </div>
        </div>
        <div id="image-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
<<<<<<< HEAD
                    @foreach ($home_images as $image)
                        <li class="splide__slide">
                            <img src="{{ asset('storage/' . $image->image_name) }}" alt="{{ $image->image_type }}">
                        </li>
                    @endforeach
=======
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_1.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_2.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_3.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_1.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_2.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_3.jpg" alt="Home Image">
                    </li>
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
                </ul>
            </div>
        </div>
        <div id="thumbnail-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
<<<<<<< HEAD
                    @foreach ($home_images as $image)
                        <li class="splide__slide">
                            <img src="{{ asset('storage/' . $image->image_name) }}" alt="{{ $image->image_type }}">
                        </li>
                    @endforeach
=======
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_1.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_2.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_3.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_1.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_2.jpg" alt="Home Image">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('/') }}homepage/images/details/home_3.jpg" alt="Home Image">
                    </li>
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
                </ul>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal-holder modal-holder-inactive" id="get-login-popup-reserv">
        <div class="modal modal-blurred-white modal-size-6-3">
            <div class="modal-body flex j-center a-center">
                <p>
                    Allrent-də ev rezerv edə bilmək üçün hesabınıza daxil
                    olmalısınız
                </p>
            </div>
            <div class="modal-footer flex j-center g-05">
                <button class="modal-btn modal-green-btn" onclick="window.open('{{ route('show_login') }}' , '_self')">
                    Daxil ol
                </button>
                <button class="modal-btn modal-red-btn" onclick="CloseModal(this)" data-target="get-login-popup-reserv">
                    Bağla
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.0.1/jquery.payment.min.js"></script>
    <script src="{{ asset('/') }}homepage/js/userpanel/reservation.js"></script>
    <script>
        var slider_holder = document.querySelector('.details-slider-element');

        function openSlider() {
            slider_holder.classList.add('details-slider-element-active');
            slider_holder.classList.remove('details-slider-element-inactive');
        }

        function closeSlider(button) {
            button.parentNode.classList.remove('details-slider-element-active');
            button.parentNode.classList.add('details-slider-element-inactive');
        }

        config1 = {
            type: "slide",
            pagination: false,
            // direction: 'ttb',
            // height: '80vh',
            wheel: true,
            autoScroll: false,
            lazyLoad: 'nearby',
            classes: {
                arrows: "splide__arrows slider-arrows",
                arrow: "splide__arrow slider-arrow",
                prev: "splide__arrow--prev slider-prev-arrow",
                next: "splide__arrow--next slider-next-arrow",
            },
            gap: 20,
            // fixedWidth: "65vw",
            fixedHeight: "80vh",
        };

        config2 = {
            arrows: false,
            fixedWidth: "9vw",
            fixedHeight: "16vh",
            gap: 10,
            rewind: true,
            pagination: false,
            cover: true,
            isNavigation: true,
            breakpoints: {
                600: {
                    fixedWidth: 60,
                    fixedHeight: 44,
                },
            },
        };

        const splide_detail_slider = new Splide("#image-slider", config1);
        const splide_detail_slider_thumb = new Splide("#thumbnail-slider", config2);

        splide_detail_slider.sync(splide_detail_slider_thumb);

        splide_detail_slider.mount(window.splide.Extensions);
        splide_detail_slider_thumb.mount(window.splide.Extensions);
    </script>
    <script src="{{ asset('/') }}homepage/js/userpanel/form-checker.js"></script>
@endsection
