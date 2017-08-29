$(document).ready(function() {
    // Generate a simple captcha
    console.log("hola");
    $('#contact_form').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    notEmpty: {
                        message: 'Nombre requerido'
                    }
                }
            },

        }
    });
});
