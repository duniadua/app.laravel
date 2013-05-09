<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account
 *
 * @author sahid
 */
class Account_Controller extends Base_Controller {

    //put your code here
    public function action_index() {
        return View::make('account.index');
    }

    public function action_login() {
        
    }

    public function action_logout() {
        
    }

    public function action_add() {

        $data = array(
            'username' => Input::get('username'),
            'passsword' => Input::get('password'),
            'email' => 'duniadua@gmail.com',
            'role' => 'user',
            'active' => Input::get('active'),
        );

        $news = new News($data);
        $news->save();

        return Redirect::to('account');
    }

}

?>
