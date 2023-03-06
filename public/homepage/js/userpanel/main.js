/* ---------------------------------|.|----------------------------------- */
/**  Localization select starts here **/

function custom_select(select) {
    var selected_opt = select.querySelector("[d-select-selected]");

    selected_opt.classList.add("d-none");
    select.classList.add("language-select-open");

    window.addEventListener("click", function (e) {
        console.clear();
        console.log("asdsadasd");

        if (!select.contains(e.target)) {
            select.classList.remove("language-select-open");
            setTimeout(() => {
                selected_opt.classList.remove("d-none");
            }, 100);
        }
    });
}

/**  Localization select ends here **/
/* ---------------------------------|.|----------------------------------- */

/* ---------------------------------|.|----------------------------------- */
/**  Search Component starts here **/

var search_input = document.querySelector(".search-element-input input");
if (search_input) {
    search_input.addEventListener("focus", function () {
        document
            .querySelector(".search-bar-left")
            .classList.add("search-bar-left-active");
    });
    search_input.addEventListener("focusout", function () {
        document
            .querySelector(".search-bar-left")
            .classList.remove("search-bar-left-active");
    });
}

/**  Search Component ends here **/
/* ---------------------------------|.|----------------------------------- */

/* ---------------------------------|.|----------------------------------- */
/**  Context Menu starts here **/
const main_body = document.querySelector("main");
const context_menu = document.querySelector(".context-menu-holder");
var context_menu_elements = context_menu.querySelectorAll(
    ".context-menu-element"
);

window.addEventListener("contextmenu", (e) => {
    e.preventDefault();
});

main_body.addEventListener("contextmenu", (e) => {
    console.clear();
    const origin = {
        left: e.pageX,
        top: e.pageY,
    };
    openContextMenu(origin);
});

main_body.addEventListener("click", (e) => {
    closeContextMenu();
});

window.addEventListener("scroll", (e) => {
    closeContextMenu();
<<<<<<< HEAD

    var menu_list = document.querySelectorAll(".profile-context-menu");
    menu_list.forEach((element) => {
        element.classList.remove("active-profile-context-menu");
        element.classList.add("non-active-profile-context-menu");
    });

    menu = document.querySelector(".profile-context-menu-main");
    menu.setAttribute("disabled", "false");
=======
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
});

function openContextMenu(origin) {
    context_menu.classList.add("context-menu-active");
    context_menu.style.left = `${origin.left}px`;
    context_menu.style.top = `${origin.top}px`;

    var i = 0;
    context_menu_elements.forEach((element) => {
        setTimeout(() => {
            element.classList.add("context-menu-element-active");
        }, 90 * i);
        i++;
    });
    i = 0;
}

function closeContextMenu() {
    context_menu.style.left = `0px`;
    context_menu.style.top = `0px`;
    context_menu.classList.remove("context-menu-active");

    context_menu_elements.forEach((element) => {
        element.classList.remove("context-menu-element-active");
    });
}

<<<<<<< HEAD
function ToggleProfileContexMenu() {
    menu = document.querySelector(".profile-context-menu-main");

    if (menu.getAttribute("disabled") == "true") {
        return;
    }

    if (menu.classList.contains("active-profile-context-menu")) {
        menu.classList.remove("active-profile-context-menu");
        menu.classList.add("non-active-profile-context-menu");
    } else {
        menu.classList.add("active-profile-context-menu");
        menu.classList.remove("non-active-profile-context-menu");
    }
}
function OpenProfileContextMenu(button, target) {
    var menu_list = document.querySelectorAll(".profile-context-menu");
    menu_list.forEach((element) => {
        element.classList.remove("active-profile-context-menu");
        element.classList.add("non-active-profile-context-menu");
    });

    var menu = document.querySelector("." + target);
    var main_menu = document.querySelector(".profile-context-menu-main");

    if (main_menu.getAttribute("disabled") == "false") {
        main_menu.setAttribute("disabled", "true");
    } else {
        main_menu.setAttribute("disabled", "false");
    }

    if (menu.classList.contains("active-profile-context-menu")) {
        menu.classList.remove("active-profile-context-menu");
        menu.classList.add("non-active-profile-context-menu");
    } else {
        menu.classList.add("active-profile-context-menu");
        menu.classList.remove("non-active-profile-context-menu");
    }
}

=======
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
/**  Context Menu ends here **/
/* ---------------------------------|.|----------------------------------- */

/* ---------------------------------|.|----------------------------------- */
/**  Context Menu starts here **/

document.addEventListener("contextmenu", (event) => event.preventDefault());

document.onkeydown = function (e) {
    // disable F12 key
    // if (e.keyCode == 123) {
    //     return false;
    // }

    // disable I key
    if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        return false;
    }

    // disable C key
    // if (e.ctrlKey && e.shiftKey && e.keyCode == 67) {
    //     return false;
    // }

    // disable J key
    if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        return false;
    }

    // disable U key
    if (e.ctrlKey && e.keyCode == 85) {
        return false;
    }

    // disable S key
    if (e.ctrlKey && e.keyCode == 83) {
        return false;
    }
};

/**  Context Menu ends here **/
/* ---------------------------------|.|----------------------------------- */

/* ---------------------------------|.|----------------------------------- */
/**  Modal js starts here **/

function OpenModal(target) {
    target = target.getAttribute("data-target");
    target = document.querySelector("#" + target);
    modal_inner = target.querySelector(".modal");

    target.classList.replace("modal-holder-inactive", "modal-holder-active");

    target.addEventListener("click", function (e) {
        if (!modal_inner.contains(e.target)) {
            target.classList.replace(
                "modal-holder-active",
                "modal-holder-inactive"
            );
        }
    });
}

function OpenModal_n(target) {
    target = document.querySelector("#" + target);
    modal_inner = target.querySelector(".modal");

    target.classList.replace("modal-holder-inactive", "modal-holder-active");

    target.addEventListener("click", function (e) {
        if (!modal_inner.contains(e.target)) {
            target.classList.replace(
                "modal-holder-active",
                "modal-holder-inactive"
            );
        }
    });
}

function CloseModal(target) {
    target = target.getAttribute("data-target");
    target = document.querySelector("#" + target);
    target.classList.replace("modal-holder-active", "modal-holder-inactive");
}

/**  Modal js ends here **/
/* ---------------------------------|.|----------------------------------- */

/* ---------------------------------|.|----------------------------------- */
/**  Sticky Header starts here **/

$(window).scroll(function () {
    var body_height = document.querySelector("main").offsetHeight;

<<<<<<< HEAD
    if ($(window).scrollTop() >= 50 && body_height >= 1000) {
=======
    if ($(window).scrollTop() >= 50 && body_height >= 800) {
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
        $("header").addClass("active-header");
    } else {
        $("header").removeClass("active-header");
    }
});

/**  Sticky Header ends here **/
/* ---------------------------------|.|----------------------------------- */

/* ---------------------------------|.|----------------------------------- */
/**  Custom Select starts here **/

$("select[data-menu]").each(function () {
    let select = $(this),
        options = select.find("option"),
        menu = $("<div />").addClass("select-menu"),
        button = $("<div />").addClass("button"),
        list = $("<ul />"),
        arrow = $("<em />").prependTo(button);

    options.each(function (i) {
        let option = $(this);
        list.append($("<li />").text(option.text()));
    });

    menu.css("--t", select.find(":selected").index() * -41 + "px");

    select.wrap(menu);

    button.append(list).insertAfter(select);

    list.clone().insertAfter(button);
});

$(document).on("click", ".select-menu", function (e) {
    let menu = $(this);

    if (!menu.hasClass("open")) {
        menu.addClass("open");
    }
});

$(document).on("click", ".select-menu > ul > li", function (e) {
    let li = $(this),
        menu = li.parent().parent(),
        select = menu.children("select"),
        selected = select.find("option:selected"),
        index = li.index();

    menu.css("--t", index * -41 + "px");
    selected.attr("selected", false);
    select.find("option").eq(index).attr("selected", true);

    menu.addClass(index > selected.index() ? "tilt-down" : "tilt-up");

    setTimeout(() => {
        menu.removeClass("open tilt-up tilt-down");
    }, 500);
});

$(document).click((e) => {
    e.stopPropagation();
    if ($(".select-menu").has(e.target).length === 0) {
        $(".select-menu").removeClass("open");
    }
});

/**  Custom Select ends here **/
/* ---------------------------------|.|----------------------------------- */

/* ---------------------------------|.|----------------------------------- */
/**  Custom Select (pages) starts here **/

$("select.dropdown").each(function () {
    var dropdown = $("<div />").addClass("dropdown selectDropdown");

    $(this).wrap(dropdown);

    var label = $("<span />")
        .text($(this).attr("placeholder"))
        .insertAfter($(this));
    var list = $("<ul />");

    $(this)
        .find("option")
        .each(function () {
            list.append($("<li />").append($("<a />").text($(this).text())));
        });

    list.insertAfter($(this));

    if ($(this).find("option:selected").length) {
        label.text($(this).find("option:selected").text());
        list.find(
            "li:contains(" + $(this).find("option:selected").text() + ")"
        ).addClass("active");
        $(this).parent().addClass("filled");
    }
});

$(document).on("click touch", ".selectDropdown ul li a", function (e) {
    e.preventDefault();
    var dropdown = $(this).parent().parent().parent();
    var active = $(this).parent().hasClass("active");
    var label = active
        ? dropdown.find("select").attr("placeholder")
        : $(this).text();

    dropdown.find("option").prop("selected", false);
    dropdown.find("ul li").removeClass("active");

    dropdown.toggleClass("filled", !active);
    dropdown.children("span").text(label);

    if (!active) {
        dropdown
            .find("option:contains(" + $(this).text() + ")")
            .prop("selected", true);
        $(this).parent().addClass("active");
    }

    dropdown.removeClass("open");
});

$(".dropdown > span").on("click touch", function (e) {
    var self = $(this).parent();
    self.toggleClass("open");
});

$(document).on("click touch", function (e) {
    var dropdown = $(".dropdown");
    if (dropdown !== e.target && !dropdown.has(e.target).length) {
        dropdown.removeClass("open");
    }
});

/**  Custom Select (pages) ends here **/
/* ---------------------------------|.|----------------------------------- */
