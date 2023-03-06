<div class="card-element" onclick="window.open('{{ route('home_detailed', ['id' => $uuid]) }}' , '_blank')">
    <div class="card-element-image">
        @if (isset($home_images->image_name))
            <img src="{{ asset('storage/' . $home_images->image_name) }}" alt="Home Image" loading="lazy">
        @else
            <img src="{{ asset('/') }}homepage/images/homepage/cards/card_image1.png" alt="Home Image" loading="lazy">
        @endif
        <div class="card-element-fav">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.7454 2.9917C12.1331 2.9917 10.7554 4.14093 9.99845 4.93324C9.24153 4.14093 7.86691 2.9917 6.25538 2.9917C3.47768 2.9917 1.53845 4.92785 1.53845 7.69939C1.53845 10.7532 3.94691 12.7271 6.27691 14.6363C7.37691 15.5386 8.51538 16.4709 9.38845 17.5048C9.53538 17.6779 9.75076 17.7779 9.97691 17.7779H10.0215C10.2485 17.7779 10.4631 17.6771 10.6092 17.5048C11.4838 16.4709 12.6215 15.5379 13.7223 14.6363C16.0515 12.7279 18.4615 10.754 18.4615 7.69939C18.4615 4.92785 16.5223 2.9917 13.7454 2.9917Z"
                    fill="#FEFEFE" />
            </svg>
        </div>
    </div>
    <div class="flex dir-col g-15 card-details-holder">
        <div class="card-element-title flex dir-row j-spc-btw">
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
        <div class="card-element-details flex dir-row">
            <div class="card-element-price">{{ $home->min_price }} azn</div>
            <div class="card-element-duration">Günlük</div>
        </div>
    </div>
</div>
