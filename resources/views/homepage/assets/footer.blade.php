<div class="modal-holder modal-holder-inactive" id="get-login-popup">
    <div class="modal modal-blurred-white modal-size-6-3">
        <div class="modal-body flex j-center a-center">
            <p>
                Allrent-də ev paylaşa bilmək üçün hesabınıza daxil
                olmalısınız
            </p>
        </div>
        <div class="modal-footer flex j-center g-05">
            <button class="modal-btn modal-green-btn" onclick="window.open('{{ route('show_login') }}' , '_self')">
                Daxil ol
            </button>
            <button class="modal-btn modal-red-btn" onclick="CloseModal(this)" data-target="get-login-popup">
                Bağla
            </button>
        </div>
    </div>
</div>

<footer>
    <div class="footer-holder">
        <div class="footer-left"></div>
        <div class="footer-right"></div>
    </div>
</footer>

<x-context-menu context-menu="context-menu title" />

<script src="{{ asset('/') }}homepage/js/userpanel/main.js"></script>
</body>

</html>
