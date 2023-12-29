let titulo_hino;
let dropdown_hinos;
let pesquisar_hino;
let tamanho_fonte_h5 = 1.25;
let tamanho_fonte_div = 16;

document.addEventListener("DOMContentLoaded", function(e) {
    mapear_DOM();
    listar_hinos();
});

function mapear_DOM() {
    titulo_hino = document.getElementById("titulo_hino");
    dropdown_hinos = document.getElementById("dropdown_hinos");
    pesquisar_hino = document.getElementById("pesquisar_hino");
}

async function listar_hinos() {

    let urlAtual = window.location.href;
    let arrayURLAtual = urlAtual.split("/");
    let grupo_hino = arrayURLAtual[ (arrayURLAtual.length) - 1 ];

    let string_busca = pesquisar_hino.value;
    string_busca = string_busca == "" ? "1" : string_busca; 

    const apiUrl = `../retornar_lista_hinos_js/${grupo_hino}/${string_busca}`;
    
    const options = {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
        },
    };

    fetch(apiUrl, options)

        .then(response => {
            
            if (!response.ok) {
                throw new Error(`Erro de rede: ${response.status}`);
            }
            
            return response.json(); 
        })

        .then(data => {

            let html = "";
            
            for(const key in data.msgs.hinos) {
                
                html +=

                    `<div class="card mb-3">
                        <div class="card-header" id="heading_${data.msgs.hinos[key]["id_hino"]}" data-toggle="collapse" data-target="#collapse_${data.msgs.hinos[key]["id_hino"]}" aria-expanded="true" aria-controls="collapse_${data.msgs.hinos[key]["id_hino"]}">
                            <h2 class="mb-0">
                                <button class="btn" type="button">
                                    <h5 class="h5_titulo_hino">${data.msgs.hinos[key]["titulo_hino"]}</h5>
                                </button>
                            </h2>
                        </div>

                        <div id="collapse_${data.msgs.hinos[key]["id_hino"]}" class="collapse collapsed" aria-labelledby="heading_${data.msgs.hinos[key]["id_hino"]}" data-parent="#dropdown_hinos">
                            <div class="card-body">` +
                                nl2br(data.msgs.hinos[key]["letra_hino"]) +
                            `</div>
                        </div>
                    </div>`
                ;
            }
            titulo_hino.textContent = data.msgs.nome_grupo;
            dropdown_hinos.innerHTML = html;

        })

        .catch(error => {
            console.error('Erro na requisição:', error.message);
        });
    
}

function aumentar_tamanho_fonte() {
    
    if(tamanho_fonte_h5 < 2.5) {
        
        tamanho_fonte_h5 += 0.25;
    
        let h5_titulo_hino = document.getElementsByClassName("h5_titulo_hino");

        Array.from(h5_titulo_hino).forEach(function(elemento) {
            elemento.style.fontSize = `${tamanho_fonte_h5}rem`;
        });
    
    }    

    if(tamanho_fonte_div < 20) {

        tamanho_fonte_div += 1;

        let div_letra_hino = document.getElementsByClassName('card-body');
    
        Array.from(div_letra_hino).forEach(function(elemento) {
            elemento.style.fontSize = `${tamanho_fonte_div}px`;
        });

    }
}

function diminuir_tamanho_fonte() {
    
    if(tamanho_fonte_h5 > 1.25) {
        
        tamanho_fonte_h5 -= 0.25;
    
        let h5_titulo_hino = document.getElementsByClassName("h5_titulo_hino");

        Array.from(h5_titulo_hino).forEach(function(elemento) {
            elemento.style.fontSize = `${tamanho_fonte_h5}rem`;
        });
    
    } 
    
    if(tamanho_fonte_div > 16) {

        tamanho_fonte_div -= 1;

        let div_letra_hino = document.getElementsByClassName('card-body');
    
        Array.from(div_letra_hino).forEach(function(elemento) {
            elemento.style.fontSize = `${tamanho_fonte_div}px`;
        });

    }
    
}

function nl2br(str) {
    return str.replace(/(?:\r\n|\r|\n)/g, '<br>');
}