<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

/**
 * This controller is used for serving static pages by name, which are located in the `/views/pages`
 * folder.
 *
 * A Lithium application's default routing provides for automatically routing and rendering
 * static pages using this controller. The default route (`/`) will render the `home` template, as
 * specified in the `view()` action.
 *
 * Additionally, any other static templates in `/views/pages` can be called by name in the URL. For
 * example, browsing to `/pages/about` will render `/views/pages/about.html.php`, if it exists.
 *
 * Templates can be nested within directories as well, which will automatically be accounted for.
 * For example, browsing to `/pages/about/company` will render
 * `/views/pages/about/company.html.php`.
 */

use app\models\Users;
use lithium\security\Auth;

class HomeController extends \lithium\action\Controller {

	public function index() {
            
            $users = Users::all();
         //   return compact('users');
           // $users = Users::find('all'); print_r ($users); die();
            $this->toHome();
        }

	public function welcome() {
            
            if (Auth::check('default')) {
                return $this->render(array('template' => 'welcome'));
            } else {    
                return $this->redirect('Home::login'); 
            }
           
	}
        
	public function login() {
            
            $noauth = false;
            
            if (Auth::check('default', $this->request)) {
                return $this->redirect('Home::welcome');
            } // else {
               // return $this->render(array('template' => 'login', 'data' => compact('noauth')));         
           // }
           
            if ($this->request->data) {
                $noauth = true;               
            }
            return compact('noauth');
           
	}

        public function logout() {
            Auth::clear('default');
            $this->redirect('/');
        }
        
        protected function toHome() {
            if (!Auth::check('default')) {
                return $this->redirect('Home::login');
            } else {
                return $this->redirect('Home::welcome');
            }           
        }

}

?>