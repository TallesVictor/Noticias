function tableNoticias() {
    let noticias = $("#noticias").val();
    $.ajax({
        type: "GET",
        url: `/noticia/search/${noticias}`,
        success: function(data) {
            console.log(data);
        }
    });
}