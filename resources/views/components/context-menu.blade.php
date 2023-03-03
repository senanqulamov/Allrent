<div class="context-menu-holder">
    <div class="context-menu-list">
        <div class="context-menu-element">
            <img src="{{ asset('/') }}homepage/images/svg/world.svg" alt="Language Svg">
            asdsd
        </div>
        <div class="context-menu-element">
            <img src="{{ asset('/') }}homepage/images/svg/world.svg" alt="Language Svg">
            asdsd
        </div>
        <div class="context-menu-element">
            <img src="{{ asset('/') }}homepage/images/svg/world.svg" alt="Language Svg">
            asdsd
        </div>
        <div class="context-menu-element">
            <img src="{{ asset('/') }}homepage/images/svg/world.svg" alt="Language Svg">
            asdsd
        </div>
        <div class="context-menu-element">
            <img src="{{ asset('/') }}homepage/images/svg/world.svg" alt="Language Svg">
            asdsd
        </div>
        @if (Auth::user())
            <div class="context-menu-element" onclick="window.open('{{ route('logout') }}' , '_self')">
                <img src="{{ asset('/') }}homepage/images/svg/world.svg" alt="Language Svg">
                Log out
            </div>
        @endif
    </div>
</div>
