<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\core\Libraries;
use lithium\data\Connections;

$this->title('Home');

$self = $this;

?>
<?php
    if ($noauth):
?>
    <h4> Login failed. </h4>
<?php
    endif;
?>

<?=$this->form->create(null); ?> 
    <?=$this->form->field('username'); ?>
    <?=$this->form->field('password', array('type' => 'password')); ?>
    <?=$this->form->submit('Log in'); ?>
<?=$this->form->end(); ?>

