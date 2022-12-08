var senha = document.getElementById("senha")
  , confirmar_senha = document.getElementById("confirmar_senha");

function validatesenha(){
  if(senha.value != confirmar_senha.value) {
    confirmar_senha.setCustomValidity("Senhas diferentes!");
  } else {
    confirmar_senha.setCustomValidity('');
  }
}

senha.onchange = validatesenha;
confirmar_senha.onkeyup = validatesenha;

function redirecionar(){
  window.location.replace('back.php')
}

// var email = document.getElementById("email")
//   , confirmar_email = document.getElementById("confirmar_email");

// function validaremail(){
//   if(senha.value != confirmar_email.value) {
//     confirmar_email.setCustomValidity("E-mail diferente!");
//   } else {
//     confirmar_email.setCustomValidity('');
//   }
// }

// email.onchange = validaremail;
// confirmar_email.onkeyup = validaremail;
