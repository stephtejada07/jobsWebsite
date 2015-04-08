
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#registrar").validate({
    
        // Specify the validation rules
        rules: {
            referencia1: {
                required: true,
                lettersandspaces: true,
            },
            relacion1: {
                required: true,
                lettersandspaces: true,
            },
            telefono1: {
                required: true,
                digits: true,
                minlength: 8,
                maxlength: 15,
            },
            correo1: {
                required: true,
                email: true,
            },


            referencia2: {
                //required: true,
                lettersandspaces: true,
            },
            relacion2: {
                //required: true,
                lettersandspaces: true,
            },
            telefono2: {
                //required: true,
                digits: true,
                minlength: 8,
                maxlength: 15,
            },
            correo2: {
                //required: true,
                email: true,
            },



            referencia3: {
                //required: true,
                lettersandspaces: true,
            },
            relacion3: {
                //required: true,
                lettersandspaces: true,
            },
            telefono3: {
                //required: true,
                digits: true,
                minlength: 8,
                maxlength: 15,
            },
            correo3: {
                //required: true,
                email: true,
            },
        },
        
        // Specify the validation error messages
        messages: {
            referencia1: { 
                required: "* Por favor ingresa al menos una referencia laboral",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
                },
            relacion1: { 
                required: "* Por favor ingresa la relación",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
                },
            telefono1: {
                required: "* Por favor ingresa al menos un número de teléfono ",
                number: "* Por favor  ingresa un número de teléfono válido - Sin espacios, letras o guiones",
                minlength: "* Mínimo 8 dígitos",
                maxlength: "* Máximo 15 dígitos",
                min: "* Ingresa un número de teléfono válido",
                max: "* Ingresa un número de teléfono válido",
            },
            correo1: {
                required: "* Por favor ingresa una dirección de correo electrónico",
                email: "* Por favor ingresa una dirección de correo electrónico válida",
            },


            referencia2: { 
                required: "* Por favor ingresa al menos una referencia laboral",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
                },
            relacion2: { 
                required: "* Por favor ingresa al menos una empresa",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
                },
            telefono2: {
                required: "* Por favor ingresa al menos un número de teléfono ",
                number: "* Por favor  ingresa un número de teléfono válido - Sin espacios, letras o guiones",
                minlength: "* Mínimo 8 dígitos",
                maxlength: "* Máximo 15 dígitos",
                min: "* Ingresa un número de teléfono válido",
                max: "* Ingresa un número de teléfono válido",
            },
            correo2: {
                //required: "* Por favor ingresa una dirección de correo electrónico",
                email: "* Por favor ingresa una dirección de correo electrónico válida",
            },


            referencia3: { 
                required: "* Por favor ingresa al menos una referencia laboral",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
                },
            relacion3: { 
                required: "* Por favor ingresa al menos una empresa",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
                },
            telefono3: {
                required: "* Por favor ingresa al menos un número de teléfono ",
                number: "* Por favor  ingresa un número de teléfono válido - Sin espacios, letras o guiones",
                minlength: "* Mínimo 8 dígitos",
                maxlength: "* Máximo 15 dígitos",
                min: "* Ingresa un número de teléfono válido",
                max: "* Ingresa un número de teléfono válido",
            },
            correo3: {
                //required: "* Por favor ingresa una dirección de correo electrónico",
                email: "* Por favor ingresa una dirección de correo electrónico válida",
            },

        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });