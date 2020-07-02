$(document).ready(function(){

  $("#formulForm").validate({

    rules: {

      lastname: {
        required: true,
      },

      firstname: {
        required: true,
      },

      email: {
        required: true,
        email: true,
      },

      phone: {
        required: true,
        minlength: 10,
      },

      agree:"required"
    },

    messages: {

      lastname: {

        required: "Entrer votre Nom de famille",
      },

      firstname: {
        required: "Entrer votre Prenom",
      },

      email: {
          required: "Entrer votre email",
          email:"Veuillez respecter le format "
      },

      phone: {
        required:"Entrer votre Numero de tel",
        minlength: "Veuillez entrer des chiffres",
        color: "red"
      },

      message: {

        required:"Entrer votre message",

      },

      agree: "Vous devez accepter que vos informations nous soit transmises"
    },

  });

});
