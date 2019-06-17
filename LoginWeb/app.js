$(document).ready(function()
{
    loginForm();
    registerForm();
});

function loginForm()
{
        $("#loginForm").bootstrapValidator({
            message: "Error",
            feedbackIcons:{
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },

            fields:{
                username:{
                    validators:{
                        stringLength: {
                            min: 6,
                            message: 'El nombre de usuario debe contener al menos 6 caracteres.'
                        },
                        notEmpty: {
                            message: 'El campo no puede estar vacío!'
                        },
                    }
                },
                password:{
                    validators:{
                        stringLength: {
                            min: 6,
                            max: 20,
                            message: 'La contraseña debe contener entre 6 y 20 caracteres.'
                        },
                        notEmpty: {
                            message: 'El campo no puede estar vacío!'
                        },
                    }
                }
            }
        })

    .on('success.form.bv', function (e) {

        alert("Submit...");

    });
}

function registerForm()
{
    $("#registerForm").bootstrapValidator({
            message: "Error",
            feedbackIcons:{
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },

            fields:{
                username:{
                    validators:{
                        stringLength: {
                            min: 6,
                            message: 'El nombre de usuario debe contener al menos 6 caracteres.'
                        },
                        notEmpty: {
                            message: 'El campo no puede estar vacío!'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'El usuario debe tener solamente letras, números, puntos y/o guiones bajos.'
                        },        
                    }
                    
                },
                password:{
                    validators:{
                        stringLength: {
                            min: 6,
                            max: 20,
                            message: 'La contraseña debe contener entre 6 y 20 caracteres.'
                        },
                        notEmpty: {
                            message: 'El campo no puede estar vacío!'
                        },
                        identical: {
                            field: 'password',
                            message: 'La contraseña y su confirmación no coinciden!'
                        },
                    }
                }
            }
        })

        .on('success.form.bv', function (e) {

            alert("Submit...");
    
        });
}