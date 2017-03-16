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

    /* eslint-disable no-undef*/
    ga("send", {
        eventCategory: "Intercom",
        eventAction: "open Intercom Widget",
        eventLabel: "Contact Live Chat"
    });
    /* eslint-disable no-undef*/
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
        data: ({
            name: $("#formEventName").val(),
            email: $("#formEventEmail").val(),
            leadSource: $("#formEventFilter").val(),
            company: $("#formEventCompany").val() }),
        dataType: "jsonp",
        timeout: 5000
    }).done(() => {
        console.log("Success!");
        $(".form-no-submitted").addClass("fadeOut");
        $(".form-submitted").addClass("fadeIn");

        /* Send data to GA */
        /* eslint-disable no-undef*/
        ga("send", {
            eventCategory: "Booking",
            eventAction: "submit",
            eventLabel: "Events Campaign"
        });
        /* eslint-disable no-undef */
    }).fail(() => {
        console.log("Failed!");
    });
});

$(".js-close-banner").on("click", () => $(".js-banner").hide());
