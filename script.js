function verificar(){
    if(document.getElementById("nome").value == ""){
        alert("Campo Nome está vazio!");
        document.getElementById("nome").focus();
    }
    if(document.getElementById("email").value == ""){
        alert("Campo Email está vazio!");
        document.getElementById("email").focus();
    }
    var radios = document.getElementsByName("tipo_contato");
    var check_radio = false;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            check_radio = true;
        }
    }
    if(!check_radio){
        alert("Campo Tipo de Contato está vazio!")
    }
    if(document.getElementById("msg").value == ""){
        alert("Campo Mensagem está vazio!");
        document.getElementById("msg").focus();
    }
}

function verificar_campos(){
    if(document.getElementById("login").value==""){
        alert("Campo Login está vazio!");
    }else if(document.getElementById("senha").value==""){
        alert("Campo Senha está vazio!");
    }
}

function verificar_campos_prod(){
    if(document.getElementById("nome").value==""){
        alert("Campo Nome está vazio!");
    }else if(document.getElementById("preco").value==""){
        alert("Campo Preço está vazio!");
    }else if(document.getElementById("endereco").value==""){
        alert("Campo Endereço está vazio!");
    }else if(document.getElementById("destaque").value==""){
        alert("Campo Destaque está vazio!");
    }
}

function sucesso(){
    alert("Cadastro Realizado com sucesso!");
}