function verificar(){
    if(document.getElementById("nome").value == ""){
        alert("Campo Nome está vazio!");
        document.getElementById("nome").focus();
    }
    if(document.getElementById("email").value == ""){
        alert("Campo Email está vazio!");
        document.getElementById("email").focus();
    }
    //if(document.getElementById("reclamacao").cheked =true ||  document.getElementById("elogio").cheked = true || document.getElementById("reclamacao").cheked = true){
    //   alert("ok")
    //}else{
    //    alert("adjsdçlsndflkshdn")
    //}
    //if(document.getElementsByName("tipo_contato")[0].cheked == false){
    //    alert("adsdsads")
    //}
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