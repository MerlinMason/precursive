import $ from "jquery";

export default () => {
    $("#formEvent").on("submit", (e) => {
        e.preventDefault();
        $.ajax({
            url: $("#formEvent").attr("action"),
            data: ({
                name: $("#formEventName").val(),
                email: $("#formEventEmail").val(),
                leadSource: $("#formEventFilter").val(),
                company: $("#formEventCompany").val()
            }),
            dataType: "jsonp",
            timeout: 5000
        }).done(() => {
            console.log("Form Sent Successfully!");
            $(".form-no-submitted").addClass("fadeOut");
            $(".form-submitted").addClass("fadeIn");
            /* eslint-disable no-undef */
            ga("send", {
                hitType: "event",
                eventCategory: "Booking",
                eventAction: "submit",
                eventLabel: "Events Campaign"
            });
            /* eslint-disable no-undef */
        }).fail(() => {
            console.log("Failed!");
        });
    });

    $("#formEventExtended").on("submit", (e) => {
        e.preventDefault();

        $.ajax({
            url: $("#formEventExtended").attr("action"),
            data: ({
                leadSource: $("#formEventFilter").val(),
                fullName: $("#formEventFullName").val(),
                email: $("#formEventEmail").val(),
                company: $("#formEventCompany").val(),
                jobTitle: $("#formEventJobTitle").val(),
                phoneNumber: $("#formEventPhoneNumber").val(),
                country: $("#formEventCountry").val(),
                crm: $("#formEventCrm").val()
            }),
            dataType: "jsonp",
            timeout: 5000
        }).done(() => {
            console.log("Form Sent Successfully!");
            $(".form-no-submitted").addClass("fadeOut");
            $(".form-submitted").addClass("fadeIn");

            /* eslint-disable no-undef */
            ga("send", {
                hitType: "event",
                eventCategory: "Booking",
                eventAction: "submit",
                eventLabel: "Events Campaign"
            });
            /* eslint-disable no-undef */
        }).fail(() => {
            console.log("Failed!");
        });
    });
};
