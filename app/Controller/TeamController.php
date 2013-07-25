<?php

class TeamController extends AppController {
	public $components = array( 'Session', 'Auth' );

	public function add() {

		if ($this->request->is('post')) {
			$this->Team->create();
			if ($this->Team->save($this->request->data)) {
				$this->Session->setFlash(__('The Team has been saved'));
			} else {
				$this->Session->setFlash(__('The Team couldn\'t be saved. Please try again.'));
			}
		}
	}

	public function createPlayers($team_id){
		$sql = "";

		for($i = 0; $i < 1; $i++){
			$sql = " INSERT INTO players(firstname, lastname, nickname, sex, birthdate, nation, team_id)
						VALUES('First', 'Last', 'Deppal', '1', '".date("Y-m-d")."', 'DE', ".$team_id.");";

			$this->Team->query($sql);

			$id = $this->Team->query('select last_insert_id() as id;')[0][0]["id"];

			$sql = " INSERT INTO player_skills(player_id, name, description, value)
					VALUES(".$id.", 'Ausdauer', 'Wie lang kannst du laufen ?', 1),
					(".$id.", 'Schuss', 'Wie fest kannst du schießen ?', 1);";

			$this->Team->query($sql);
		}

	}
}

?>