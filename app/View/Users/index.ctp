Sie sind eingelogt als: <?php echo $this->Session->read("Auth.User.username"); ?>
<br>
<?php echo $this->Html->link('Register', '/Users/add/'); ?>
<br>
<?php echo $this->Html->link("Logout", "/Users/logout"); ?>
<br><br/><br/><br/><br/><br/><br/><br/>
<?php echo $this->Html->link("Delete", "/Users/delete/".$this->Session->read("Auth.User.id")); ?>