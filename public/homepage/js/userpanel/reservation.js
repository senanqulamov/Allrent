var home_details_page = document.querySelector(".home-details-page");
var home_reservation_page = document.querySelector(".home-reservation-page");
var home_reservation_user_details = document.querySelector(
    ".form-holder-reservation"
);
var home_reservation_user_details_buttons = document.querySelector(
    ".reservation-page-nav-buttons"
);
var home_reservation_card_details = document.querySelector(
    ".reservation-page-card-details"
);
var home_reservation_card_details_buttons = document.querySelector(
    ".reservation-page-card-nav-buttons"
);
var circle_step = document.querySelector(".step-2-reservation");
var line_step = document.querySelector(".line-step-item-1");
var user_guests = document.querySelector("#user_guests");

function OpenReservation(button) {
    window.scrollTo(0, 0);

    home_details_page.classList.remove("visible-div");
    home_details_page.classList.add("non-visible-div");

    home_reservation_page.classList.remove("non-visible-div");
    home_reservation_page.classList.add("visible-div");
}

function BackToDetails() {
    window.scrollTo(0, 0);

    home_details_page.classList.remove("non-visible-div");
    home_details_page.classList.add("visible-div");

    home_reservation_page.classList.remove("visible-div");
    home_reservation_page.classList.add("non-visible-div");
}

function OpenCardDetails() {
    window.scrollTo(0, 0);

    setTimeout(() => {
        circle_step.classList.remove("step-item-inactive");
        circle_step.classList.add("step-item-active");
        line_step.classList.add("line-step-item-active");
    }, 1000);

    home_reservation_user_details_buttons.classList.remove("visible-div");
    home_reservation_user_details_buttons.classList.add("non-visible-div");

    home_reservation_user_details.classList.remove("visible-div");
    home_reservation_user_details.classList.add("non-visible-div");

    home_reservation_card_details.classList.remove("non-visible-div");
    home_reservation_card_details.classList.add("visible-div");

    home_reservation_card_details_buttons.classList.remove("non-visible-div");
    home_reservation_card_details_buttons.classList.add("visible-div");

    document.querySelector('input[name="name"]').value = document.querySelector(
        'input[name="user_name"]'
    ).value;
    document.querySelector('input[name="phone"]').value =
        document.querySelector('input[name="user_phone"]').value;
    document.querySelector('input[name="email"]').value =
        document.querySelector('input[name="user_email"]').value;
    document.querySelector('input[name="wish"]').value = document.querySelector(
        'textarea[name="user_wish"]'
    ).value;
    document.querySelector('input[name="accept_rules"]').value =
        document.querySelector('input[name="user_accept_rules"]').value;
    document.querySelector('input[name="gender"]').value =
        document.querySelector('input[name="user_gender"]').value;
    document.querySelector('input[name="guests"]').value =
        user_guests.options[user_guests.options.selectedIndex].innerText;

    // Dates
    document.querySelector('input[name="start_date"]').value =
        document.querySelector(".date-inside-date-box-start").innerText;
    document.querySelector('input[name="end_date"]').value =
        document.querySelector(".date-inside-date-box-end").innerText;
}

function BackToUserDetails() {
    window.scrollTo(0, 0);

    setTimeout(() => {
        circle_step.classList.remove("step-item-active");
        circle_step.classList.add("step-item-inactive");
        line_step.classList.remove("line-step-item-active");
    }, 1000);

    home_reservation_user_details_buttons.classList.remove("non-visible-div");
    home_reservation_user_details_buttons.classList.add("visible-div");

    home_reservation_user_details.classList.remove("non-visible-div");
    home_reservation_user_details.classList.add("visible-div");

    home_reservation_card_details.classList.remove("visible-div");
    home_reservation_card_details.classList.add("non-visible-div");

    home_reservation_card_details_buttons.classList.remove("visible-div");
    home_reservation_card_details_buttons.classList.add("non-visible-div");
}

// gender radio button function
function ChangeGender(radio_button, gender) {
    if (!radio_button.classList.contains("active-radio-reservation")) {
        var actual_active = document.querySelector(".active-radio-reservation");
        actual_active.classList.remove("active-radio-reservation");
        actual_active.classList.add("inactive-radio-reservation");

        radio_button.classList.add("active-radio-reservation");
        radio_button.classList.remove("inactive-radio-reservation");

        document.querySelector('input[name="user_gender"]').value = gender;
    }
}

// Accept rules function
function AcceptRules(label) {
    label.classList.toggle("active-accept-rules");
    check = document.querySelector('input[name="accept_rules"]');

    if (check.value == "on") {
        check.value = "off";
    } else {
        check.value = "on";
    }
}

// Card inputs function
$(function () {
    $(".cc-number").formatCardNumber();
    $(".cc-expires").formatCardExpiry();
    $(".cc-cvc").formatCardCVC();
});
