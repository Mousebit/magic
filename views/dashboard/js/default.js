$(function() {
    $('#randomInsert').submit(function()
    {
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o){

            console.log("test");

        });

        console.log(data);
        return false;
    })

});