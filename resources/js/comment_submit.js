$('#comment').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: '/comment',
        data: $(this).serialize(),
        success: function(msg) {
            // console.log(msg);
            if (msg.status == "success") {
                $('.chat-display').append('<p>' + msg.comment.comment_text + ' <span class="name">- ' + msg.user + '</span></p>');
                $('#text').val('');
            } else {
                alert("error submitting comment");
            }
        }
    });
});
