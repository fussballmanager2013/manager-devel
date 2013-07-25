<?php



?>
<?php

echo $this->Session->flash('auth');
echo $this->Form->create('Team');
?>
    <fieldset>
        <legend>
       		 <?php 	echo __('Add a Team'); ?></legend>
        	<input type="hidden" value="<?php echo $this->Session->read("Auth.User.id"); ?>" name="data[Team][id_user]"/>

        	<?php 	echo $this->Form->input('name');
					echo $this->Form->input('short_name');
					?>
    </fieldset>
<?php echo $this->Form->end(__('Add Team')); ?>