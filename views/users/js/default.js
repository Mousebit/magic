$(document).ready(function(){
    $( "#createuser" ).click(function() {
        $( ".user-form" ).toggle( "slow", function() {
            // Animation complete.
        });
    });
});