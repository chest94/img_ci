<html>
    <head>
        <title>Upload Form</title>
    </head>
    <body>

        <?php echo $error; ?>

        <form action="<?php echo site_url('upload/do_upload'); ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="userfile" multiple="multiple"  />

            <br /><br />

            <input type="submit" value="upload" />

        </form>

    </body>
</html>