function preencherJanela(){
    let nome = prompt("Digite seu nome");
    let email = prompt("Digite seu email");
    let mensagem = prompt("Digite sua mensagem");

    const inputNome = document.getElementById("form_nome");
    const inputEmail = doument.getElementById("form_email");
    const inputMensagem = doument.getElementById("form_mensagem");

    inputNome.valeu = nome;
    inputNome.valeu = email;
    inputNome.valeu = mensagem;
}
const botao = document.getElementById("botao");
botao.innerText = "Enviar somente";
botao.innerHTML = "<strong>Enviar somente</strong>";

botao.addEventListener("click", (e) => {
    e.preventDefault();
    preencherJanela();
});   
// Forma tradicional de declarar uma função
function alertaJanela1(){
    alert("Cliquei no botão");
}
// Forma de declarar uma função anônima em uma variável
const alertaJanela2 = () => {
    alert("Cliquei no botão");
}
// Forma de declarar uma função anônima em uma variável sem chaves
const alertaJanela3 = () => alert("Cliquei no botão");

const botaoCliqueExercicio = document.getElementById("clique_exercicio");
botaoCliqueExercicio.addEventListener(
    "click",
    (e) => {
        const form = document.getElementById("form_exercicio");
        e.preventDefault();
        form.submit();
    }
)


