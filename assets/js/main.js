const cor_modo_tela_default = "C";
let texto_modo_escuro = document.getElementById("texto_modo_escuro");
const input_dark_mode = document.getElementById("input_dark_mode");

document.addEventListener("DOMContentLoaded", function(e) {
    carregar_modo_tela();
});

function carregar_modo_tela() {

    let body = document.querySelector("body");
    let titulo_hino = document.getElementById("titulo_hino");
    let card_header = document.getElementsByClassName("card-header");
    let h5_titulo_hino = document.getElementsByClassName("h5_titulo_hino");
    let card_body = document.getElementsByClassName("card-body");
    
    let modo_tela_definido = localStorage.getItem("modo_tela");
    
    if(modo_tela_definido == null) {
        localStorage.setItem("modo_tela", cor_modo_tela_default);
        carregar_modo_tela();
        return;
    }

    setTimeout(() => {

        switch(modo_tela_definido) {
        
            case 'C':

                input_dark_mode.checked = false;
    
                // Remover Classe 
                body.classList.remove("bg-dark");
                body.classList.remove("text-light");

                if(titulo_hino != null) {
                    titulo_hino.classList.remove("text-light");
                }

                Array.from(card_body).forEach(function(elemento) {
                    elemento.classList.remove("bg-dark");
                });
                
                // Adicionar Classe
                body.classList.add("bg-light");
                body.classList.add("text-dark");
                
                if(titulo_hino != null) {
                    titulo_hino.classList.add("text-dark");
                }
                
                Array.from(card_body).forEach(function(elemento) {
                    elemento.classList.add("bg-light");
                });
    
            break;
    
            case 'E':

            input_dark_mode.checked = true;
    
            // Remover Classe 
            body.classList.remove("bg-light");
            body.classList.remove("text-dark");
            
            if(titulo_hino != null) {
                titulo_hino.classList.remove("text-dark");
            }

            Array.from(card_header).forEach(function(elemento) {
                elemento.classList.remove("bg-light");
            });
            Array.from(h5_titulo_hino).forEach(function(elemento) {
                elemento.classList.remove("text-dark");
            });
            Array.from(card_body).forEach(function(elemento) {
                elemento.classList.remove("bg-light");
            });

    
            // Adicionar Classe
            body.classList.add("bg-dark");
            body.classList.add("text-light");
            
            if(titulo_hino != null) {
                titulo_hino.classList.add("text-light");
            }
            Array.from(card_header).forEach(function(elemento) {
                elemento.classList.add("bg-secondary");
            });
            Array.from(h5_titulo_hino).forEach(function(elemento) {
                elemento.classList.add("text-light");
            });
            Array.from(card_body).forEach(function(elemento) {
                elemento.classList.add("bg-dark");
            });

    
            break;
    
        }
        
    }, 500);

    // texto_modo_escuro.classList.add("text-light");
    texto_modo_escuro.style.color = "#000000";


}

function mudar_modo_tela() {

    let modo_tela = input_dark_mode.checked ? "E" : "C";
    localStorage.setItem("modo_tela", modo_tela);
    carregar_modo_tela();
    
}