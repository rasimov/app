<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author avasyl
 */

namespace app\models;

class Users extends \lithium\data\Model {
   
    public $validates = array(
        'username' => array(
            array(
                'notEmpty',
                'message' => 'Please supply a username.'
            ),
            array(
                'alphaNumeric',
                'message' => 'A username may only contain letters and numbers.'
            )
        ),
        'password' => array(
            array(
                'notEmpty',
                'message' => 'Please supply a password.'
            )
        )
    );
   
}

?>
