$(document).ready(function () {
    $('#generate').click(function () {
        //get data from main_link
        let mainLink = $('#main_link').val();
        console.log(mainLink);
        //delete all except https://
        let str = mainLink;
        let index = str.indexOf("https://");
        let newStr = str.substring(index, index + "https://".length);
        console.log(newStr);


// generate short code
        var symbols = 'abcdefghijklmnopqrstuvwxyz0123456789';
        var output = '';
        for (var i = 0; i < 10; i++) {
            output += symbols.charAt(Math.floor(Math.random() * symbols.length));
        }
        $('#short_code').val(output);
        console.log(newStr+output)

    });
});
