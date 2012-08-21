<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author inovykov
 */
namespace app\controllers;

use app\models\Users;
use lithium\security\Auth;

class UserController extends \lithium\action\Controller {
    
    public function index()
    {
        
        if (!Auth::check('default')) {
            return $this->redirect('Sessions::add');
        }
        $users = Users::all();
        
      //  print_r($users->data);
        return compact('users');
       // return $users;
    }
    
}

?>
