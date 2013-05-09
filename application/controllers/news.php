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
class News_Controller extends Base_Controller {
    //put your code here
    
    public function action_news(){
        
    }
    
    public function action_index(){
        return View::make('news.index')->with('mssg','');
    }
    
    public function action_add(){
        $data = array(
            'catagory' => Input::get('catagory'),
            'title' => Input::get('title'),
            'detail' => Input::get('detail'),
            'user' => 'user',
            'active' => Input::get('active'),
            'ip_address' => Request::ip(),
        );

        $news = new News($data);
        $news->save();
        return View::make('news.index')->with('mssg','<div class=alert>'.Input::get('title').' Added </div>');
    }
}
