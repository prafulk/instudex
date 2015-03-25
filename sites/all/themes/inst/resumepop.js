(function ($) {

  Drupal.behaviors.exampleModule = {
    attach: function (context, settings) {
      $('.file.a').click(function(e) { // Button which will activate our modal
			   
				$('#editablefields-field-upload-resume--2').reveal({ // The item which will be opened with reveal
				  	animation: 'fade',                   // fade, fadeAndPop, none
					animationspeed: 600,                       // how fast animtions are
					closeonbackgroundclick: true,              // if you click background will modal close?
					dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
				});
			return false;
			});
	   
    }
  };
 
})(jQuery);