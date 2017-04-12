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
            imagesLoaded: false,
            draggable: true
        });
    }
};

