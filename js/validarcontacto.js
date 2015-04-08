
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#comentario").validate({
    
        // Specify the validation rules
        rules: {
        	nombre: {
	           required: true,
	           lettersandspaces: true,
        	},
            email: {
                required: true,
                email: true,
            },
            comentario: { 
                required: true,
                maxWords: 100,
                //nowhitespace: true
            },
        },
        
        // Specify the validation error messages
        messages: {
            nombre: {
            	required: "* Por favor ingresa tu nombre completo",
            	lettersandspaces: "* Solamente letras y espacios",
            },
            email: { 
                required: "* Por favor ingresa un correo electrónico",
                email: "* Por favor ingresa un correo electrónico válido",
                },
            comentario: {
                required: "* Por favor ingresa tus comentarios",
                maxWords: "* Máximo 100 palabras",
                //nowhitespace: "* Sin espacios por favor"
            },
        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });