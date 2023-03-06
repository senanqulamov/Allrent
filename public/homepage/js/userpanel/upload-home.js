var header = document.querySelector(".header-right");

var entrance_page = document.querySelector(".upload-home-page-holder-ent");
var one_page = document.querySelector(".upload-home-page-holder-one");
var sec_page = document.querySelector(".upload-home-page-holder-sec");
var third_page = document.querySelector(".upload-home-page-holder-third");
var map_page = document.querySelector(".upload-home-page-holder-map");
<<<<<<< HEAD
var calendar_page = document.querySelector(".upload-home-page-holder-calendar");
var images_page = document.querySelector(".upload-home-page-holder-images");
var price_page = document.querySelector(".upload-home-page-holder-price");
var end_page = document.querySelector(".upload-home-page-holder-end");

var image_form = document.querySelector("#image-upload");

=======
var details_page = document.querySelector(".upload-home-page-holder-details");
var end_page = document.querySelector(".upload-home-page-holder-end");

>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
var dt = new Date().getTime();
var uuid = "xxxx-xxxx-xxxx-xxxx".replace(/[xy]/g, function (c) {
    var r = (dt + Math.random() * 16) % 16 | 0;
    dt = Math.floor(dt / 16);
    return (c == "x" ? r : (r & 0x3) | 0x8).toString(16);
});
<<<<<<< HEAD
image_form.querySelector('input[name="home_id"]').value = uuid;
=======
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8

function startUpload() {
    window.scrollTo(0, 0);

    // setTimeout(() => {
    //     circle_step.classList.remove("step-item-active");
    //     circle_step.classList.add("step-item-inactive");
    //     line_step.classList.remove("line-step-item-active");
    // }, 1000);

    header.classList.remove("visible-div");
    header.classList.add("non-visible-div");

    entrance_page.classList.remove("visible-div");
    entrance_page.classList.add("non-visible-div");

    one_page.classList.remove("non-visible-div");
    one_page.classList.add("visible-div");
}

function SecondPage(url) {
    var object_title = document.querySelector("#object_title").value;
    var object_description = document.querySelector(
        "#object_description"
    ).value;
    var category = document.querySelector('input[name="category_value"]').value;

    console.log(object_title, object_description, category);

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            object_title: object_title,
            object_description: object_description,
            category: category,
            uuid: uuid,
        },
        success: function (data) {
            console.log(data);
        },
    });

    window.scrollTo(0, 0);

    one_page.classList.remove("visible-div");
    one_page.classList.add("non-visible-div");

    sec_page.classList.remove("non-visible-div");
    sec_page.classList.add("visible-div");
}

function ThirdPage(url) {
    var guest_count = document.querySelector('input[name="guest_count"]').value;
    var bed_count = document.querySelector('input[name="bed_count"]').value;
    var bedroom_count = document.querySelector(
        'input[name="bedroom_count"]'
    ).value;
    var additional_room_count = document.querySelector(
        'input[name="additional_room_count"]'
    ).value;
    var double_bed_count = document.querySelector(
        'input[name="double_bed_count"]'
    ).value;
    var bathroom_count = document.querySelector(
        'input[name="bathroom_count"]'
    ).value;

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            uuid: uuid,
            guest_count: guest_count,
            bed_count: bed_count,
            bedroom_count: bedroom_count,
            additional_room_count: additional_room_count,
            double_bed_count: double_bed_count,
            bathroom_count: bathroom_count,
        },
        success: function (data) {
            console.log(data);
        },
    });

    window.scrollTo(0, 0);

    sec_page.classList.remove("visible-div");
    sec_page.classList.add("non-visible-div");

    third_page.classList.remove("non-visible-div");
    third_page.classList.add("visible-div");
}

function MapPage(url) {
<<<<<<< HEAD
    var home_has_inputs = document.querySelectorAll(
        ".checkbox_hidden_input_home_has"
    );
    var home_has = [];
    home_has_inputs.forEach((element) => {
        if (element.value == "true") {
            var input_name = element.getAttribute("name");
            home_has.push(input_name);
        }
    });
    var animal_perm = document.querySelector('input[name="animal_perm"]').value;
    var cigarette_perm = document.querySelector(
        'input[name="cigarette_perm"]'
    ).value;
    var children_perm = document.querySelector(
        'input[name="children_perm"]'
    ).value;
    var party_perm = document.querySelector('input[name="party_perm"]').value;
    var marriage_perm = document.querySelector(
        'input[name="marriage_perm"]'
    ).value;
    var entrance_time_1 = document.querySelector("#entrance_time_1").value;
    var entrance_time_2 = document.querySelector("#entrance_time_2").value;
    var exit_time_1 = document.querySelector("#exit_time_1").value;
    var exit_time_2 = document.querySelector("#exit_time_2").value;

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            uuid: uuid,
            home_has: home_has,
            animal_perm: animal_perm,
            cigarette_perm: cigarette_perm,
            children_perm: children_perm,
            party_perm: party_perm,
            marriage_perm: marriage_perm,
            entrance_time_1: entrance_time_1,
            entrance_time_2: entrance_time_2,
            exit_time_1: exit_time_1,
            exit_time_2: exit_time_2,
        },
        success: function (data) {
            console.log(data);
        },
    });
=======

    // $.ajax({
    //     type: "POST",
    //     url: url,
    //     headers: {
    //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    //     },
    //     data: {
    //         uuid: uuid,
    //     },
    //     success: function (data) {
    //         console.log(data);
    //     },
    // });
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8

    window.scrollTo(0, 0);

    third_page.classList.remove("visible-div");
    third_page.classList.add("non-visible-div");

    map_page.classList.remove("non-visible-div");
    map_page.classList.add("visible-div");
}

<<<<<<< HEAD
function CalendarPage(url) {
=======
function DetailsPage() {
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
    window.scrollTo(0, 0);

    map_page.classList.remove("visible-div");
    map_page.classList.add("non-visible-div");

<<<<<<< HEAD
    calendar_page.classList.remove("non-visible-div");
    calendar_page.classList.add("visible-div");
}

function ImagesPage(url) {
    var home_reservation_start_date = document.querySelector(
        "#home_reservation_start_date"
    ).value;

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            uuid: uuid,
            home_reservation_start_date: home_reservation_start_date,
        },
        success: function (data) {
            console.log(data);
        },
    });

    window.scrollTo(0, 0);

    calendar_page.classList.remove("visible-div");
    calendar_page.classList.add("non-visible-div");

    images_page.classList.remove("non-visible-div");
    images_page.classList.add("visible-div");
}

function PricePage() {
    window.scrollTo(0, 0);

    images_page.classList.remove("visible-div");
    images_page.classList.add("non-visible-div");

    price_page.classList.remove("non-visible-div");
    price_page.classList.add("visible-div");
}

function EndPage(url) {
    var tax_by_allrent = document.querySelector(
        'input[name="tax_by_allrent"]'
    ).value;
    var tax_by_user = document.querySelector('input[name="tax_by_user"]').value;
    var min_price = document.querySelector('input[name="min_price"]').value;

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            uuid: uuid,
            tax_by_allrent: tax_by_allrent,
            tax_by_user: tax_by_user,
            min_price: min_price,
        },
        success: function (data) {
            console.log(data);
        },
    });

    window.scrollTo(0, 0);

    price_page.classList.remove("visible-div");
    price_page.classList.add("non-visible-div");
=======
    details_page.classList.remove("non-visible-div");
    details_page.classList.add("visible-div");
}

function EndPage() {
    window.scrollTo(0, 0);

    details_page.classList.remove("visible-div");
    details_page.classList.add("non-visible-div");
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8

    end_page.classList.remove("non-visible-div");
    end_page.classList.add("visible-div");
}

function ToBackPage(back_page, actual_page) {
    window.scrollTo(0, 0);

    document.querySelector("." + actual_page).classList.add("non-visible-div");
    document.querySelector("." + actual_page).classList.remove("visible-div");

    document.querySelector("." + back_page).classList.remove("non-visible-div");
    document.querySelector("." + back_page).classList.add("visible-div");

    if (back_page == "upload-home-page-holder-ent") {
        header.classList.remove("non-visible-div");
        header.classList.add("visible-div");
    }
<<<<<<< HEAD
=======

    // object_title = "";
    // object_description = "";
    // category = "";
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
}

function SelectCategory(category) {
    var holder = category.parentNode;
    var categories = holder.querySelectorAll(
        ".upload-home-page-category-elm-one"
    );
    categories.forEach((element) => {
        element.classList.remove("active-category-item");
    });

    category.classList.toggle("active-category-item");

    var category_name = category.getAttribute("data-value");
    document.querySelector('input[name="category_value"]').value =
        category_name;

    var form = holder.parentNode.parentNode;

    CheckIputsHomeUpload(form);
}

// Custom functions (JOY :D)
function MinusCount(minus_btn) {
    var input = minus_btn.parentNode.querySelector(".counter-input-sec");
    var text = minus_btn.parentNode.querySelector(".counter-text-sec");

    if (parseInt(input.value) >= 1) {
        input.value = parseInt(input.value) - 1;
        text.innerText = parseInt(text.innerText) - 1;
    }

    if (parseInt(input.value) == 0) {
        minus_btn.classList.add("not-active-minus-count-sec");
    }
}

function PlusCount(plus_btn) {
    var input = plus_btn.parentNode.querySelector(".counter-input-sec");
    var text = plus_btn.parentNode.querySelector(".counter-text-sec");

    input.value = parseInt(input.value) + 1;
    text.innerText = parseInt(text.innerText) + 1;

    var minus_btn = plus_btn.parentNode.querySelector(
        ".upload-home-page-count-min-input"
    );

    if (
        parseInt(input.value) >= 1 &&
        minus_btn.classList.contains("not-active-minus-count-sec")
    ) {
        minus_btn.classList.remove("not-active-minus-count-sec");
    }
}

function CheckBoxToggle(box) {
    var checbox = box.querySelector(".checkbox-input-elm");
    var checkbox_hidden_input = box.querySelector(".checkbox_hidden_input");
    checbox.classList.toggle("active-checkbox-input-elm");

    if (checkbox_hidden_input.value == "false") {
        checkbox_hidden_input.value = "true";
    } else {
        checkbox_hidden_input.value = "false";
    }
}
<<<<<<< HEAD

var tax_by = "";

function CheckBoxTogglePricePage(box) {
    var checbox = box.querySelector(".checkbox-input-elm");
    var checkbox_hidden_input = box.querySelector(".checkbox_hidden_input");
    checbox.classList.toggle("active-checkbox-input-elm");

    if (checkbox_hidden_input.value == "false") {
        checkbox_hidden_input.value = "true";
    } else {
        checkbox_hidden_input.value = "false";
    }

    //! toggle other checkbox (radio)
    if (checkbox_hidden_input.name == "tax_by_allrent") {
        var input = document.querySelector('input[name="tax_by_user"]');
        tax_by = "allrent";
    } else {
        var input = document.querySelector('input[name="tax_by_allrent"]');
        tax_by = "user";
    }
    input.parentNode.classList.remove("active-checkbox-input-elm");
    input.value = "false";

    //! Check if min price written
    var min_price_input = document.querySelector('input[name="min_price"]');
    if (min_price_input.value > 0) {
        CheckPrice(min_price_input);
    }
}

// Calendar
const DateTime = easepick.DateTime;
const picker = new easepick.create({
    element: document.getElementById("home_reservation_start_date"),
    css: [
        "https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css",
        "/homepage/lib/calendar/calendar_custom.css",
    ],
    inline: true,
    calendars: 2,
    grid: 2,
    readonly: false,
    setup(picker) {
        picker.on("select", (e) => {
            const { view, date, target } = e.detail;
            console.log(e);
        });
    },
});

// Image Upload
var cover_image_count = 0;
var bed_room_count = 0;
var living_room_count = 0;
var bath_room_count = 0;
var kitchen_count = 0;

function ShowUploadImage(input, url) {
    if (input.getAttribute("data-change") == "true") {
        UploadImage(input, url);
    } else {
        let file = input.files[0];
        let reader = new FileReader();
        var image_preview = input.parentNode.querySelector(
            ".preview-image-for-input"
        );
        var name = input.getAttribute("data-name");
        var text = input.getAttribute("data-text");
        var image_count = input.getAttribute("data-count");
        var function_name = "ShowUploadImage";
        var change = "false";
        var title_name = input.getAttribute("data-title");

        image_count = parseInt(image_count) + 1;
        input.setAttribute("data-change", "true");

        if (parseInt(image_count) == 2) {
            var title =
                `
                <div class="upload-home-page-image-collage-title">
                    <p>` +
                title_name +
                `</p>
                </div>
            `;
            input.parentNode.parentNode.insertAdjacentHTML(
                "beforebegin",
                title
            );
        }
        if (parseInt(image_count) < 6) {
            var label =
                `
            <label for="` +
                name +
                `_` +
                image_count +
                `" class="upload-home-page-image-input-elm">
                <div class="upload-home-page-inside-image-input-elm">
                    <svg width="128" height="88" viewBox="0 0 128 88" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 88H128V0H0V88ZM4 84V74.912L47.904 36.732L72.216 61.044L84.318 44.908L124 78.918V84H4ZM124 4V73.652L83.68 39.092L71.782 54.956L48.096 31.268L4 69.61V4H124Z"
                            fill="#1D1D1D" />
                    </svg>
                    <p>` +
                text +
                `</p>
                        </div>
                        <input type="file" name="` +
                name +
                `[]" id="` +
                name +
                `_` +
                image_count +
                `" data-name="` +
                name +
                `"data-text="` +
                text +
                `" data-count="` +
                image_count +
                `" data-change="` +
                change +
                `"  onchange="` +
                function_name +
                `(this , '` +
                url +
                `')" hidden>
                    <img class="non-active-preview-image preview-image-for-input" width="100%"
                        height="100%">
            </label>
        `;
            input.parentNode.parentNode.insertAdjacentHTML("beforeend", label);
        }

        reader.readAsDataURL(file);
        reader.onload = function () {
            image_preview.src = reader.result;
            if (input.getAttribute("name") == "cover_image[]") {
                var img = document.querySelector(
                    ".result-card-img-upload-home-page"
                );
                img.src = reader.result;
            }
        };
        image_preview.classList.remove("non-active-preview-image");
        image_preview.classList.add("active-preview-image");

        var formData = new FormData(image_form);
        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                console.log(data);
            },
            error: function (data) {
                console.log(data);
            },
        });

        switch (name) {
            case "cover_image":
                cover_image_count += 1;
                break;
            case "bed_room":
                bed_room_count += 1;
                break;
            case "living_room":
                living_room_count += 1;
                break;
            case "bath_room":
                bath_room_count += 1;
                break;
            case "kitchen":
                kitchen_count += 1;
                break;
            default:
                break;
        }

        if (
            cover_image_count > 0 &&
            bed_room_count > 0 &&
            living_room_count > 0 &&
            bath_room_count > 0 &&
            kitchen_count > 0
        ) {
            var sbmt_btn = document.querySelector(
                ".image-submit-button-upload-home-page"
            );
            sbmt_btn.removeAttribute("disabled");
            sbmt_btn.parentNode.removeAttribute("data-error-tip");
        }
    }
}

function UploadImage(input, url) {
    let file = input.files[0];
    let reader = new FileReader();
    var image_preview = input.parentNode.querySelector(
        ".preview-image-for-input"
    );
    reader.readAsDataURL(file);
    reader.onload = function () {
        image_preview.src = reader.result;
        if (input.getAttribute("name") == "cover_image[]") {
            var img = document.querySelector(
                ".result-card-img-upload-home-page"
            );
            img.src = reader.result;
        }
    };
    image_preview.classList.remove("non-active-preview-image");
    image_preview.classList.add("active-preview-image");

    var form = document.querySelector("#image-upload");
    var formData = new FormData(form);

    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: (data) => {
            console.log(data);
        },
        error: function (data) {
            console.log(data);
        },
    });
}

function CheckPrice(input) {

    if (tax_by == "allrent") {
        var min_price = parseInt(input.value) - parseInt(input.value) * 0.24;
    } else {
        var min_price = parseInt(input.value) - parseInt(input.value) * 0.14;
    }

    var min_price_span = document.querySelector(".min-price-span");
    var calculation_policy_div = document.querySelector(
        ".calculation-policy-holder"
    );

    var card_element_div = document.querySelector(".card-element");
    var submit_button = document.querySelector(
        ".upload-home-page-submit-button-price"
    );

    if (parseInt(input.value) >= 40) {
        min_price_span.classList.remove("active-min-price-span");
        min_price_span.innerHTML =
            `Sizin əldə edəcəyiniz məbləğ <b>` + min_price + ` AZN</b> -dir`;

        calculation_policy_div.classList.add("visible-div");
        calculation_policy_div.classList.remove("non-visible-div");

        card_element_div.classList.add("visible-div");
        card_element_div.classList.remove("non-visible-div");

        document.querySelector(
            ".card-element-price-upload-home-page"
        ).innerText = input.value;
        input.setAttribute("data-price-min", "true");
    } else {
        min_price_span.classList.add("active-min-price-span");
        min_price_span.innerHTML = `Günlük minimal məbləğ 40 AZN-dir`;
        input.setAttribute("data-price-min", "false");
    }

    if (input.getAttribute("data-price-min") == "true") {
        submit_button.removeAttribute("disabled");
        submit_button.parentNode.removeAttribute("data-error-tip");
    } else {
        submit_button.setAttribute("disabled", "disabled");
        submit_button.parentNode.setAttribute(
            "data-error-tip",
            "Bütün məlumatlar düzgün yerləşdirilməlidir"
        );
    }

    console.log(input.value);
}
=======
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
