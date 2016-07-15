<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Subir imágenes</title>

    </head>
    <body>

        <div id="container">
            <h1>Suba sus imagenes</h1>

            <div id="body">
                <?php echo $error; ?>

                <?php echo form_open_multipart('upload/do_upload'); ?>
                <input type = "file" name = "userfile"/> 
                <br /><br /> 
                <input type = "submit" value = "Subir" /> 
                </form>
            </div>
        </div>
    </body>
</html>