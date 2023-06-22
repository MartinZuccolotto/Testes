/* Obtém o elemento do botão e o elemento do valor
var botao = document.getElementById("botao-incremento");
var valorElemento = document.getElementById("valor");

// Define uma variável para armazenar o valor
var valor = 0;

// Define a função de incremento
function incrementar() {
  valor++;
  valorElemento.textContent = valor;
}

// Adiciona um ouvinte de evento ao botão para chamar a função de incremento quando clicado
botao.addEventListener("click", incrementar);
*/