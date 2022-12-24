"use strict";
const myForm = document.getElementById("cadastroClientes");
myForm.addEventListener("submit", cadastrarCliente);

function cadastrarCliente(wait) {
  wait.preventDefault();
  const formData = new FormData(this);
  const searchParams = new URLSearchParams();

  for (const par of formData) {
    searchParams.append(par[0], par[1]);
  }

  fetch("cadastro.php", {
    method: "POST",
    body: formData,
  })
    .then(function (response) {
      console.log(response);
      return alert("Dados gravados com sucesso!");
    })
    .catch(function (error) {
      console.log(error);
    });
}
