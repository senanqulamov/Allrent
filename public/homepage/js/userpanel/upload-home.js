var header = document.querySelector(".header-right");

var entrance_page = document.querySelector(".upload-home-page-holder-ent");
var one_page = document.querySelector(".upload-home-page-holder-one");
var sec_page = document.querySelector(".upload-home-page-holder-sec");
var third_page = document.querySelector(".upload-home-page-holder-third");
var map_page = document.querySelector(".upload-home-page-holder-map");
var details_page = document.querySelector(".upload-home-page-holder-details");
var end_page = document.querySelector(".upload-home-page-holder-end");

var dt = new Date().getTime();
var uuid = "xxxx-xxxx-xxxx-xxxx".replace(/[xy]/g, function (c) {
    var r = (dt + Math.random() * 16) % 16 | 0;
    dt = Math.floor(dt / 16);
    return (c == "x" ? r : (r & 0x3) | 0x8).toString(16);
});

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

    window.scrollTo(0, 0);

    third_page.classList.remove("visible-div");
    third_page.classList.add("non-visible-div");

    map_page.classList.remove("non-visible-div");
    map_page.classList.add("visible-div");
}

function DetailsPage() {
    window.scrollTo(0, 0);

    map_page.classList.remove("visible-div");
    map_page.classList.add("non-visible-div");

    details_page.classList.remove("non-visible-div");
    details_page.classList.add("visible-div");
}

function EndPage() {
    window.scrollTo(0, 0);

    details_page.classList.remove("visible-div");
    details_page.classList.add("non-visible-div");

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

    // object_title = "";
    // object_description = "";
    // category = "";
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
