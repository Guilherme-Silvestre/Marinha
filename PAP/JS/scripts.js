$(document).ready(function(){
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: (target.offset().top - 71)
            }, 1000, "easeInOutExpo");
            return false;
          }
        }
      });
    $('body').animate({opacity:1},750);
    const audios=document.getElementsByTagName('audio')
    for (let index = 0; index < audios.length; index++) {
        const element = audios.item(index);
        element.volume= 0.5;
    }
})