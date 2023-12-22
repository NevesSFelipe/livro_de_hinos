document.addEventListener("DOMContentLoaded", function(e) {

});

function listar_hinos(elemento) {

    let grupo_hino = elemento.getAttribute("name");
    window.location.href = `index/listar_hinos/${grupo_hino}`;

}