<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news
 *
 * @author sahid
 */
class News extends Base_Controller {
    //put your code here
    
    public function action_news(){
        
    }
    
    public function action_index(){
        return View::make('news.index');
    }
    
}
