
var btnAcessar = document.querySelector("#login-access-js");
var btnCriar = document.querySelector("#login-create-js");
var body = document.querySelector("body");

btnAcessar.addEventListener("click", function (){
	body.className = "login-acessar-js"
});

btnCriar.addEventListener("click", function (){
	body.className = "login-criar-js" 
});