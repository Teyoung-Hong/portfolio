( function(){
  
  // params
  var sliderSelector = ".swiper-container",
    options = {
      init: true,
      loop: true,
      speed: 800,
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 2,  
      effect: 'coverflow',
      coverflowEffect: {
        rotate: 70,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,  
      },
      grabCursor: true,
      parallax: true,
      pagination: {
        el: '.swiper-pagenation',
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        1023: {
          slidePerView: 1,
          spaceBetween: 0, 
        }  
      },
      // Events
      on: {
        imagesReady: function(){
          this.el.classList.remove("loading") ; 
        }  
      }
    };
    
var mySwiper = new Swiper(sliderSelector, options);


})();
