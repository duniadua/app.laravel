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
        <div class="container">
            <div class="span5">
                    <fieldset>
                        <legend>News Update</legend>
                        <label>User Name</label>
                        <?php
                        echo Form::open('account/add');
                        echo Form::text('username');
                        echo Form::label('pwd','Password');
                        echo Form::password('password')."</br>";
                        
                        $active = array(
                            'Y' => 'active',
                            'N' => 'inactive',
                        );
                        
                        echo Form::select('active',$active)."</br>";
                        echo Form::submit('Save', array('class' => 'btn btn-primary'));
                        echo Form::close();
                        ?>
                    </fieldset>
            </div>
            <div class="span5">

            </div>
        </div>

    </body>
    <?php
    echo render('asset.footer');
    ?>
</html>
