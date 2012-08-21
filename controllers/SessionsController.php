<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionsController
 *
 * @author inovykov
 */

namespace app\controllers;

use lithium\security\Auth;
class SessionsController extends \lithium\action\Controller{
    
    
    public function add() {
        if (Auth::check('default', $this->request)) {
            
            $message = '';
            return $this->redirect('/');
        }
       // return $this->redirect('/');
      if ($this->request->data){
        return array('message' => 'Customer with specified Login and Password didn\'t found');
      }
      
    }
    
    public function delete() {
        
        Auth::clear('default');
        return $this->redirect('/');
    }
}

?>
