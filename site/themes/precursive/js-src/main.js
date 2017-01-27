import $ from "jquery";
import Home from "./pages/home";
import CssAnimation from "./modules/css-animation";
import CaseStudies from "./modules/case-studies";

Home();
CssAnimation();
CaseStudies();

$(".js-show-intercom").on("click", (e) => {
    e.preventDefault();
    window.Intercom("show");
});
