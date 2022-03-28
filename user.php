<?php

class User {
	public $pername;
	public $surname;
	public $old;
	public function save_to_session() {
		$_SESSION['pername'] = $this ->pername;
		$_SESSION['surname'] = $this ->surname;
		$_SESSION['old'] = $this ->old;
	}
	public function load_from_form() {
		$this ->pername = $_POST['pername'];
		$this ->surname = $_POST['surname'];
		$this ->old = $_POST['old'];
	}
	public function get_name() {
		if (isset($this->name)) {
			return $this->name;
		}
		return '';
	}
}
?>