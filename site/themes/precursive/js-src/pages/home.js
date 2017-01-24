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
};
