
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#registrar").validate({
    
        // Specify the validation rules
        rules: {
            linea1: {
                required: false,
                address: true,
            },
            linea2: {
                required: false,
                address: true,
            },
            ciudad: { 
                required: true,
                lettersandspaces: true,
                minlength: 2,

            },
            departamento: { 
                required: true,
                //lettersandspaces: true,
                //minlength: 2,
            },          
            pais: { 
                required: true,
                lettersandspaces: true,
            },    
            codigoPostal: { 
                //required: true,
                lettersandnumbers: true,
                minlength: 5,
            },   
  
        },
        
        // Specify the validation error messages
        messages: {
            linea1: { 
                //required: "* Por favor ingresa tu dirección",
                address: "* Por favor ingresa valores válidos",
                },
            linea2: { 
                //required: "* Por favor ingresa tu dirección",
                address: "* Por favor ingresa valores válidos",
                },
            ciudad: {
                required: "* Por favor ingresa el nombre de tu ciudad",
                lettersandspaces: "* Por favor ingresa un nombre válido - sólo letras y espacios",
                minlength: "Mínimo 2 letras",

            },
            departamento: {
                required: "* Por favor elige un departamento",
               // lettersandspaces: "* Por favor ingresa un nombre válido - sólo letras y espacios",
                minlength: "Mínimo 2 letras",
            },
            pais: {
                required: "* Por favor ingresa el nombre de tu país",
                lettersandspaces: "* Por favor ingresa un nombre válido - sólo letras y espacios",
            },
            codigoPostal: {
                //required: "* Por favor ingresa el código postal",
                lettersandnumbers: "* Por favor ingresa un código postal válido - sólo letras y números",
                minlength: "Mínimo 5",
            },


        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });