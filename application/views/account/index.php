<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php
        echo render('asset.html_config_common');
        echo render('asset.header_cp');
        ?>
    </head>
    <body>
        <?php
        // put your code here
        echo Form::label('hello', 'Manage you account here');
        ?>
    </body>
    <?php
    echo render('asset.footer');
    ?>
</html>
