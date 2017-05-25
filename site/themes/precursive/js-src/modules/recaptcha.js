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
};
