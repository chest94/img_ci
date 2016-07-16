<html>
    <head>
        <title>Upload Form</title>
        <script <?php echo 'src="' . base_url() . '/assets/js/jquery-2.2.4.min.js"'; ?>></script>

        <script type="text/javascript">
            $(document).ready(function () {
                llenar_div();
            });

            function llenar_div() {
                var uri = '<?= site_url() ?>';
                uri += "/upload/get_img/";
                
                var url = '<?= base_url() ?>';
                url += "uploads/";
                
                $.post(uri, null, function (resp) {
                    for (var i = 0; i < resp.length; i++) {
                        $('#img').append('<img src="' + url + resp[i].ruta + '"  height="100" width="100">');
                    }
                }, "json");
                return false;
            }
            ;
        </script>
    </head>
    <body>

        <?php echo $error; ?>

        <form action="<?php echo site_url('upload/do_upload'); ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="userfile" multiple="multiple"  />

            <br /><br />

            <input type="submit" value="upload" />
        </form>

        <div id="img">

        </div>
    </body>
</html>