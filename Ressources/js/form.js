FORM = {
  pw1:"",
  pw2:"",
  formulaire:"",
  bouton:"",
  content:"",

  init: function() {

    if (document.querySelector('.newpass-container') !== null){

      FORM.formulaire = document.querySelector('.formulaire');
      FORM.formulaire.bubbles = false;
      FORM.content= document.querySelector('.header-container')
      FORM.pwd1 = document.querySelector('input[name=pass1]');
      FORM.pwd2 = document.querySelector('input[name=pass2]');
      FORM.bouton = document.querySelector('#bouton')
      //FORM.pw1.addEventListener("keyup", FORM.CheckPassword);
      FORM.bouton.addEventListener("click", FORM.CheckPassword);

    };

  },

  CheckPassword: function(evt) {

    if (FORM.pwd1.value != "" && FORM.pwd1.value == FORM.pwd2.value){

      if(FORM.pwd1.value.length < 6) {
        message = "Votre mot de passe doit contenir au moins 6 caractères !";
        FORM.ShowMessage(message);
        return false;
      }

      re = /[0-9]/;
      if(!re.test(FORM.pwd1.value)) {
        message = "Votre mot de passe doit contenir au moins 1 nombre (0-9)!";
        FORM.ShowMessage(message);
        return false;
      }

      re = /[a-z]/;
      if(!re.test(FORM.pwd1.value)) {
        message = "Votre mot de passe doit contenir au moins une lettre en minuscule (a-z)!";
        FORM.ShowMessage(message);
        return false;
      }

      re = /[A-Z]/;
      if(!re.test(FORM.pwd1.value)) {
        message = "Votre mot de passe doit contenir au moins une lettre en majuscule (A-Z)!";
        FORM.ShowMessage(message);
        return false;
      }
    }

    else {
      message = "Merci de vérifier que vous avez entrer et confirmer votre mot de passe correctement !";
      FORM.ShowMessage(message);
      return false;
    }
    message = "Mot de passe validé : " + FORM.pwd1.value;
    FORM.ShowMessage(message);
    return true;
  },

  ShowMessage: function(message){

    console.log(message);
    var div = document.createElement('div');
    div.className = 'popup';
    div.innerHTML = '<p>'+message+'</p>';
    FORM.content.appendChild(div);
  }
}
