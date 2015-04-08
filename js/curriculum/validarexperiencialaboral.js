
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#registrar").validate({
    
        // Specify the validation rules
        rules: {
            inicio1: {
                required: false,
                digits: true,
                minlength: 4,
                maxlength: 4,
                min: 1900,
                max: 2014,
            },
            final1: {
                required: false,
                digits: true,
                minlength: 4,
                maxlength: 4,
                min: 1900,
                max: 2014,
            },
            empresa1: {
                required: false,
                lettersandspaces: true,
            },
            cargo1: {
                required: false,
                lettersandspaces: true,
            },
            descripcion1: {
                required: false,
                description: true,
                maxWords: 30,
            },


            inicio2: {
                required: false,
                digits: true,
                minlength: 4,
                maxlength: 4,
            },
            final2: {
                required: false,
                digits: true,
                minlength: 4,
                maxlength: 4,
            },
            empresa2: {
                required: false,
                lettersandspaces: true,
            },
            cargo2: {
                required: false,
                lettersandspaces: true,
            },
            descripcion2: {
                required: false,
                description: true,
                maxWords: 30,
            },


            inicio3: {
                required: false,
                digits: true,
                minlength: 4,
                maxlength: 4,
            },
            final3: {
                required: false,
                digits: true,
                minlength: 4,
                maxlength: 4,
            },
            empresa3: {
                required: false,
                lettersandspaces: true,
            },
            cargo3: {
                required: false,
                lettersandspaces: true,
            },
            descripcion3: {
                required: false,
                description: true,
                maxWords: 30,
            },


        },
        
        // Specify the validation error messages
        messages: {
            inicio1: {
                //required: "",
                digits: "Por favor ingresa un año válido (YYYY)",
                minlength: "Mínimo 4 dígitos (YYYY)",
                maxlength: "Máximo 4 dígitos (YYYY)",
                min: "Ingresa un año igual o mayor que 1900",
                max: "Ingresa un año igual o menor que 2014",
            },
            fin1: {
                //required: "",
                digits: "Por favor ingresa un año válido (YYYY)",
                minlength: "* Mínimo 4 dígitos (YYYY)",
                maxlength: "* Máximo 4 dígitos (YYYY)",
                min: "Ingresa un año igual o mayor que 1900",
                max: "Ingresa un año igual o menor que 2014",
            },
            empresa1: {
                //required: "",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
            },
            cargo1: {
                //required: "",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
            },
            descripcion1: {
                //required: "",
                description: "* Por favor ingresa un nombre válido - no utilices números",
                maxWords: "Máximo 30 palabras",
            },


            inicio2: {
                //required: "",
                digits: "Por favor ingresa un año válido (YYYY)",
                minlength: "Mínimo 4 dígitos (YYYY)",
                maxlength: "Máximo 4 dígitos (YYYY)",
                min: "Ingresa un año igual o mayor que 1900",
                max: "Ingresa un año igual o menor que 2014",
            },
            fin2: {
                //required: "",
                digits: "Por favor ingresa un año válido (YYYY)",
                minlength: "* Mínimo 4 dígitos (YYYY)",
                maxlength: "* Máximo 4 dígitos (YYYY)",
                min: "Ingresa un año igual o mayor que 1900",
                max: "Ingresa un año igual o menor que 2014",
            },
            empresa2: {
                //required: "",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
            },
            cargo2: {
                //required: "",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
            },
            descripcion2: {
                //required: "",
                description: "* Por favor ingresa un nombre válido - no utilices números",
                maxWords: "Máximo 30 palabras",
            },


            inicio3: {
                //required: "",
                digits: "Por favor ingresa un año válido (YYYY)",
                minlength: "Mínimo 4 dígitos (YYYY)",
                maxlength: "Máximo 4 dígitos (YYYY)",
                min: "Ingresa un año igual o mayor que 1900",
                max: "Ingresa un año igual o menor que 2014",
            },
            fin3: {
                //required: "",
                digits: "Por favor ingresa un año válido (YYYY)",
                minlength: "* Mínimo 4 dígitos (YYYY)",
                maxlength: "* Máximo 4 dígitos (YYYY)",
                min: "Ingresa un año igual o mayor que 1900",
                max: "Ingresa un año igual o menor que 2014",
            },
            empresa3: {
                //required: "",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
            },
            cargo3: {
                //required: "",
                lettersandspaces: "* Por favor ingresa un nombre válido - no utilices números ni signos de puntuación",
            },
            descripcion3: {
                //required: "",
                description: "* Por favor ingresa un nombre válido - no utilices números",
                maxWords: "Máximo 30 palabras",
            },

        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });