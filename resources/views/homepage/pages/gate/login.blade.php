@include('homepage.assets.header')

<main>
    <form action="{{ route('login') }}" method="POST" onkeyup="checkForm(this)">
        @csrf
        <div class="login-page-holder">
            <div class="login-page-div">
                <p class="input-page-div-title">Giriş</p>
                <div class="login-page-input-holder">
                    <div class="input-holder" data-info="E-mail" data-helper="flankəsflankəsov@gmail.com">
                        <label for="email">Elektron poçt *</label>
                        <input class="checked-input" type="email" name="email" placeholder="E-mailiniz qeyd edin">
                    </div>
                    <div class="input-holder" data-info="Şifrə"
                        data-helper="6 simvoldan az olmayaraq böyük hərf , rəqəm və işarə kombinasiyası">
                        <label for="password">Şifrə *</label>
                        <input class="checked-input" type="password" name="password" placeholder="Şifrənizi daxil edin">
                    </div>
                </div>
                <div class="input-holder" data-error-tip="Formu təsdiqləmək üçün bütün inputlar doldurulmalıdır">
                    <button type="submit" class="submit-button-login submit-button-form" disabled>Daxil ol</button>
                </div>
                <p class="input-page-div-footer-text">
                    Hesabın yoxdur ?
                    <a class="green-udline-hover" href="{{ route('show_register') }}">Qeydiyyatdan keç</a>
                </p>
                <div class="login-page-or-divider">
                    <div class="gray-line-inside-or-divider"></div>
                    <div class="text-holder-inside-or-divider">
                        <p class="text-inside-or-divider">və ya</p>
                    </div>
                    <div class="gray-line-inside-or-divider"></div>
                </div>
                <div class="login-with-holder">
                    <img src="{{ asset('/') }}homepage/images/svg/login_with/facebook.svg" alt="Facebook">
                    <img src="{{ asset('/') }}homepage/images/svg/login_with/google.svg" alt="Google">
                    <img src="{{ asset('/') }}homepage/images/svg/login_with/apple.svg" alt="Apple">
                </div>
            </div>
        </div>
    </form>
</main>

<x-context-menu context-menu="context-menu title" />

<script src="{{ asset('/') }}homepage/js/userpanel/main.js"></script>
<script src="{{ asset('/') }}homepage/js/userpanel/form-checker.js"></script>
