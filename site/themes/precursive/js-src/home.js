import Flickity from "flickity";
import "flickity-imagesloaded/flickity-imagesloaded";

export default () => {
    new Flickity($(".js-customer-carousel").get(0), {
        prevNextButtons: false,
        pageDots: false,
        wrapAround: false,
        adaptiveHeight: true,
        imagesLoaded: true,
        cellAlign: "left",
        draggable: false
    });
};
