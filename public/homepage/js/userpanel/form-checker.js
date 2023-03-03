let timer;
function checkForm(form) {
    clearTimeout(timer);
    timer = setTimeout(() => {
        checkInputs(form);
    }, 1900);
}

function checkCardForm(form) {
    clearTimeout(timer);
    timer = setTimeout(() => {
        checkCardInputs(form);
    }, 1900);
}

function CheckIputsHomeUpload(form) {
    clearTimeout(timer);
    timer = setTimeout(() => {
        CheckIputsHomeUpload_n(form);
    }, 1900);
}


function checkInputs(custom_form) {
    var inputs = custom_form.querySelectorAll(".checked-input");
    var submit_button = document.querySelector(".submit-button-form");
    var validity = inputs.length;

    inputs.forEach((input) => {
        var info = input.parentNode.getAttribute("data-info");
        var helper = input.parentNode.getAttribute("data-helper");
        info =
            "Daxil etdiyiniz " +
            info +
            " yalnışdır , zəhmət olmasa yenidən yoxlayın. " +
            info +
            " " +
            helper +
            " şəklində olmalıdır";

        if (!input.checkValidity()) {
            input.parentNode.setAttribute("data-error-tip", info);
            validity = 0;
            input.parentNode.classList.add("invalid-input");
        } else {
            input.parentNode.removeAttribute("data-error-tip");
            input.parentNode.classList.remove("invalid-input");
        }

        if (!input.value) {
            validity = 0;
        }
    });

    if (validity == inputs.length) {
        submit_button.removeAttribute("disabled");
        submit_button.parentNode.removeAttribute("data-error-tip");
    } else {
        submit_button.setAttribute("disabled", "");
        submit_button.parentNode.setAttribute(
            "data-error-tip",
            "Formu təsdiqləmək üçün bütün inputlar düzgün yazılmalıdır"
        );
    }
}

function checkCardInputs(custom_form) {
    var inputs = custom_form.querySelectorAll(".checked-input");
    var submit_button = document.querySelector(".submit-button-card-form");
    var validity = inputs.length;

    inputs.forEach((input) => {
        var info = input.parentNode.getAttribute("data-info");
        var helper = input.parentNode.getAttribute("data-helper");
        info =
            "Daxil etdiyiniz " +
            info +
            " yalnışdır , zəhmət olmasa yenidən yoxlayın. " +
            info +
            " " +
            helper +
            " şəklində olmalıdır";

        if (!input.checkValidity()) {
            input.parentNode.setAttribute("data-error-tip", info);
            validity = 0;
            input.parentNode.classList.add("invalid-input");
        } else {
            input.parentNode.removeAttribute("data-error-tip");
            input.parentNode.classList.remove("invalid-input");
        }

        if (!input.value) {
            validity = 0;
        }
    });

    if (validity == inputs.length) {
        submit_button.removeAttribute("disabled");
        submit_button.parentNode.removeAttribute("data-error-tip");
    } else {
        submit_button.setAttribute("disabled", "");
        submit_button.parentNode.setAttribute(
            "data-error-tip",
            "Formu təsdiqləmək üçün bütün inputlar düzgün yazılmalıdır"
        );
    }
}

function CheckIputsHomeUpload_n(custom_form) {
    var inputs = custom_form.querySelectorAll(".checked-input");
    var submit_button = document.querySelector(".submit-button-form");
    var validity = inputs.length;

    inputs.forEach((input) => {
        var info = input.parentNode.getAttribute("data-info");

        if (!input.checkValidity()) {
            input.parentNode.setAttribute("data-error-tip", info);
            validity = 0;
            input.parentNode.classList.add("invalid-input");
        } else {
            input.parentNode.removeAttribute("data-error-tip");
            input.parentNode.classList.remove("invalid-input");
        }

        if (!input.value) {
            validity = 0;
        }
    });

    if (validity == inputs.length) {
        submit_button.removeAttribute("disabled");
        submit_button.parentNode.removeAttribute("data-error-tip");
    } else {
        submit_button.setAttribute("disabled", "");
        submit_button.parentNode.setAttribute(
            "data-error-tip",
            "Formu təsdiqləmək üçün bütün inputlar doldurulmalıdır. Doldurulmamış inputlar var"
        );
    }
}
