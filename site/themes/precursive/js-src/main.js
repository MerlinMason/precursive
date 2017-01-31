import $ from "jquery";
import "openshare";

import Home from "./pages/home";
import CssAnimation from "./modules/css-animation";
import CaseStudies from "./modules/case-studies";

// console.log(Share);
Home();
CssAnimation();
CaseStudies();

$(".js-show-intercom").on("click", (e) => {
    e.preventDefault();
    window.Intercom("show");
});

$(".js-toggle-menu").on("click", () => {
    $(".nav").toggleClass("show");
});

$(".js-toggle-form-modal").on("click", (e) => {
    e.preventDefault();
    $(".js-form-modal").fadeToggle(400, function () {
        $(this).toggleClass("show");
    });
});

// const share = new Share({
//     type: "twitter",
//     innerHTML: "Check it out!"
// }, $(".js-twitter").get(0));

// console.log(share);
