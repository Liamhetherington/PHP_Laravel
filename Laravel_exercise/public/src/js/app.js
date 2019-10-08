$(document).ready(function() {

    var postId = 0;
    var postTitleElement = null;
    var postBodyElement = null;

    $('.post').find('.interaction').find('.edit').on('click', function(event) {
        event.preventDefault();

        postTitleElement = event.target.parentNode.parentNode.childNodes[0];
        var postTitle = postTitleElement.textContent;
        $('#post-title').val(postTitle);
        postBodyElement = event.target.parentNode.parentNode.childNodes[2];
        var postBody = postBodyElement.textContent;
        $('#post-body').val(postBody);
        postId = event.target.parentNode.parentNode.dataset['postid'];
        $('#edit-modal').modal();
    });

    $('#modal-save').on('click', function() {
        $.ajax({
                method: 'POST',
                url: urlEdit,
                data: { title: $('#post-title').val(), body: $('#post-body').val(), postId: postId, _token: token }
            })
            .done(function(msg) {
                $(postTitleElement).text(msg['new_title']);
                $(postBodyElement).text(msg['new_body']);
                $('#edit-modal').modal('hide');
            });
    });
});