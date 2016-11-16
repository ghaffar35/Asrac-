<?php
namespace Asrac\Domain;

class Texte {

	private $id;
	private $texteDesc;

	public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTexteDesc() {
        return $this->texteDesc;
    }

    public function setTexteDesc($texteDesc) {
        $this->texteDesc = $texteDesc;
    }
}
