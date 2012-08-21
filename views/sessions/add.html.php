<?php 
    $this->scripts('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>'); 
    $this->scripts('<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js"></script>');
?>
<?php ob_start(); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#button").click( function(){
                       
            var loginAllowed =  ($('#login').val() != '' && $('#password').val() != '');
            
            if(!loginAllowed)
                alert('Please enter Login and Password');
            
            return loginAllowed;
            
        })
    });
</script>
<?php $this->scripts(ob_get_clean()); ?>

<b> <?=$message;?> </b>

<?=$this->form->create(null); ?>
    <?=$this->form->field('username', array('id' => 'login')); ?>
    <?=$this->form->field('password', array('type' => 'password', 'id' => 'password')); ?>
<table style="border-style: none">
    <tr>
    <td><?=$this->form->submit('Log in', array('id' => 'button')); ?></td>
    <td><a href="/midnight/logout">Logout</a></td>
    </tr>
 </table>
<?=$this->form->end(); ?>
