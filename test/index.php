<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <!-- <div class="container pt-5 text-center">
        <button class="btn btn-primary" onclick="cargarFF_comentario(0)">Cagar Archivo</button>
        <textarea style="display:none;" id="ffSend_comentario_0"></textarea>
        <textarea style="display:none;" id="ffSend_comentario_complete_0"></textarea>
        <div style="margin-top:5px;" id="losFiles_comentario_0"></div>
    </div> -->

    <div class="container pt-5 text-center">
        <button class="btn btn-primary" onclick="cargarFF_comentario(0)">Cargar Archivo</button>
        <input type="file" id="inputFile_0" style="display:none;" multiple>
        <textarea style="display:none;" id="ffSend_comentario_0"></textarea>
        <textarea style="display:none;" id="ffSend_comentario_complete_0"></textarea>
        <div style="margin-top:5px;" id="losFiles_comentario_0"></div>
        <div id="fileAttach_0"></div>
    </div>



    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Filestack -->
    <!-- <script src="https://static.filestackapi.com/v3/filestack.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

    <script src="script.js"></script>
</body>

</html>