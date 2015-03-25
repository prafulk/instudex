//$(function(){
//		$('#edit-picture-upload').customFileInput();	
//})(jQuery);;

// Wraps a function around the code and supplies $ as a local variable.

(function($) {
Drupal.behaviors.dogmodule = {
attach : function(context, settings) {

$('input[type=file]', context).each(function(i,e){
var new_div = $('');
$(this).addClass('new-hidden').before(new_div);
$(this).change(function(){
$(this).prev().find('input').val($(this).val());
});
});
}
};
})(jQuery);


(function ($) {
  $(document).ready(function () {

	$('.form-file').wrap('<div class="pictureupload" />');

  });
})(jQuery);