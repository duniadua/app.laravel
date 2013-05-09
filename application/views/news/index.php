<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php
        echo render('asset.html_config_common');
        echo render('asset.header_cp');

//        $mssg = Session::get('mssg');
        ?>
    </head>
    <body>
        <div class="container">
            <div class="span5">
                <fieldset>
                    <legend>New News</legend>
                    <label>Title</label>
                    <?php
                    echo Form::open('news/add');
                    echo Form::text('title');
                    
                    $catagory = array(
                        'News' => 'News',
                        'Syariah' => 'Syariah',
                    );
                    echo Form::label('cat', 'News Catagory');
                    echo Form::select('catagory', $catagory) . "</br>";
                    echo Form::label('det', 'Details');
                    echo Form::textarea('detail','',array('cols' => 80)) . "</br>";

                    $active = array(
                        'true' => 'active',
                        'false' => 'inactive',
                    );

                    echo Form::select('active', $active) . "</br>";
                    echo Form::submit('Save', array('class' => 'btn btn-primary'));
                    echo Form::close();
                    echo $mssg;
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
