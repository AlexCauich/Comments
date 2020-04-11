$(document).ready(function() { 

    console.log('Query funciona');

    $('#comment-form').submit(function (e) {
        const postData = {
            comment: $('comment').val(),

        };
        $.post('comment-form', postData, function(response) {
            Console.log(response);
            $('comment-form').trigger('reset');
        });
        e.preventDefault();
    });
});