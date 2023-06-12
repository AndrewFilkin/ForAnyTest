$(document).ready(function () {
    $('.likePhoto').click(function () {
        let currentSrc = $(this).attr('src');

        if (currentSrc == 'http://localhost/img/like/like-disable.png') {
            $(this).attr('src', 'http://localhost/img/like/like-enable.png');
            $(this).attr('alt', 'Enable Image');

            // $.get('http://localhost/api/like-counter', function (response) {
            //     // Обработка ответа от сервера
            //     console.log(response);
            // });

        } else {
            $(this).attr('src', 'http://localhost/img/like/like-disable.png');
            $(this).attr('alt', 'Disable Image');
            let idImage = $(this).attr('title');
            $.get('http://localhost/api/like-delete/' + idImage, function (response) {
                // Обработка ответа от сервера
                console.log(response);
            });
        }


    });
});
