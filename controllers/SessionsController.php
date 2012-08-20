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
        if ($this->request->data && Auth::check('default', $this->request)) {
            return $this->redirect('/');
        }
        // Handle failed authentication attempts
    }
}

?>
