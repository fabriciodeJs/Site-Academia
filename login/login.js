function logar(){
    var login = window.document.querySelector('input#cpf')
    var senha = window.document.querySelector('input#senha')

    if(login.value == 'admin' && senha.value == 'admin'){
        location.href = "Sucesso.html";
    }else{
        alert('Usuario ou senha Incorreto')
    }
}

