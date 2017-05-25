import $ from "jquery";

export default () => {
    const map = new Map();

    /* eslint-disable no-undef*/
    $("#bookDemoModalForm").on("submit", (e) => {
        const idCaptchaForm = map.get("bookDemoModalCaptcha");
        if (grecaptcha.getResponse(idCaptchaForm) === "") {
            e.preventDefault();
            grecaptcha.execute(idCaptchaForm);
        }
        console.log("bookDemoModalForm - Submitted");
    });

    $("#contactUsForm").on("submit", (e) => {
        const idCaptchaForm = map.get("contactCaptcha");
        if (grecaptcha.getResponse(idCaptchaForm) === "") {
            e.preventDefault();
            grecaptcha.execute(idCaptchaForm);
        }
        console.log("contactFormOnSubmit - Submitted");
    });

    $("#bookDemoForm").on("submit", (e) => {
        const idCaptchaForm = map.get("bookDemoCaptcha");
        if (grecaptcha.getResponse(idCaptchaForm) === "") {
            e.preventDefault();
            grecaptcha.execute(idCaptchaForm);
        }
        console.log("bookDemoForm - Submitted");
    });

    $("#downloadGuideForm").on("submit", (e) => {
        const idCaptchaForm = map.get("downloadGuideCaptcha");
        if (grecaptcha.getResponse(idCaptchaForm) === "") {
            e.preventDefault();
            grecaptcha.execute(idCaptchaForm);
        }
        console.log("downloadGuideForm - Submitted");
    });


    window.contactFormOnSubmit = function () {
        console.log("Contact Form");
        $("#contactUsForm").submit();
    };

    window.bookDemoModalFormOnSubmit = function () {
        console.log("Book Demo Modal");
        $("#bookDemoModalForm").submit();
    };

    window.bookDemoFormOnSubmit = function () {
        console.log("Book Demo");
        $("#bookDemoForm").submit();
    };

    window.downloadGuideFormOnSubmit = function () {
        console.log("Download Guide");
        $("#downloadGuideForm").submit();
    };

    window.captchaCallback = function () {
        $(".recaptcha-container").each((index, el) => {
            const idCaptchaHtml = $(el).attr("id");
            const idCaptcha = grecaptcha.render(idCaptchaHtml, {
                sitekey: "6Ld2yR4UAAAAABOFcKrT2vFvvoI1fIxaAa_PCxzq",
                callback: $(el).data("after-submit")
            });

            map.set(idCaptchaHtml, idCaptcha);
            console.log(idCaptchaHtml, idCaptcha);
        });
    };
    /* eslint-disable no-undef*/
};
