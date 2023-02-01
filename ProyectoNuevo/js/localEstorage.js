let usaurio = document.getElementById('usuarioLogin');
let check = document.querySelector(".checkRecordar");
usuarios = JSON.parse(localStorage.getItem("usuario"));
if (localStorage.getItem("usuario")) {
  usuarios.forEach(element => {
  let container = document.getElementById("prueba")
  let div = document.createElement("div")
  usaurio.value = element.usuario;
  container.appendChild(div)
});
}else{

}
 
function guardarUsuario() {
  let usaurio = document.getElementById('usuarioLogin');
  let check = document.querySelector(".checkRecordar");
  if (check.checked == true) {
    usuario = [{
      usuario: usaurio.value,
    }]
    localStorage.setItem("usuario", JSON.stringify(usuario))
  } else {
  }
}
