$(document).ready(function () {
    $("form[name='shortLinkForm']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            main_link: "required",
            short_code: "required",
            description: "required",

        },
        // Specify validation error messages
        messages: {
            main_link: "Please enter your main link",
            short_code: "Please generate your short code",
            description: "Please enter your description",
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            form.submit();
        }
    });
});

