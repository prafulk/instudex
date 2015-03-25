(function($) {
Drupal.behaviors.dogmodule = {
attach : function(context, settings) {

$('input[type=file]', context).each(function(i,e){
var new_div = $('');
$(this).addClass('file-hidden').before(new_div);
$(this).change(function(){
$(this).prev().find('input').val($(this).val());
});
});
}
};
})(jQuery);