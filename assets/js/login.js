$(document).ready(function(){

    $("#formLogin").validate({
        rules: {
            email: {
                required: true
            },
            senha: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Por favor, digite seu Email",

            },
            senha: {
                required: "Por Favor, digite a senha"
            }
        }
    });


    jQuery.validator.addMethod("invalido", function() {
        $('#email').addClass('is-invalid');
    });

});