let titulo_hino;
let dropdown_hinos;

document.addEventListener("DOMContentLoaded", function(e) {
    mapear_DOM();
    listar_hinos();
});

function mapear_DOM() {
    titulo_hino = document.getElementById("titulo_hino");
    dropdown_hinos = document.getElementById("dropdown_hinos");
}

async function listar_hinos() {

    let urlAtual = window.location.href;
    let arrayURLAtual = urlAtual.split("/");
    let grupo_hino = arrayURLAtual[ (arrayURLAtual.length) - 1 ];
    
    const apiUrl = `../retornar_lista_hinos_js/${grupo_hino}`;

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
                        <div class="card-header bg-dark" id="heading_${data.msgs.hinos[key]["id_hino"]}">
                            <h2 class="mb-0">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapse_${data.msgs.hinos[key]["id_hino"]}" aria-expanded="true" aria-controls="collapse_${data.msgs.hinos[key]["id_hino"]}">
                                    <h5 class="text-info">${data.msgs.hinos[key]["titulo_hino"]}</h5>
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

function nl2br(str) {
    return str.replace(/(?:\r\n|\r|\n)/g, '<br>');
}