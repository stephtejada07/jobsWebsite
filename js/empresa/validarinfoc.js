
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#registrar").validate({
    
        // Specify the validation rules
        rules: {
            nombreContacto: {
                required: true,
                lettersandspaces: true,
            },
            apellidoContacto: {
                required: true,
                lettersandspaces: true,
            },
            correo: {
                required: true,
                email: true,
            },
            paginaWeb: { 
                required: false,
                url: true,
                //nowhitespace: true
            },
            telefono: { 
                required: true,
                digits: true,
                minlength: 8,
                maxlength: 15,
            },       
            fax: { 
                required: false,
                digits: true,
                minlength: 8,
                maxlength: 15,
            },
        },
        
        // Specify the validation error messages
        messages: {
            nombreContacto: {
                required: "* Por favor ingresa el nombre de la persona de contacto",
                lettersandspaces: "* Por favor ingresa un nombre válido - Solamente letras",
            },
            apellidoContacto: {
                required: "* Por favor ingresa el apellido de la persona de contacto",
                lettersandspaces: "* Por favor ingresa un apellido válido - Solamente letras",
            },
            correo: { 
                required: "* Por favor ingresa un correo electrónico",
                email: "* Por favor ingresa un correo electrónico válido",
                },
            paginaWeb: {
                required: "* Por favor ingresa número único de identidad",
                url: "* Por favor ingresa una página web válida",
                //nowhitespace: "* Sin espacios por favor"

            },
            telefono: {
                required: "* Por favor ingresa un número de teléfono",
                digits: "* Por favor ingresa un número válido - sólo dígitos",
                minlength: "* Mínimo 8 dígitos",
                maxlength: "* Máximo 15 dígitos",
            },
            fax: {
                //required: "* Por favor ingresa tu número de teléfono",
                digits: "* Por favor ingresa un número válido - sólo dígitos",
                minlength: "* Mínimo 8 dígitos",
                maxlength: "* Máximo 15 dígitos",
            },

        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });