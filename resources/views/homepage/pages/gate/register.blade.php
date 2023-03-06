@include('homepage.assets.header')

<main>
    <form action="{{ route('register') }}" method="POST" onkeyup="checkForm(this)">
        @csrf
        <div class="login-page-holder">
            <div class="login-page-div">
                <p class="input-page-div-title">Qeydiyyat</p>
                <div class="login-page-input-holder">
                    <div class="input-holder" data-info="Ad və Soyad" data-helper="Samir Samirov">
                        <label for="name">Ad və Soyad *</label>
                        <input class="checked-input" type="text" name="name"
                            placeholder="Ad və soyadınızı qeyd edin" pattern="([a-zA-Z]{3,30}\s*)+">
                    </div>
                    <div class="input-holder" data-info="E-mail" data-helper="flankəsflankəsov@gmail.com">
                        <label for="email">Elektron poçt *</label>
                        <input class="checked-input" type="email" name="email" placeholder="E-mailinizi qeyd edin">
                    </div>
                    <div class="input-holder" data-info="Mobil nömrə" data-helper="+994123456789">
                        <label for="phone">Mobil nömrə *</label>
                        <input class="checked-input" type="text" name="phone" placeholder="+994"
                            pattern="[+]{1}[0-9]{12}">
                    </div>
                    <div class="input-holder" data-info="Şifrə"
                        data-helper="6 simvoldan az olmayaraq böyük hərf , rəqəm və işarə kombinasiyası">
                        <label for="password">Şifrə *</label>
                        <input class="checked-input" type="password" name="password" placeholder="Şifrənizi daxil edin">
                    </div>
                </div>
                <div class="input-holder" data-error-tip="Formu təsdiqləmək üçün bütün inputlar doldurulmalıdır">
                    <button type="submit" class="submit-button-login submit-button-form" disabled>Hesab yarat</button>
                </div>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                        fill="#1D1D1D" />
                    <path
                        d="M12 10C12.5523 10 13 10.4477 13 11V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V11C11 10.4477 11.4477 10 12 10Z"
                        fill="#1D1D1D" />
                    <path
                        d="M13.5 7.5C13.5 8.32843 12.8284 9 12 9C11.1716 9 10.5 8.32843 10.5 7.5C10.5 6.67157 11.1716 6 12 6C12.8284 6 13.5 6.67157 13.5 7.5Z"
                        fill="#1D1D1D" />
                </svg>
                <p class="input-page-div-footer-text">
                    Qeydiyyatdan keçdiyiniz halda
                    <a href="#" class="blue-hyper-link green-udline-hover">şərtlər & qaydalar</a>
                    və
                    <a href="#" class="blue-hyper-link green-udline-hover">gizlilik siyasəti</a>
                    ilə razılaşmış olacaqsınız
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
