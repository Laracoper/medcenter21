/*--------------------------------[Custom JS File]-------------------------------------------

    Project     : Medcenter One Page
    Version     : 1.0
    Author      : omar tobgy

-------------------------------------------------------------------------------------------*/
/*jquery functions*/
$(function(){
    'use strict';
    /*------cashing selectors & data in variables------*/	
         var wind = $(window),
              htmlBody = $("html, body"),
              loader = $(".loader"),
              nav_section = $(".navbar-default .navbar-nav > li > a"),
              go_to = $("#go-to"),
              scroll_btn = $(".scroll-top"),
              clinics = $("#clinics"),
              owl_carousel = $('.owl-carousel');
          /* cashing selectors & data in variables end */
    
          /*------[start page loader]------*/
          wind.on("load", function () {
              loader.fadeOut(2500)
          });
          /*------[start page loader end]------*/
    
          /*------[check window scroll to show or hide scroll top button]------*/
          wind.on("scroll", function () {
              if(wind.scrollTop() >= 300){
             scroll_btn.fadeIn(700)
              }else{
              scroll_btn.fadeOut(700)
              }
    
          });
          /*------[check window scroll to show or hide scroll top button end]------*/
    
          /* scroll top button on click go to top */
          scroll_btn.on("click", function () {
               htmlBody.animate({
                scrollTop: 0
               }, 700);
              
          });
          /*------[scroll top button on click go to top end]------*/
                  
         /*------scroll to section from navbar]------*/
         nav_section.on("click", function (e) {
              e.preventDefault();
              var section_name = $(this).attr("href");
              htmlBody.animate({
                 scrollTop: $(section_name).offset().top
              }, 700)
           
        });
         /*------[scroll to section from navbar end]------*/
    
         /*------[our works button]------*/
          go_to.on("click", function () { 
             htmlBody.animate({
               scrollTop: $(clinics).offset().top
             }, 700)
      
          });
         /*------[our works button end]------*/
    
         /*------[owl_carousel]------*/
         owl_carousel .owlCarousel({
              loop:true,
              margin:10,
              autoplay:true,
              responsive:{
               0:{
                    items:1
                },
    
               600:{
                    items:2
                },
    
               1000:{
                items:3
               }
             }
        });
         /*------[owl_carousel end]------*/
    
    })