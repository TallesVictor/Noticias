hideLoading();

$(document).ready(function() {
    hideLoading();
});


function htmlNoticias() {
    let noticias = $("#noticias").val();
    let html = '';
    loading();
    if (!noticias.trim()) {
        listAll();
    } else {
        $.ajax({
            type: "GET",
            url: `/noticia/search/${noticias}`,
            success: function(data) {
                for (let i = 0; i < data.length; i++) {
                    const element = data[i];
                    html = corpoNoticia(element);
                }
                $("#htmlNoticias").html(html);
                hideLoading();
            },
            error: function(xhr) {
                let html = `<div class="col pt-2 pb-3 mt-4 alert-danger text-center">
                                    ${xhr.responseText}
                                </div>
                    `;
                $("#htmlNoticias").html(html);
                hideLoading();
            }
        });

    }
}

function abrirNoticia(id) {
    let html = '';
    loading();
    $.ajax({
        type: "GET",
        url: `/noticia/${id}`,
        success: function(data) {
            for (let i = 0; i < data.length; i++) {
                const element = data[i];
                let texto = element.texto;
                html += `<div class="col-md-12 col-sm-12 col-xs-12 pt-2 pb-3">
                                <button class="btn btn-outline-info" onclick="listAll()">Voltar</button>
                                   <div class="card">
                                     <h3 class="card-title">${element.titulo}</h3>
                                         <img class="m-auto p-1 shadow-sm" style="border-radius: 10px;width: 18rem;"
                                             src="/${element.img}" alt="${element.titulo}">
                                         <div class="card-body">
                                             <p class="card-text"> ${texto}</p>
                                         </div>
                                     </div>
                              </div>`;
            }
            $("#htmlNoticias").html(html);
            hideLoading();
        },
        error: function(xhr) {
            let html = `<div class="col pt-2 pb-3 mt-4 alert-danger text-center">
                                    ${xhr.responseText}
                                </div>
                    `;
            $("#htmlNoticias").html(html);
            hideLoading();
        }
    });
}

function listAll() {
    let html = '';
    loading();
    if ($("#noticias").val().trim()) {
        htmlNoticias();
    } else {
        $.ajax({
            type: "GET",
            url: `/noticia`,
            success: function(data) {
                for (let i = 0; i < data.length; i++) {
                    const element = data[i];
                    let texto = element.texto.substr(0, 150) + "...";
                    html += corpoNoticia(element);
                }
                $("#htmlNoticias").html(html);
                hideLoading();
            },
            error: function(xhr) {
                let html = `<div class="col pt-2 pb-3 mt-4 alert-danger text-center">
                            ${xhr.responseText}
                        </div>
            `;
                $("#htmlNoticias").html(html);
                hideLoading();
            }
        });
    }
}

function corpoNoticia(element) {
    let texto = element.texto.substr(0, 150) + "...";
    let html = `<div class="col-md-4 col-sm-4 col-xs-12 pt-2 pb-3">
                    <div class="card">
                        <img class="m-auto p-1 shadow-sm" style="border-radius: 10px;width: 18rem;"
                            src="/${element.img}" alt="${element.titulo}">
                        <div class="card-body">
                            <h5 class="card-title">${element.titulo}</h5>
                            <p class="card-text"> ${texto}</p>
                            <button class="btn btn-primary w-100" onclick="abrirNoticia(${element.id})">Saber Mais</button>
                        </div>
                    </div>
                </div>
                `;


    return html;

}