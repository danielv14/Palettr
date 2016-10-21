$( document ).ready(function() {

    // target all divs with class of box
    $("div[class='box']").hover(function() {

      // scale up when entering hover
      $('p' + this.id).addClass('scale');

    }, function () {
      // scale down when leaving hover 
      $('p' + this.id).removeClass('scale');

    });
});
