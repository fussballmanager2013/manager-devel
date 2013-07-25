<?php

// app/Model/User.php
class Team extends AppModel {

	public function beforeSave($options = array()) {
		$this->data["Team"]["active"] = 1;
		pr($this->data);
		return true;
	}
}

?>