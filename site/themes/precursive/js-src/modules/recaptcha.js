import $ from "jquery";

export default () => {
    const mapRecaptcha = new Map();
    /* eslint-disable no-undef*/
    $("#bookDemoModalForm").on("submit", (e) => {
        const idCaptchaForm = mapRecaptcha.get("bookDemoModalCaptcha");
        if (grecaptcha.getResponse(idCaptchaForm) === "") {
            e.preventDefault();
            grecaptcha.execute(idCaptchaForm);
        }
    });

    $("#contactUsForm").on("submit", (e) => {
        const idCaptchaForm = mapRecaptcha.get("contactCaptcha");
        if (grecaptcha.getResponse(idCaptchaForm) === "") {
            e.preventDefault();
            grecaptcha.execute(idCaptchaForm);
        }
    });

    $("#bookDemoForm").on("submit", (e) => {
        const idCaptchaForm = mapRecaptcha.get("bookDemoCaptcha");
        if (grecaptcha.getResponse(idCaptchaForm) === "") {
            e.preventDefault();
            grecaptcha.execute(idCaptchaForm);
        }
    });

    $("#downloadGuideForm").on("submit", (e) => {
        const idCaptchaForm = mapRecaptcha.get("downloadGuideCaptcha");
        if (grecaptcha.getResponse(idCaptchaForm) === "") {
            e.preventDefault();
            grecaptcha.execute(idCaptchaForm);
        }
    });

    window.contactFormOnSubmit = function () {
        $("#contactUsForm").submit();
    };

    window.bookDemoModalFormOnSubmit = function () {
        $("#bookDemoModalForm").submit();
    };

    window.bookDemoFormOnSubmit = function () {
        $("#bookDemoForm").submit();
    };

    window.downloadGuideFormOnSubmit = function () {
        $("#downloadGuideForm").submit();
    };
};
