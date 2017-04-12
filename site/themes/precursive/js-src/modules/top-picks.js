import $ from "jquery";
import Flickity from "flickity";
import "flickity-imagesloaded/flickity-imagesloaded";

export default () => {
    const el = $(".js-top-picks-carousel");

    if (el.length) {
        new Flickity(el.get(0), {
            prevNextButtons: false,
            pageDots: true,
            wrapAround: true,
            adaptiveHeight: true,
            imagesLoaded: true,
            draggable: true,
            arrowShape: {
                x0: 30,
                x1: 60,
                y1: 50,
                x2: 65,
                y2: 50,
                x3: 35
            }
        });
    }
};

