// Directives

Vue.directive('elastic', require('./directives/elastic.js'));
Vue.directive('focus', function (focusable) {
    if (! focusable) {
        return;
    }

    this.vm.$nextTick(() => this.el.focus());
})
