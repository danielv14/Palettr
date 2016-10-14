/*
* Vue instance handling flash message fading
*/

const flash = new Vue({

  el: '#app',

  created: function () {
    this.fadeFlash();
  },

  methods: {

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
