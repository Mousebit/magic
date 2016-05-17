jQuery(function($) {
    $(document).ready(function(){
            $('#insert-my-media').click(open_media_window);
	
        });

    function open_media_window() {
	wp.media.editor.insert('<div class="youtube">\n\n\n</div>');


   	

	 }
});

