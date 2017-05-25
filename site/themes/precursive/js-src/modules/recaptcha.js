import $ from "jquery";


export default () => {
    const el = $(".js-top-picks-carousel");

    if (el.length) {
        new Flickity(el.get(0), {
            prevNextButtons: true,
            pageDots: false,
            autoPlay: 4500,
            wrapAround: true,
            adaptiveHeight: true,
            imagesLoaded: true,
            draggable: true
        });
    }
};

