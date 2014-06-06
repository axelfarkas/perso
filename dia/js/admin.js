jQuery(function($){

	$('#admin .imgSrc').change(function(){
		var $this = $(this),
			src = $this.val();
		$this.find('+img').attr('src', src);
	});

});