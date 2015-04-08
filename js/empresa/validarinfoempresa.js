  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#registrar").validate({
    
        // Specify the validation rules
        rules: {
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
            area: { 
                required: true,
                //letterswithpunc: true,
            },
        },
        
        // Specify the validation error messages
        messages: {
            documento: {
                required: "* Por favor ingresa número único de identidad",
                lettersandnumbers: "* Por favor ingresa un número de identificación válido - sólo letras y números",
                minlength: "* Mínimo 5 caracteres",
            },
            paisOrigen: {
                required: "* Por favor seleccion una opción",
                lettersandspaces: "* Por favor ingresa letras y espacios",
            },
            area: {
                required: "* Por favor seleccion una opción",
                //letterswithpunc: "* Elige una opción válida",
            },
        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });