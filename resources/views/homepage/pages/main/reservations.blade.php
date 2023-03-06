@extends('homepage.assets.body')

@section('page')
    <link rel="stylesheet" href="{{ asset('/') }}homepage/css/pages.css">

    <div class="page-content reservations-page">
        <div class="mini-header-reservations-page">
            <p class="pink-udline-hover active-link-pink" onclick="ChangePage(this , 'active-reservations-page')">
                Aktiv olan
            </p>
            <p class="pink-udline-hover" onclick="ChangePage(this , 'finished-reservations-page')">Bitmiş</p>
            <p class="pink-udline-hover" onclick="ChangePage(this , 'cancelled-reservations-page')">Ləğv olunmuş</p>
        </div>
        <div class="active-reservations-page tagged-visibility-div visible-div">
            @foreach ($reservations->where('status', 'active') as $reservation)
                @php
                    $home = DB::table('homes')
                        ->where('id', $reservation->home_id)
                        ->get()
                        ->first();
                    $home_images = DB::table('home_images')
                        ->where([
                            'home_id' => $home->uniq_id,
                            'image_type' => 'cover_image',
                        ])
                        ->get()
                        ->first();
                @endphp
                <div class="reservation-element-holder">
                    <div class="card-element">
                        <div class="card-element-image">
                            @if (isset($home_images->image_name))
                                <img src="{{ asset('storage/' . $home_images->image_name) }}" alt="Home Image"
                                    loading="lazy">
                            @else
                                <img src="{{ asset('/') }}homepage/images/homepage/cards/card_image1.png"
                                    alt="Home Image" loading="lazy">
                            @endif
                        </div>
                        <div class="card-element-details">
                            <div class="card-element-title flex dir-row g-15 j-spc-btw">
                                <div class="card-element-name">{{ $home->title }}</div>
                                <div class="card-element-rating flex dir-row">
                                    <p>{{ $home->rating }}</p>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 12.7522L4.19584 15.0438C4.02778 15.1508 3.85209 15.1966 3.66875 15.1813C3.48542 15.1661 3.325 15.105 3.1875 14.998C3.05 14.8911 2.94306 14.7575 2.86667 14.5974C2.79028 14.4367 2.775 14.257 2.82084 14.0584L3.82917 9.72718L0.46042 6.81676C0.307642 6.67927 0.212309 6.52251 0.17442 6.34651C0.13592 6.17113 0.147226 5.9994 0.208337 5.83135C0.269448 5.66329 0.361115 5.52579 0.483337 5.41885C0.605559 5.3119 0.773615 5.24315 0.987503 5.2126L5.43334 4.82301L7.15209 0.743848C7.22848 0.560515 7.34703 0.423014 7.50775 0.331348C7.66787 0.239681 7.83195 0.193848 8 0.193848C8.16806 0.193848 8.33245 0.239681 8.49317 0.331348C8.65328 0.423014 8.77153 0.560515 8.84792 0.743848L10.5667 4.82301L15.0125 5.2126C15.2264 5.24315 15.3945 5.3119 15.5167 5.41885C15.6389 5.52579 15.7306 5.66329 15.7917 5.83135C15.8528 5.9994 15.8644 6.17113 15.8265 6.34651C15.788 6.52251 15.6924 6.67927 15.5396 6.81676L12.1708 9.72718L13.1792 14.0584C13.225 14.257 13.2097 14.4367 13.1333 14.5974C13.0569 14.7575 12.95 14.8911 12.8125 14.998C12.675 15.105 12.5146 15.1661 12.3313 15.1813C12.1479 15.1966 11.9722 15.1508 11.8042 15.0438L8 12.7522Z"
                                            fill="#40918B" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card-element-options flex dir-row">
                                @foreach (json_decode($home->home_has) as $key => $value)
                                    @php
                                        switch ($key) {
                                            case 'guest_count':
                                                $name = $value . ' nəfər';
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
                                        <div class="detail-text">
                                            <p>{{ $name }}</p>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="card-element-info">
                                <p>{{ $home->info }}</p>
                            </div>
                        </div>
                        <div class="card-element-price-more-box">
                            <p>{{ $reservation->days }} gecə / <span>{{ $reservation->total_price }} azn</span></p>
                            <button class="more-button-reservation-element"
                                onclick="window.open('{{ route('home_detailed', ['id' => $home->uniq_id]) }}', '_self')">
                                Daha çox
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        <div class="finished-reservations-page tagged-visibility-div non-visible-div">
            @foreach ($reservations->where('status', 'finished') as $reservation)
                @php
                    $home = DB::table('homes')
                        ->where('id', $reservation->home_id)
                        ->get()
                        ->first();
                    $home_images = DB::table('home_images')
                        ->where([
                            'home_id' => $home->uniq_id,
                            'image_type' => 'cover_image',
                        ])
                        ->get()
                        ->first();
                @endphp
                <div class="reservation-element-holder">
                    <div class="card-element">
                        <div class="card-element-image">
                            @if (isset($home_images->image_name))
                                <img src="{{ asset('storage/' . $home_images->image_name) }}" alt="Home Image"
                                    loading="lazy">
                            @else
                                <img src="{{ asset('/') }}homepage/images/homepage/cards/card_image1.png"
                                    alt="Home Image" loading="lazy">
                            @endif
                        </div>
                        <div class="card-element-details">
                            <div class="card-element-title flex dir-row g-15 j-spc-btw">
                                <div class="card-element-name">{{ $home->title }}</div>
                                <div class="card-element-rating flex dir-row">
                                    <p>{{ $home->rating }}</p>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 12.7522L4.19584 15.0438C4.02778 15.1508 3.85209 15.1966 3.66875 15.1813C3.48542 15.1661 3.325 15.105 3.1875 14.998C3.05 14.8911 2.94306 14.7575 2.86667 14.5974C2.79028 14.4367 2.775 14.257 2.82084 14.0584L3.82917 9.72718L0.46042 6.81676C0.307642 6.67927 0.212309 6.52251 0.17442 6.34651C0.13592 6.17113 0.147226 5.9994 0.208337 5.83135C0.269448 5.66329 0.361115 5.52579 0.483337 5.41885C0.605559 5.3119 0.773615 5.24315 0.987503 5.2126L5.43334 4.82301L7.15209 0.743848C7.22848 0.560515 7.34703 0.423014 7.50775 0.331348C7.66787 0.239681 7.83195 0.193848 8 0.193848C8.16806 0.193848 8.33245 0.239681 8.49317 0.331348C8.65328 0.423014 8.77153 0.560515 8.84792 0.743848L10.5667 4.82301L15.0125 5.2126C15.2264 5.24315 15.3945 5.3119 15.5167 5.41885C15.6389 5.52579 15.7306 5.66329 15.7917 5.83135C15.8528 5.9994 15.8644 6.17113 15.8265 6.34651C15.788 6.52251 15.6924 6.67927 15.5396 6.81676L12.1708 9.72718L13.1792 14.0584C13.225 14.257 13.2097 14.4367 13.1333 14.5974C13.0569 14.7575 12.95 14.8911 12.8125 14.998C12.675 15.105 12.5146 15.1661 12.3313 15.1813C12.1479 15.1966 11.9722 15.1508 11.8042 15.0438L8 12.7522Z"
                                            fill="#40918B" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card-element-options flex dir-row">
                                @foreach (json_decode($home->home_has) as $key => $value)
                                    @php
                                        switch ($key) {
                                            case 'guest_count':
                                                $name = $value . ' nəfər';
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
                                        <div class="detail-text">
                                            <p>{{ $name }}</p>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="card-element-info">
                                <p>{{ $home->info }}</p>
                            </div>
                        </div>
                        <div class="card-element-price-more-box">
                            <p>{{ $reservation->days }} gecə / <span>{{ $reservation->total_price }} azn</span></p>
                            <button class="more-button-reservation-element"
                                onclick="window.open('{{ route('home_detailed', ['id' => $home->uniq_id]) }}', '_self')">
                                Daha çox
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        <div class="cancelled-reservations-page tagged-visibility-div non-visible-div">
            @foreach ($reservations->where('status', 'cancelled') as $reservation)
                @php
                    $home = DB::table('homes')
                        ->where('id', $reservation->home_id)
                        ->get()
                        ->first();
                    $home_images = DB::table('home_images')
                        ->where([
                            'home_id' => $home->uniq_id,
                            'image_type' => 'cover_image',
                        ])
                        ->get()
                        ->first();
                @endphp
                <div class="reservation-element-holder">
                    <div class="card-element">
                        <div class="card-element-image">
                            @if (isset($home_images->image_name))
                                <img src="{{ asset('storage/' . $home_images->image_name) }}" alt="Home Image"
                                    loading="lazy">
                            @else
                                <img src="{{ asset('/') }}homepage/images/homepage/cards/card_image1.png"
                                    alt="Home Image" loading="lazy">
                            @endif
                        </div>
                        <div class="card-element-details">
                            <div class="card-element-title flex dir-row g-15 j-spc-btw">
                                <div class="card-element-name">{{ $home->title }}</div>
                                <div class="card-element-rating flex dir-row">
                                    <p>{{ $home->rating }}</p>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 12.7522L4.19584 15.0438C4.02778 15.1508 3.85209 15.1966 3.66875 15.1813C3.48542 15.1661 3.325 15.105 3.1875 14.998C3.05 14.8911 2.94306 14.7575 2.86667 14.5974C2.79028 14.4367 2.775 14.257 2.82084 14.0584L3.82917 9.72718L0.46042 6.81676C0.307642 6.67927 0.212309 6.52251 0.17442 6.34651C0.13592 6.17113 0.147226 5.9994 0.208337 5.83135C0.269448 5.66329 0.361115 5.52579 0.483337 5.41885C0.605559 5.3119 0.773615 5.24315 0.987503 5.2126L5.43334 4.82301L7.15209 0.743848C7.22848 0.560515 7.34703 0.423014 7.50775 0.331348C7.66787 0.239681 7.83195 0.193848 8 0.193848C8.16806 0.193848 8.33245 0.239681 8.49317 0.331348C8.65328 0.423014 8.77153 0.560515 8.84792 0.743848L10.5667 4.82301L15.0125 5.2126C15.2264 5.24315 15.3945 5.3119 15.5167 5.41885C15.6389 5.52579 15.7306 5.66329 15.7917 5.83135C15.8528 5.9994 15.8644 6.17113 15.8265 6.34651C15.788 6.52251 15.6924 6.67927 15.5396 6.81676L12.1708 9.72718L13.1792 14.0584C13.225 14.257 13.2097 14.4367 13.1333 14.5974C13.0569 14.7575 12.95 14.8911 12.8125 14.998C12.675 15.105 12.5146 15.1661 12.3313 15.1813C12.1479 15.1966 11.9722 15.1508 11.8042 15.0438L8 12.7522Z"
                                            fill="#40918B" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card-element-options flex dir-row">
                                @foreach (json_decode($home->home_has) as $key => $value)
                                    @php
                                        switch ($key) {
                                            case 'guest_count':
                                                $name = $value . ' nəfər';
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
                                        <div class="detail-text">
                                            <p>{{ $name }}</p>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="card-element-info">
                                <p>{{ $home->info }}</p>
                            </div>
                        </div>
                        <div class="card-element-price-more-box">
                            <p>{{ $reservation->days }} gecə / <span>{{ $reservation->total_price }} azn</span></p>
                            <button class="more-button-reservation-element"
                                onclick="window.open('{{ route('home_detailed', ['id' => $home->uniq_id]) }}', '_self')">
                                Daha çox
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

    <script>
        function ChangePage(link, target) {
            document.querySelectorAll('.active-link-pink').forEach(element => {
                element.classList.remove('active-link-pink');
            });
            link.classList.toggle('active-link-pink');

            document.querySelectorAll('.tagged-visibility-div').forEach(element => {
                element.classList.remove('visible-div');
                element.classList.add('non-visible-div');
            });
            document.querySelector('.' + target).classList.remove('non-visible-div');
            document.querySelector('.' + target).classList.add('visible-div');
        }
    </script>
@endsection
