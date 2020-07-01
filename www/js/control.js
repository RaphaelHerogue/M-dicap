$().ready(function() {


  $("#formulForm").validate({


    rules: {
      firstname: "required",
      lastname: "required",

      nom: {
        required: true,
        minlength: 3,
      },

      prenom: {
        required: true,
        minlength: 3,
      },

      email: {
        required: true,
        email: true,
      },

      tel: {
        required: true,
        minlength: 10,
      },

    },


    messages: {
      firstname: "Entrer votre nom",
      lastname: "Entrer votre prenom",

      nom: {
        required: "Entrer votre Nom de famille",
      },

      prenom: {
        required: "Entrer votre Prenom",
      },

      email: {
          required: "Entrer votre email"
      },

      tel: {
        required:"Entrer votre Numero de tel",
      },


  })
