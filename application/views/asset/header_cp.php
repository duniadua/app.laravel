<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="navbar">
    <div class="navbar-inner">
        <?php echo HTML::link('account','Control Panel', array('class' => 'brand'));?>
        <ul class="nav">
            <li class="divider-vertical"></li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> News <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><?php echo HTML::link('account','News'); ?></li>                    
                    <li><?php echo HTML::link('account','Teaser'); ?></li>
                    <li class="divider"></li>
                </ul>
            </li>
        </ul>
        <ul class="nav">
            <li class="divider-vertical"></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Information <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php ?>"> Add Information</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-info-sign"></i> Credit</a></li>
                    <li><a href="<?php ?>"><i class="icon-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
