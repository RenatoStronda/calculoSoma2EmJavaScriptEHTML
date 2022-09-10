function validaForm() {
    if(document.getElementsByName("nome")[0].value=="") {
        alert("Por Favor, Preencha O Campo Nome!");
        document.getElementsByName("nome")[0].focus();
        return false;
    }
    let email = document.getElementsByName("email")[0].value;
    if(email == "") {
        alert("Por Favor, Preencha O Campo Email!");
        document.getElementsByName("email")[0].focus();
        return false;
    }

}
