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
            draggable: true
        });
    }
};
