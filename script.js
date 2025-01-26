// verifica e muda a descrição do botão Ler mais... Ler Menos...
function mostrarMais(id) {
    var botaoLerMais = document.getElementById(id); // pega as propriedades do botão para mudar a descrição dele

    if (botaoLerMais.innerHTML === "Ler menos...") {       
        document.getElementById(id).innerHTML = "Leia mais..."; // Muda o texto do botão
    } else {
        document.getElementById(id).innerHTML = "Ler menos..."; // Muda o texto do botão
    }
}
// fim do verifica e muda a descrição do botão Ler mais... Ler Menos...

// inicio do insere o ano atual no footer para compor o copyright
document.addEventListener("DOMContentLoaded", function() {
    var anoAtual = new Date().getFullYear();
    document.getElementById("anoAtual").textContent = anoAtual;
});
// fim do insere o ano atual no footer para compor o copyright

// inicio do expande todos os elementos collapse antes de iniciar impressão para que todo o conteúdo de texto seja impresso
window.addEventListener('beforeprint', () => {
    // Expandir todos os elementos de collapse
    var collapseElements = document.querySelectorAll('.collapse');
    collapseElements.forEach(element => {
        element.classList.add('show');
    });
});
// fim do expande todos os elementos collapse antes de iniciar impressão para que todo o conteúdo de texto seja impresso

// inicio das funções da sessão de contato (e-mail e what´s app)
// Ofuscar endereço de e-mail
document.addEventListener('DOMContentLoaded', function() {
    var emailElement = document.getElementById('email');
    emailElement.href = 'mailto:' + 'rodrigodanieldonha' + '@' + 'hotmail.com';
});

// Ofuscar o número de WhatsApp
document.getElementById('whatsapp-button').addEventListener('click', function() {
    var name = document.getElementById('name').value;
    var message = document.getElementById('message').value;
    var url = 'https://api.whatsapp.com/send?phone=+5518981182182&text=Nome:%20' + encodeURIComponent(name) + '%0AMensagem:%20' + encodeURIComponent(message);
    window.open(url, '_blank');
});
// fim das das funções da sessão de contato (e-mail e what´s app)