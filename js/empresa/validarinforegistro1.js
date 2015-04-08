  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#registrar").validate({
    
        // Specify the validation rules
        rules: {
            nombreEmpresa: { 
                required: true,
                lettersandspaces: true,
                minlength: 2,
                //nowhitespace: true
            },
            correo: {
                required: true,
                email: true,
            },

            usuario: {
                required: true,
                nowhitespace: true,
                minlength: 6,
                maxlength: 15,
                username: true,
            },
            contra: {
                required: true,
                nowhitespace: true,
                minlength: 6,
                maxlength: 15,
                password: true,
            }
        },
        
        // Specify the validation error messages
        messages: {
            nombreEmpresa: {
                required: "* Por favor ingresa el nombre de la empresa",
                lettersandspaces: "* Por favor ingresa letras sin espacios",
                minlength: "* Mínimo 2 letras",
                //nowhitespace: "* Sin espacios por favor"
            },
            correo: { 
                required: "* Por favor ingresa un correo electrónico",
                email: "* Por favor ingresa un correo electrónico válido",
            },
            usuario: {
                required: "* Por favor ingresa un usuario",
                nowhitespace: "Sin espacios por favor",
                minlength: "* Mínimo 6 caracteres",
                maxlength: "Máximo 15 caracteres",
                username: "* Al menos una letra al principio. Puedes utilizar 0-9 guión bajo (_) o punto (.) ",
                //alphanumeric: "* Letras, números y guión bajo (_). Sin espacios",
            },
            contra: {
                required: "* Por favor ingresa una contraseña",
                nowhitespace: "* Sin espacios por favor",
                minlength: "* Mínimo 6 caracteres",
                maxlength: "Máximo 15 caracteres",
                password: "Utiliza letras (a-z), números (0-9), al menos una mayúscula (A-Z), al menos un caracter especial (!.-_#$@). Sin espacios",

            },

        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });