import $ from "jquery";
import scrollMonitor from "scrollMonitor";

export default () => {
    $(".css-animation").each(function () {
        console.log(this);
        const el = this;
        const watch = scrollMonitor.create($(el).get(0));

        watch.enterViewport(() => $(el).addClass("play"));
        watch.exitViewport(() => $(el).removeClass("play"));
    });
};
