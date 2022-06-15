$(function() {
    
    // Toggle artist song list
    $(".toggle-artist-song-list").click(function(e){
        
        // alert($(this).attr('rel'));
        $("#artist-song-list-".concat($(this).attr('rel'))).toggle();
        
        e.preventDefault();
    });
});