$(document).ready(function(){
  $("#formulForm").validate({
    rules: {
      lastname: {
        required: true,
        minlength: 2
      },
      firstname: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      tel: {
        required: true,
        minlength: 10,
      },
      agree:"required"
    },
    messages: {
      lastname: {
        required: "Entrer votre Nom de famille",
        minlength: "Veuillez entrer minimum 2 lettres"
      },
      firstname: {
        required: "Entrer votre Prenom",
      },
      email: {
          required: "Entrer votre email",
          email:"Veuillez respecter le format"
      },
      phone: {
        required:"Entrer votre Numero de tel",
      },
      agree: "Vous devez accepter que vos informations nous soit transmises"
    },
  });
});
