$(document).ready(function () {
    const likeButton = $('#like-button');
    const likeCount = $('#like-count');

    $.ajax({
        method: 'POST',
        url: likeButton.attr('data-url'),
    }).done(function (data) {
        likeCount.html(data.hearts);
    });
});