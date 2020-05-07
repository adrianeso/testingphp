<?php include_once 'functions.php'?>
<!doctype html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Archivos</title>
    </head>
    <body>
        <div>
            <div>
                <h3>Procesamiento envío de archivos</h3>
            </div>

            <div>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <div>
                        <input type="hidden" name="form1" id="form1" value="form1">
                        <input type="file" name="file" id="file">
                    </div>

                    <div>
                        <button>Enviar</button>
                    </div>

                </form>
            </div>

            <?php
                $path = './files/';
                $files = (allFilesFromFolder($path ));
            ?>

    </body>
</html>


<?php
    if (isset($_POST['form1']) == 'form1' && isset($_FILES['file']) ){

        $fileName = $_FILES['file']['name'];
        $tmpName = $_FILES['file']['tmp_name'];
        $path = './files/';
        $newFolderName = 'usuario-'.date('m').'/';

        $subirArchivo = uploadPhoto($fileName, $tmpName, $path, $newFolderName);

        if ($subirArchivo){
            echo "Archivo subido con exito";
        }else{
            echo "Fallo la subida del archivo intenta cambiar el nombre";
        }


    }


?>