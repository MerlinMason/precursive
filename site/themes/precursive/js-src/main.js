import $ from "jquery";
import "openshare";

import Home from "./pages/home";
import CssAnimation from "./modules/css-animation";
import CaseStudies from "./modules/case-studies";
import TopPicks from "./modules/top-picks";
import ReCaptcha from "./modules/recaptcha";
import FormEvents from "./modules/form-events";

Home();
CssAnimation();
CaseStudies();
TopPicks();
ReCaptcha();
FormEvents();

$(".js-show-intercom").on("click", (e) => {
    e.preventDefault();
    window.Intercom("show");
    console.log("Intercom Live Chat");
    /* eslint-disable no-undef*/
    ga("send", {
        hitType: "event",
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

$(".js-close-banner").on("click", () => $(".js-banner").hide());

/* eslint-disable no-undef*/
window.captchaCallback = function () {
    $(".recaptcha-container").each((index, el) => {
        const idCaptchaHtml = $(el).attr("id");
        const idCaptcha = grecaptcha.render(idCaptchaHtml, {
            sitekey: "6Ld2yR4UAAAAABOFcKrT2vFvvoI1fIxaAa_PCxzq",
            callback: $(el).data("after-submit")
        });
        // Save id of all the captcha from the page
        mapRecaptcha.set(idCaptchaHtml, idCaptcha);
    });
};
/* eslint-disable no-undef*/
