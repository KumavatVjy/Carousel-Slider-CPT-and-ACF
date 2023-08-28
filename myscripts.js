jQuery(function($){ 

	var Lowl=$("#owl-demo2");
 	Lowl.owlCarousel({
     	items: 3, //10 items above 1000px browser width
     	itemsDesktop: [1000, 2], //5 items between 1000px and 901px
     	itemsDesktopSmall: [991, 2], // 3 items betweem 900px and 601px
     	itemsTablet: [600, 2], //2 items between 600 and 0;
     	//  itemsMobile : false , // itemsMobile disabled - inherit from itemsTablet option
     	dots: false, stagePadding: Number, //stagePadding: 50,
     	loop: false, margin: 30, rtl: true, pagination: false,
 	})

 	$(".custom-next").click(function () {
     	Lowl.trigger('owl.next');
 	});

 	$(".custom-prev").click(function () {
     	Lowl.trigger('owl.prev');
 	});
 
 	Lowl.trigger('owl.play', false);




     /* ============== Model Popup JS =================*/

/*
     // jQuery extend functions for popup
     (function($) {
       $.fn.openPopup = function( settings ) {
         var elem = $(this);
         // Establish our default settings
         var settings = $.extend({
           anim: 'fade'
         }, settings);
         elem.show();
         elem.find('.popup-content').addClass(settings.anim+'In');
       }
       
       $.fn.closePopup = function( settings ) {
         var elem = $(this);
         // Establish our default settings
         var settings = $.extend({
           anim: 'fade'
         }, settings);
         elem.find('.popup-content').removeClass(settings.anim+'In').addClass(settings.anim+'Out');
         
         setTimeout(function(){
             elem.hide();
             elem.find('.popup-content').removeClass(settings.anim+'Out')
           }, 500);
       }
         
     }(jQuery));
     */
     // Click functions for popup
     $('.open-popup').click(function(){
       $('#'+$(this).data('id')).openPopup({
         anim: (!$(this).attr('data-animation') || $(this).data('animation') == null) ? 'fade' : $(this).data('animation')
       });
     });
     $('.close-popup').click(function(){
       $('#'+$(this).data('id')).closePopup({
         anim: (!$(this).attr('data-animation') || $(this).data('animation') == null) ? 'fade' : $(this).data('animation')
       });
     });

     // To open/close the popup at any functions call the below
     // $('#popup_default').openPopup();
     // $('#popup_default').closePopup();







 });