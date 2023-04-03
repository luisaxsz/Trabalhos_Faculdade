"use strict";
const myForm = document.getElementById("cadastroProdutos");
myForm.addEventListener("submit", cadastrarProdutos);

function cadastrarProdutos(wait) {
  wait.preventDefault();
  const formData = new FormData(this);
  const searchParams = new URLSearchParams();

  for (const par of formData) {
    searchParams.append(par[0], par[1]);
  }

  fetch("Estoque.php", {
    method: "POST",
    body: formData,
  })
    .then(function (response) {
      console.log(response);
      return alert("Produtos cadastrados com sucesso!");
    })
    .catch(function (error) {
      console.log(error);
    });
}
