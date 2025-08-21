function cargarFF_comentario(idx) {
    $("#inputFile_" + idx).click(); // simulamos el click
}

$("#inputFile_0").on("change", function (e) {
    let files = e.target.files;
    for (let i = 0; i < files.length; i++) {
        subirArchivo(files[i], 0);
    }
});

function subirArchivo(file, idx) {
    let formData = new FormData();
    formData.append("archivo", file);

    $.ajax({
        url: "upload.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log("Respuesta cruda del servidor:", response); // <- siempre verás qué devuelve PHP

            try {
                let res = JSON.parse(response);

                if (res.error) {
                    console.error("Error desde PHP:", res.error, "Código HTTP:", res.http_code);
                    alert("Error: " + res.error);
                    return; // cortamos aquí
                }

                if (res.url) {
                    let file_name = file.name;
                    let ext = file_name.split('.').pop();
                    let short_name = (file_name.length > 10) ? file_name.substring(0, 6) + '...' + ext : file_name;

                    let out = `<a target="_blank" href="${res.url}">
                <button type="button" class="btn btn-default btn-sm" style="margin-right:5px;margin-bottom:5px;">
                <i class="fa fa-file-text" aria-hidden="true"></i> ${short_name}</button></a>`;

                    let out_complete = `<a target="_blank" href="${res.url}">
                <button type="button" class="btn btn-default btn-sm" style="margin-right:5px;margin-bottom:5px;">
                <i class="fa fa-file-text" aria-hidden="true"></i> ${file_name}</button></a>`;

                    $("#losFiles_comentario_" + idx).append(out);
                    $("#fileAttach_" + idx).append(
                        `<input type="hidden" name="enlace[]" value="${res.url}">
                 <input type="hidden" name="nomfile[]" value="${file_name}"><br>`
                    );

                    document.getElementById("ffSend_comentario_" + idx).value += out;
                    document.getElementById("ffSend_comentario_complete_" + idx).value += out_complete;
                }
            } catch (e) {
                console.error("Error parseando JSON:", e, "Respuesta:", response);
            }
        },
        error: function (error) {
            console.error("AJAX Error:", error);
        }

    });
}
