import $ from "jquery";
import Flickity from "flickity";
import "flickity-imagesloaded/flickity-imagesloaded";

export default () => {
    const el = $(".js-customer-carousel");

    if (el.length) {
        let time = 0;

        el.find("img").each(function () {
            setTimeout(() => {
                $(this).addClass("show");
            }, time);
            time += 200;
        });

        new Flickity(el.get(0), {
            prevNextButtons: false,
            pageDots: false,
            wrapAround: true,
            imagesLoaded: true,
            cellAlign: "left",
            draggable: true,
            autoPlay: 2000
        });
    }

    const modal = $(".js-modal-video");
    const player = $(modal).find("video").get(0);

    $(".js-play-video").on("click", () => {
        $(modal).addClass("show");
        setTimeout(() => {
            player.play();
            $(modal).addClass("bg");
        }, 400);

        player.onended = () => {
            $(modal).removeClass("show bg");
        };
    });

    $(".js-hide-video").on("click", () => {
        $(modal).removeClass("show bg");
        player.pause();
    });
};
