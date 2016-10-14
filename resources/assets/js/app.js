
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));


const app = new Vue({
    el: '#app',

    created: function() {
      this.fadeFlash();
    },

    methods: {
      // open mobile navigation
      openNav: function () {
        $('#overlayNav').width('100%');
      },

      // close mobile navigation
      closeNav: function () {
        $('#overlayNav').width('0%');
      },

      fadeFlash: function () {
        // timed function to fade out the flash messages
        setTimeout(function() {
          // target div and fade it out
          $('#flash').fadeOut("slow", function() {
            $(this).remove();
          })
        }, 1500);
      }
    }

});
