(function(){
 
  var nomeUsuario = document.querySelector('#nomeUsuario');
  var nomeUsuarioCadastrado = localStorage.getItem('Nome');
  var sobrenomeUsuarioCadastrado = localStorage.getItem('Sobrenome');

  nomeUsuario.innerHTML = `${nomeUsuarioCadastrado} ${sobrenomeUsuarioCadastrado}`;
}());
