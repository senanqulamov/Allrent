config1 = {
    type: "loop",
    drag: "free",
    focus: "center",
    perPage: 3,
    autoScroll: false,
    classes: {
        arrows: "splide__arrows slider-arrows",
        arrow: "splide__arrow slider-arrow",
        prev: "splide__arrow--prev slider-prev-arrow",
        next: "splide__arrow--next slider-next-arrow",
    },
    gap: 20,
    autoWidth: true,
};
config2 = {
    type: "slide",
    drag: "free",
    focus: "center",
    autoScroll: false,
    pagination: false,
    classes: {
        arrows: "splide__arrows slider-arrows",
        arrow: "splide__arrow slider-arrow",
        prev: "splide__arrow--prev slider-prev-arrow",
        next: "splide__arrow--next slider-next-arrow",
    },
    gap: 20,
    autoWidth: true,
    arrows: false,
};
const splide_main_page = new Splide("#splide", config1);
const splide_main_page_svg = new Splide("#splide-svg", config2);

splide_main_page.mount(window.splide.Extensions);
splide_main_page_svg.mount(window.splide.Extensions);
