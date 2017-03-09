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

$("#formEvent").on("submit", (e) => {
    e.preventDefault();
    $.ajax({
        url: $("#formEvent").attr("action"),
        data: ({ name: $("#formEventName").val(), email: $("#formEventEmail").val(), company: $("#formEventCompany").val() }),
        dataType: "jsonp",
        timeout: 5000
    }).done(() => {
        console.log("Success!");
    }).fail(() => {
        console.log("Failed!");
    });
});

$(".js-close-banner").on("click", () => $(".js-banner").hide());
