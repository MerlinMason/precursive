import $ from "jquery";
import Flickity from "flickity";
import "flickity-imagesloaded/flickity-imagesloaded";

export default () => {
    const el = $(".js-casestudy-carousel");

    if (el.length) {
        new Flickity(el.get(0), {
            prevNextButtons: true,
            pageDots: false,
            wrapAround: true,
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
