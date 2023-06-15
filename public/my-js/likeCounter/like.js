$(document).ready(function () {
    $('.likePhoto').click(function () {
        let currentSrc = $(this).attr('src');

        if (currentSrc == 'http://localhost/img/like/like-disable.png') {
            $(this).attr('src', 'http://localhost/img/like/like-enable.png');
            $(this).attr('alt', 'Enable Image');
            let idPost = $(this).attr('title');
            $.get('http://localhost/api/like-counter/' + idPost, function (response) {
                // Обработка ответа от сервера
                console.log(response);
            });

        } else {
            $(this).attr('src', 'http://localhost/img/like/like-disable.png');
            $(this).attr('alt', 'Disable Image');
            let idPost = $(this).attr('title');
            $.get('http://localhost/api/like-delete/' + idPost, function (response) {
                // Обработка ответа от сервера
                console.log(response);
            });
        }


    });
});
