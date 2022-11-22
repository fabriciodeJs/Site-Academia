var Nome, Sobrenome, Email, Celular, Nascimento, Endereco, Estado, Cidade, Sexo, Cpf, Senha, Senhaconf;

function pegarValores() {
  var nome = document.querySelector('input#nome');
  var sobrenome =document.querySelector('input#sobrenome');
  var email = document.querySelector('input#email');
  var celular = document.querySelector('input#celular');
  var nascimento = document.querySelector('input#nascimento');
  var cpf = document.querySelector('input#cpf');
  var endereco = document.querySelector('input#endereco');
  var estado = document.querySelector('input#estado');
  var cidade = document.querySelector('input#cidade');
  var senha = document.querySelector('input#senha');
  var senhaconf = document.querySelector('input#senha-dois')

  Nome = nome.value;
  Sobrenome = sobrenome.value;
  Email = email.value;
  Celular = celular.value;
  Nascimento = nascimento.value;
  Cpf = cpf.value;
  Endereco = endereco.value;
  Estado = estado.value;
  Cidade = cidade.value;
  Sexo = estado.value;
  Senha = senha.value;
  Senhaconf = senhaconf.value;

  //localStorage.setItem("CPF", Cpf);
  //localStorage.setItem("Senha", Senha);
  //localStorage.setItem("Nome", Nome);
  //localStorage.setItem("Sobrenome", Sobrenome);
}


function comparar() {
  var senha = document.querySelector('input[name=senha]');
  var senhaconf = document.querySelector('input[name=senhaconf]')

  if (senhaconf.value === senha.value) {
    senhaconf.setCustomValidity('');
  } else {
    senhaconf.setCustomValidity('As senhas Não conferem');
  }
}

/*function logar(event) {
  event.preventDefault();

  var login = document.querySelector('input#cpf');
  var senha = document.querySelector('input#senha');

  var cpfCadastrado = localStorage.getItem("CPF");
  var senhaCadastrada = localStorage.getItem("Senha");

  if (login.value == cpfCadastrado && senha.value == senhaCadastrada) {
    location.href = "Sucesso.html";
  } else {
    alert('Usuario ou senha Incorreto');
  }
}*/

