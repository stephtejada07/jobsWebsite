  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#registrar").validate({
    
        // Specify the validation rules
        rules: {
            nacimiento: { 
                required: true,
                date: true,
            },
            documento: { 
                required: true,
                lettersandnumbers: true,
                minlength: 5,
                //nowhitespace: true
            },
            paisOrigen: { 
                required: true,
                lettersandspaces: true,
            },
            estadoCivil: { 
                required: false,
                //letterswithpunc: true,
                //number: true,
            },
            genero: {
                required: true,
                //lettersonly: true,
            },
            idioma1: {
            	required: true,
            },
            nivel1: {
            	required: true,
            },
        },
        
        // Specify the validation error messages
        messages: {
            nacimiento: {
                required: "* Por favor ingresa tu fecha de nacimiento",
                date: "* Por favor ingresa una fecha válida",
                max: "* Por favor ingresa una fecha válida",
            },
            documento: {
                required: "* Por favor ingresa número único de identidad",
                lettersandnumbers: "* Por favor ingresa un número de identificación válido - sólo letras y números",
                minlength: "* Mínimo 5 caracteres",
            },
            paisOrigen: {
                required: "* Por favor seleccion una opción",
                lettersandspaces: "* Por favor ingresa letras y espacios",
            },
            estadoCivil: {
                required: "* Por favor seleccion una opción",
                letterswithpunc: "* Elige una opción válida",
            },
            genero: {
                required: "* Por favor selecciona una opción",
                //lettersonly: "* Sin espacios",
            },
            idioma1: {
                required: "* Por favor selecciona un idioma",
            },
            nivel1: {
                required: "* Por favor selecciona el nivel",
            },
        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });