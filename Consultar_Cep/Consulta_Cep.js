function consultaEndereco() {
  let cep = document.querySelector("#cep").value;
  if (cep.length !== 8) {
    alert("CEP iválido");
    return;
  }
  let url = `https://viacep.com.br/ws/${cep}/json/`;
  fetch(url).then(function (response) {
    response.json().then(mostrarEndereco);
  });
}
function mostrarEndereco(dados) {
  let resultado = document.querySelector("#container");
  if (dados.erro) {
    resultado.innerHTML = "não foi possível localizar endereço";
  }
  resultado.innerHTML = ` <h2>Aqui esta seu endereço:</h2>
                            <table border="1"><tr><th>Endereço:</th><td>${dados.logradouro}</td></tr>
                            <tr><th>Bairro:</th><td>${dados.bairro}</td></tr>
                            <tr><th>Cidade:</th><td> ${dados.localidade}</td></tr></table>`;
}
