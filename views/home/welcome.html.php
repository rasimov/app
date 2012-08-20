<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\core\Libraries;
use lithium\core\Environment;
use lithium\data\Connections;

$this->title('Home');

$self = $this;
?>

<?=$this->form->create(null, $options = array('action' => 'logout')); ?>  
    <?=$this->form->submit('Log out'); ?>
<?=$this->form->end(); ?>

